<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Boutique;
use App\Models\Categorie;
use App\Models\Client;
use App\Models\Commande;
use App\Models\Specification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class commandesController extends Controller
{
    public function show ()
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

    public function create (Request $request)
    {
        $articlesSelectionne = $request->input()[0];
        $infos = $request->input()[1];

        $boutique_id = Boutique::where('user_id', '=', Auth::id())->get('id')[0]->id;

        $derniereCommande = 
            Commande::where('boutique_id', '=', $boutique_id)->get()->last() ? 
            Commande::where('boutique_id', '=', $boutique_id)->get()->last() : 
            0;

        $numeroDerniereCommande = $derniereCommande+1;

        for ($i = 0; $i < count($articlesSelectionne); $i++)
        {
            $stockDisponible = Article::where('id', '=', $articlesSelectionne[$i]['id'])->get('qtte')[0]->qtte;

            $nouveauStock = $stockDisponible - $articlesSelectionne[$i]['qtteCommande'];

            $MesArticles = DB::table('articles')
                ->where('id', '=', $articlesSelectionne[$i]['id'])
                ->update([
                    'qtte' => $nouveauStock
                ]);

            $commandes = Commande::create([
                'article_id' => $articlesSelectionne[$i]['id'],
                'qtte' => $articlesSelectionne[$i]['qtteCommande'],
                'prix' => $articlesSelectionne[$i]['prix'],
                'client_id' => $infos['client_id'],
                'prixTotal' => $articlesSelectionne[$i]['qtteCommande'] * $articlesSelectionne[$i]['prix'],
                'dateDisponible' => $infos['date'],
                'devise' => $articlesSelectionne[$i]['devise'],
                'numero' => $numeroDerniereCommande,
                'boutique_id' => $boutique_id
            ]);

        }
    }
}
