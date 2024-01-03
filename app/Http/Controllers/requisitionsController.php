<?php

namespace App\Http\Controllers;

use App\Http\Requests\requisitionsRequest;
use App\Models\Article;
use App\Models\Boutique;
use App\Models\Requisition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class requisitionsController extends Controller
{
    public function index()
    {
        dd("bien");
    }

    public function create(requisitionsRequest $request)
    {
        $boutique_id = Boutique::where('user_id', '=', Auth::id())->get('id')[0]->id;

        $requisition = Requisition::create([
            'article_id' => $request->article_id,
            'qtte' => $request->qtte,
            'date' => $request->date,
            'montant' => $request->montant,
            'devise' => $request->devise,
            'statut' => 'Approuvé',

            'boutique_id' => $boutique_id,
            'fournisseur_id' => $request->fournisseur_id,
        ]);

        $qtteActuelle = Article::where('id', '=', $request->article_id)->get('qtte')[0]->qtte;

        $nouvelleValeur = $qtteActuelle + $request->qtte;

        DB::table('articles')
            ->where('id', '=', $request->article_id)
            ->update([
                'qtte' => $nouvelleValeur
            ]);
    }

    public function update(requisitionsRequest $request)
    {
        DB::table('requisitions')
            ->where('id', '=', $request->id)
            ->update([
                'qtte' => $request->qtte,
                'date' => $request->date,
                'montant' => $request->montant,
                'devise' => $request->devise,
                'fournisseur_id' => $request->fournisseur_id,
            ]);
    }

    public function cancel(Request $request)
    {
        $requisition = Requisition::where('id', $request->requisition_id);
        $requisition_statut = $requisition->get('statut')[0]->statut;

        dd($request);
        
        if ($request->requisition_id !== $requisition_statut) {
            dd('modify somethig');
        } else {
            dd('same value');
        }
        // dd($requisition);

        $stockActuel = $request->article_qtte - $request->requisition_qtte;

        DB::table('articles')
            ->where('id', $request->article_id)
            ->update([
                'qtte' => $stockActuel
            ]);

        DB::table('requisitions')
            ->where('id', $request->requisition_id)
            ->update([
                'statut' => "Annulé"
            ]);
    }

    public function delete(Request $request)
    {
        Requisition::findOrFail($request->id)->delete();
    }
}
