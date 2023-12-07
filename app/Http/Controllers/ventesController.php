<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Boutique;
use App\Models\Categorie;
use App\Models\Client;
use App\Models\Detail;
use App\Models\Specification;
use App\Models\Vente;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class ventesController extends Controller
{
    public function show()
    {
        $articles = DB::table('articles')
            ->where('articles.user_id', '=', Auth::id())
            // ->where('articles.qtte', '>=', 1)
            ->join('categories', 'categories.id', '=', 'articles.categorie_id')
            ->join('specifications', 'specifications.id', '=', 'articles.specification_id')
            ->select('articles.*', 'categories.nom As catNom', 'specifications.nom As specNom')
            ->get();
        
        // dd($articles);

        $boutique_id = Boutique::where('user_id', '=', Auth::id())->get('id')[0]->id;

        return Inertia::render('Private/Ventes', [
            'articles' => $articles,
            'categories' => Categorie::all(),
            'specifications' => Specification::all(),
            'clients' => Client::where('boutique_id', '=', $boutique_id)->get()
        ]);
    }

    public function create(Request $request)
    {
        $selectionDarticles = $request->input()[0];
        $client_id = $request->input()[1]['client_id'];

        $boutique_id = Boutique::where('user_id', '=', Auth::id())->get()[0]->id;

        $vente = Vente::create([
            // 'detail_id' =>
            // 'total' => 
            // 'moyen_paiement' => 
            'boutique_id' => $boutique_id,
            'client_id' => $client_id
        ]);

        $vente_id = Vente::where('boutique_id', '=', $boutique_id)
            ->where('client_id', '=', $client_id)
            ->get()->last()->id;

        // La validation de chaque formulaire doit se faire ici...
        $derniereVente = Vente::all()->last() ? Vente::all()->last()->numero : 0;

        $numeroDerniereVente = $derniereVente + 1;

        for ($i = 0; $i < count($selectionDarticles); $i++) {
            $stockDisponible = Article::where('id', '=', $selectionDarticles[$i]['id'])->get('qtte')[0]->qtte;

            if ($stockDisponible >= $selectionDarticles[$i]['qtteVente']) {

                $nouveauStock = $stockDisponible - $selectionDarticles[$i]['qtteVente'];

                $updateStock = DB::table('articles')
                    ->where('id', '=', $selectionDarticles[$i]['id'])
                    ->update([
                        'qtte' => $nouveauStock
                    ]);

                $detail = Detail::create([
                    'article_id' => $selectionDarticles[$i]['id'],
                    'qtte' => $selectionDarticles[$i]['qtteVente'],
                    'prixUnitaire' => $selectionDarticles[$i]['prix'],
                    'prixTotal' => $selectionDarticles[$i]['prix'] * $selectionDarticles[$i]['qtte'],
                    'devise' => $selectionDarticles[$i]['devise'],
                    'vente_id' => $vente_id
                ]);
            } else {

                $boutique_id = Boutique::where('user_id', '=', Auth::id())->get('id')[0]->id;

                $articles = DB::table('articles')
                    ->where('articles.user_id', '=', Auth::id())
                    ->join('boutiques', 'boutiques.user_id', '=', 'articles.user_id')
                    ->join('categories', 'categories.id', '=', 'articles.categorie_id')
                    ->join('specifications', 'specifications.id', '=', 'articles.specification_id')
                    ->select('articles.*', 'categories.nom As catNom', 'specifications.nom As specNom')
                    ->get();

                return Inertia::render('Private/Ventes', [
                    'message' => "Vérifiez si la(es) quantité(s) sont disponible(s) en stock",
                    'articles' => $articles,
                    'categories' => Categorie::all(),
                    'specifications' => Specification::all(),
                    'clients' => Client::where('boutique_id', '=', $boutique_id)->get()
                ]);
            }
        }
    }

    public function historique(Request $request)
    {
        $boutique_id = Boutique::where('user_id', '=', Auth::id())->get('id')[0]->id;

        $ventes = DB::table('ventes')
            ->where('boutique_id', '=', $boutique_id)
            // ->when('client_id', '=', $request->client_id)
            ->join('details', 'details.vente_id', '=', 'ventes.id')
            ->get();
            
        $groupByDetails = $ventes->groupBy('vente_id');

        return Inertia::render('Private/Historique', [
            'ventes' => $groupByDetails
        ]);
    }
}
