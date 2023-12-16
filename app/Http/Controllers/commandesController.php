<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Boutique;
use App\Models\Categorie;
use App\Models\Client;
use App\Models\Commande;
use App\Models\Detail;
use App\Models\Specification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class commandesController extends Controller
{
    public function show()
    {

        $articles = DB::table('articles')
            ->where('articles.user_id', '=', Auth::id())
            ->where('articles.qtte', '=', null)
            ->orWhere('articles.qtte', '<=', 0)
            // ->join('boutiques', 'boutiques.user_id', '=', 'articles.user_id')
            ->join('categories', 'categories.id', '=', 'articles.categorie_id')
            ->join('specifications', 'specifications.id', '=', 'articles.specification_id')
            ->select('articles.*', 'categories.nom As catNom', 'specifications.nom As specNom')
            ->get();

        $boutique_id = Boutique::where('user_id', '=', Auth::id())->get('id')[0]->id;

        return Inertia::render('Private/Commandes', [
            'articles' => $articles,
            'categories' => Categorie::all(),
            'specifications' => Specification::all(),
            'clients' => Client::where('boutique_id', '=', $boutique_id)->get()
        ]);
    }

    public function create(Request $request)
    {
        $articlesSelectionne = $request->input()[0];
        $client_id = $request->input()[1]['client_id'];
        $dateDisponible = $request->input()[2]['dateDisponible'];

        $boutique_id = Boutique::where('user_id', Auth::id())->get('id')[0]->id;

        $commandes = Commande::create([
            'dateDisponible' => $dateDisponible,
            'statut' => "En attente",
            'boutique_id' => $boutique_id,
            'client_id' => $client_id
        ]);

        $commande_id = Commande::where('boutique_id', $boutique_id)
            ->where('client_id', $client_id)
            ->get()->last()->id;


        for ($i = 0; $i < count($articlesSelectionne); $i++) {
            
            $stockDisponible = Article::where('id', $articlesSelectionne[$i]['id'])->get()[0]->qtte;
            // if ($stockDisponible >= $articlesSelectionne[$i]['qtteVente']) {

                $nouveauStock = $stockDisponible - $articlesSelectionne[$i]['qtteVente'];

                $updateStock = DB::table('articles')
                    ->where('id', '=', $articlesSelectionne[$i]['id'])
                    ->update([
                        'qtte' => $nouveauStock
                    ]);

                $detail = Detail::create([
                    'article_id' => $articlesSelectionne[$i]['id'],
                    'qtte' => $articlesSelectionne[$i]['qtteVente'],
                    'prixUnitaire' => $articlesSelectionne[$i]['prix'],
                    'prixTotal' => $articlesSelectionne[$i]['prix'] * $articlesSelectionne[$i]['qtteVente'],
                    'devise' => $articlesSelectionne[$i]['devise'],
                    'commande_id' => $commande_id
                ]);
            // } else {

            //     $boutique_id = Boutique::where('user_id', '=', Auth::id())->get('id')[0]->id;

            //     $articles = DB::table('articles')
            //         ->where('articles.user_id', '=', Auth::id())
            //         ->join('boutiques', 'boutiques.user_id', '=', 'articles.user_id')
            //         ->join('categories', 'categories.id', '=', 'articles.categorie_id')
            //         ->join('specifications', 'specifications.id', '=', 'articles.specification_id')
            //         ->select('articles.*', 'categories.nom As catNom', 'specifications.nom As specNom')
            //         ->get();

            //     return Inertia::render('Private/Ventes', [
            //         'message' => "Vérifiez si la(es) quantité(s) sont disponible(s) en stock",
            //         'articles' => $articles,
            //         'categories' => Categorie::all(),
            //         'specifications' => Specification::all(),
            //         'clients' => Client::where('boutique_id', '=', $boutique_id)->get()
            //     ]);
            // }
        }
    }
}
