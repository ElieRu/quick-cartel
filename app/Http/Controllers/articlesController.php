<?php

namespace App\Http\Controllers;

use App\Http\Requests\articlesManagmentRequest;
use App\Models\Article;
use App\Models\Boutique;
use App\Models\Categorie;
use App\Models\Client;
use App\Models\Detail;
use App\Models\Fournisseur;
use App\Models\Image;
use App\Models\Specification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;

class articlesController extends Controller
{
    public function show(Request $request)
    {
        $articles = Article::query()
            ->when($request->search, function ($query, $search) {
                $query->where('articles.nom', 'like', "%{$search}%");
            })
            ->where('articles.user_id', '=', Auth::id())
            // ->join('boutiques', 'boutiques.user_id', '=', Auth::id())
            ->join('categories', 'categories.id', '=', 'articles.categorie_id')
            ->join('specifications', 'specifications.id', '=', 'articles.specification_id')
            ->select('articles.*', 'categories.nom As catNom', 'specifications.nom As specNom')
            ->paginate(15)
            ->withQueryString();

        $boutique_id = Boutique::where('user_id', '=', Auth::id())->get('id')[0]->id;

        return Inertia::render('Private/Articles', [
            'articles' => $articles,
            'categories' => Categorie::all(),
            'specifications' => Specification::all(),
            'clients' => Client::where('boutique_id', '=', $boutique_id)->get()
        ]);
    }

    public function create(articlesManagmentRequest $request)
    {
        $boutique_id = Boutique::where('user_id', '=', Auth::id())->get('id')[0]->id;

        Article::create([
            'nom' => $request->nom,
            'qtte' => 0,
            'qtteEnReservation' => 0,
            'user_id' => Auth::id(),
            'categorie_id' => $request->categorie,
            'specification_id' => $request->specification,
            'boutique_id' => $boutique_id
        ]);

        $article_id = Article::where('boutique_id', $boutique_id)->get()->last()->id;

        Image::create([
            'default' => true,
            'article_id' => $article_id
        ]);

    }

    public function update(articlesManagmentRequest $request)
    {
        DB::table('articles')
            ->where('id', $request->id)
            ->update([
                'nom' => $request->nom,
                'prix' => $request->prix,
                'devise' => $request->devise,
                'categorie_id' => $request->categorie_id,
                'specification_id' => $request->specification_id,
                'description' => $request->description,
            ]);
    }

    public function remove(Request $request)
    {
        Article::findOrFail($request->id)->delete();
        return to_route('articles.show');
    }

    public function listPromotion ()
    {
        // dd('bien');
    }

    public function showMore (Request $request)
    {
        $boutique_id = Boutique::where('user_id', '=', Auth::id())->get('id')[0]->id;
        $images = Image::where('article_id', $request->id)->get();

        $article = DB::table('articles')
            ->where('articles.id', '=', $request->id)
            ->join('categories', 'categories.id', '=', 'articles.categorie_id')
            ->join('specifications', 'specifications.id', '=', 'articles.specification_id')
            ->select('articles.*', 'categories.nom AS nomCat', 'specifications.nom AS nomSpec')
            ->get()[0];

        $descriptions = DB::table('descriptions')
            ->where('article_id', $request->id)
            ->select('descriptions.*')
            ->get();
        
        $promotions = DB::table('promotions')
            ->where('article_id', $request->id)
            ->where('boutique_id', $boutique_id)
            ->limit(3)
            ->get();

            // dd($promotions);

        $requisitions = DB::table('requisitions')
            ->where('requisitions.boutique_id', '=', $boutique_id)
            ->where('article_id', '=', $request->id)
            ->join('fournisseurs', 'fournisseurs.id', '=', 'requisitions.fournisseur_id')
            ->select('requisitions.*', 'fournisseurs.nom as nomFournisseur')
            ->get();

        $select = $request->select ? $request->select : 'ventes';

        $details = Detail::query()
            ->when($select, function ($query, $select) {
                if ($select == 'ventes') {
                    $query->whereNotNull('vente_id');
                    $query->join('ventes', 'ventes.id', '=', 'vente_id');
                    $query->join('clients', 'clients.id', '=', 'client_id');
                    $query->select('details.*', 'ventes.created_at as dateActivite', 'clients.nom as nomClient', 'clients.postnom as postnomClient');
                } else if ($select == 'commandes') {
                    $query->whereNotNull('commande_id');
                    $query->join('commandes', 'commandes.id', '=', 'commande_id');
                    $query->join('clients', 'clients.id', '=', 'client_id');
                    $query->select('details.*', 'commandes.created_at as dateActivite', 'clients.nom as nomClient', 'clients.postnom as postnomClient');
                } else {
                    $query->whereNotNull('reservation_id');
                    $query->join('reservations', 'reservations.id', '=', 'reservation_id');
                    $query->join('clients', 'clients.id', '=', 'client_id');
                    $query->select('details.*', 'reservations.created_at as dateActivite', 'clients.nom as nomClient', 'clients.postnom as postnomClient');
                }
            })
            ->where('article_id', $request->id)
            ->get();
            
        $fournisseurs = Fournisseur::where('boutique_id', '=', $boutique_id)->get();

        return Inertia::render('Private/ArticlesManagment/Details', [
            'article' => $article,
            'categories' => Categorie::all(),
            'specifications' => Specification::all(),
            'images' => $images,
            'descriptions' => $descriptions,
            'activites' => $details,
            'requisitions' => $requisitions,
            'fournisseurs' => $fournisseurs,
            'promotions' => $promotions
        ]);
    }

    public function accountArticles (Request $request)
    {
        if ($request->id) {
            $boutique_id = $request->id;
        } else {
            $boutique_id = Session::get('boutique_id');
        }

        $articles = DB::table('articles')
            ->where('articles.boutique_id', $boutique_id)
            ->join('specifications', 'specifications.id', '=', 'articles.specification_id')
            ->join('images', 'images.article_id', '=', 'articles.id')
            ->where('images.default', '=', 1)
            ->select('articles.*', 'specifications.nom as nomSpec', 'images.*')
            ->get();

        return Inertia::render('Public/Articles', [
            'articles' => $articles
        ]);
    }
}
