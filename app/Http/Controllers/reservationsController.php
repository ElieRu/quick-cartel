<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Boutique;
use App\Models\Detail;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class reservationsController extends Controller
{
    public function show ()
    {}

    public function create (Request $request)
    {
        $selectionDarticles = $request->input()[0];
        $client_id = $request->input()[1]['client_id'];

        $boutique_id = Boutique::where('user_id', Auth::id())->get()[0]->id;

        $reservation = Reservation::create([
            'boutique_id' => $boutique_id,
            'statut' => "En attente",
            'client_id' => $client_id
        ]);

        $reservation_id = Reservation::where('boutique_id', $boutique_id)
            ->where('client_id', $client_id)
            ->get()->last()->id;

        for ($i = 0; $i < count($selectionDarticles); $i++) {
            $stockDisponible = Article::where('id', $selectionDarticles[$i]['id'])->get('qtte')[0]->qtte;
            $qtteDispoEnReservation = Article::where('id', $selectionDarticles[$i]['id'])->get('qtteEnReservation')[0]->qtteEnReservation;

            if ($stockDisponible >= $selectionDarticles[$i]['qtteVente']) {

                $nouveauStock = $stockDisponible - $selectionDarticles[$i]['qtteVente'];
                $nouvelleQtteEnReservation = $qtteDispoEnReservation + $selectionDarticles[$i]['qtteVente'];

                // La résérvation ne fait pas la mise à jour du stock
                // Elle est se fait lors de la récupération de l'article.
                
                $updateQtteEnReservation = DB::table('articles')
                    ->where('id', $selectionDarticles[$i]['id'])
                    ->update([
                        'qtteEnReservation' => $nouvelleQtteEnReservation
                    ]);

                $detail = Detail::create([
                    'article_id' => $selectionDarticles[$i]['id'],
                    'qtte' => $selectionDarticles[$i]['qtteVente'],
                    'prixUnitaire' => $selectionDarticles[$i]['prix'],
                    'prixTotal' => $selectionDarticles[$i]['prix'] * $selectionDarticles[$i]['qtteVente'],
                    'devise' => $selectionDarticles[$i]['devise'],
                    'reservation_id' => $reservation_id
                ]);
            } else {

                // $boutique_id = Boutique::where('user_id', '=', Auth::id())->get('id')[0]->id;

                // $articles = DB::table('articles')
                //     ->where('articles.user_id', '=', Auth::id())
                //     ->join('boutiques', 'boutiques.user_id', '=', 'articles.user_id')
                //     ->join('categories', 'categories.id', '=', 'articles.categorie_id')
                //     ->join('specifications', 'specifications.id', '=', 'articles.specification_id')
                //     ->select('articles.*', 'categories.nom As catNom', 'specifications.nom As specNom')
                //     ->get();

                // return Inertia::render('Private/Ventes', [
                //     'message' => "Vérifiez si la(es) quantité(s) sont disponible(s) en stock",
                //     'articles' => $articles,
                //     'categories' => Categorie::all(),
                //     'specifications' => Specification::all(),
                //     'clients' => Client::where('boutique_id', '=', $boutique_id)->get()
                // ]);
            }
        }
        
        
    }

    public function put ()
    {}

    public function delete ()
    {
        dd('bien');
    }
}
