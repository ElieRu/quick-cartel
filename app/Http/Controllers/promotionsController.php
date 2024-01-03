<?php

namespace App\Http\Controllers;

use App\Http\Requests\promotionsRequest;
use App\Models\Boutique;
use App\Models\Image;
use App\Models\Promotion;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;

class promotionsController extends Controller
{
    public function show(Request $request)
    {
        try {
            $boutique_id = Boutique::where('user_id', '=', Auth::id())->get('id')[0]->id;
        } catch (\Throwable $th) {
            $boutique_id = null;
        }

        // dd($request);
        // if ($boutique_id == null) {
        $boutique_id = Session::get('boutique_id');
        // } else {
        // $boutique_id = Session::get('boutique_id');
        // }

        $promotions = Promotion::query()
            ->when($request->search, function ($query, $search) {
                $query->where('articles.nom', 'like', "%{$search}%");
            })
            ->where('promotions.boutique_id', $boutique_id)
            ->join('articles', 'articles.id', '=', 'promotions.article_id')
            ->join('images', 'images.article_id', '=', 'promotions.article_id')
            ->where('images.default', true)
            ->select('promotions.*', 'promotions.id as idPromo', 'articles.*', 'articles.nom as nomArticle', 'promotions.nom as nomPromotion', 'images.*')
            ->get();

        return Inertia::render('Public/Promotions', [
            'promotions' => $promotions
        ]);
    }

    private function callCreation(Request $request, $boutique_id)
    {

        Promotion::create([
            'nom' => $request->nom,
            'dateDebut' => $request->dateDebut,
            'dateFin' => $request->dateFin,
            'type' => $request->type,
            'description' => $request->description,
            'pourcentage' => $request->pourcentage,
            'montantReduction' => $request->montantReduction,
            'article_id' => $request->article_id,
            'boutique_id' => $boutique_id
        ]);
    }

    public function create(promotionsRequest $request)
    {

        $boutique_id = Boutique::where('user_id', Auth::id())->get('id')[0]->id;

        $articles = DB::table('articles')->where('id', $request->article_id);
        $images = DB::table('images');

        $verify_image = $images->where('article_id', $request->article_id)->exists();

        if (!$verify_image) {
            Image::create([
                'default' => true,
                'article_id' => $request->article_id
            ]);
        }

        $article_prix = $articles->get()[0]->prix;


        if ($request->type == "Réduction forfaitaire") {
            if ($article_prix > $request->montantReduction) {
                $prixPromotion = $article_prix - $request->montantReduction;
                $articles->update([
                    'prixPromotion' => $prixPromotion
                ]);

                $this->callCreation($request, $boutique_id);
            } else {
                dd("Montant de réduction ne doit pas etre supérieur");
            }
        }


        if ($request->type == "Rémise en pourcentage") {
            if ($request->pourcentage > 0 && $request->pourcentage < 100) {
                $prixPourcentage = ($request->pourcentage * 100) / $article_prix;
                $prixPromotion = $article_prix - $prixPourcentage;
                $articles->update([
                    'prixPromotion' => $prixPromotion
                ]);

                $this->callCreation($request, $boutique_id);
            } else {
                dd("Essayez entre 0 et 100");
            }
        }
    }

    public function update()
    {
        // 
    }

    public function delete(Request $request)
    {
        Promotion::where('id', $request->id)->delete();
    }

    public function moreInfos(Request $request)
    {
        $user = User::where('id', Auth::id());

        if ($user->exists()) {
            // if ($user->) {
            // dd($user->get()[0]->id);
            $user->get();
            // }
        } else {
            // dd("dd");
            $user = false;
        }

        // dd($user);

        $promotion = DB::table('promotions')
            ->where('promotions.id', $request->id)
            ->join('articles', 'articles.id', '=', 'promotions.article_id')
            ->select('promotions.*', 'articles.prixPromotion')
            ->get()[0];

        $informations = DB::table('articles')
            ->join('promotions', 'promotions.article_id', '=', 'articles.id')
            ->where('promotions.id', $request->id)
            ->join('categories', 'categories.id', '=', 'articles.categorie_id')
            ->join('specifications', 'specifications.id', '=', 'articles.specification_id')
            ->select('articles.*', 'categories.nom as nomCat', 'specifications.nom as nomSpec')
            ->get()[0];

        $descriptions = DB::table('descriptions')
            ->join('promotions', 'promotions.article_id', '=', 'descriptions.article_id')
            ->where('promotions.id', $request->id)
            ->select('descriptions.*')
            ->get();

        $images = DB::table('images')
            ->join('promotions', 'promotions.article_id', '=', 'images.article_id')
            ->where('promotions.id', $request->id)
            ->select('images.*')
            ->get();


        return Inertia::render('Public/Promotions/More', [
            'user' => $user,
            'images' => $images,
            'promotion' => $promotion,
            'descriptions' => $descriptions,
            'informations' => $informations,
        ]);
    }
}
