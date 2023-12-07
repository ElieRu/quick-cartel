<?php

namespace App\Http\Controllers;

use App\Http\Requests\detailRequest;
use App\Models\Boutique;
use App\Models\Categorie;
use App\Models\Detail;
use App\Models\Fournisseur;
use App\Models\Specification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class detailsController extends Controller
{
    public function index (Request $request)
    {
        $article = DB::table('articles')
            ->where('articles.id', '=', $request->id)
            ->join('categories', 'categories.id', '=', 'articles.categorie_id')
            ->join('specifications', 'specifications.id', '=', 'articles.specification_id')
            ->select('articles.*', 'categories.nom AS nomCat', 'specifications.nom AS nomSpec')
            ->get();

        $details = DB::table('details')
            ->where('article_id', '=', $request->id)
            ->select('details.*')
            ->get();

        $boutique_id = Boutique::where('user_id', '=', Auth::id())->get('id')[0]->id;

        
        $requisitions = DB::table('requisitions')
            ->where('requisitions.boutique_id', '=', $boutique_id)
            ->where('article_id', '=', $request->id)
            // ->join('fournisseurs', 'fournisseurs.id', '=', 'requisitions.fournisseur_id')
            // ->orWhere('fournisseurs', 'fournisseurs.id', '=', 'requisitions.fournisseur_id')
            // ->select('requisitions.*', 'fournisseurs.nom AS nomFournisseur')
            ->get();

        // dd($requisitions);
        
        $fournisseurs = Fournisseur::where('boutique_id', '=', $boutique_id)->get();

        return Inertia::render('Private/ArticlesManagment/Details', [
            'article' => $article[0],
            'categories' => Categorie::all(),
            'specifications' => Specification::all(),
            'details' => $details,
            'requisitions' => $requisitions,
            'fournisseurs' => $fournisseurs
        ]);
    }

    public function store (detailRequest $request)
    {
        Detail::create([
            'nom' => $request->nom,
            'valeur' => $request->valeur,
            'article_id' => $request->article_id
        ]);
        
    }

    public function update (detailRequest $request)
    {
        $detail = DB::table('details')
            ->where('id', '=', $request->id)
            ->update([
                'nom' => $request->nom,
                'valeur' => $request->valeur,
            ]);
    }

    public function remove (Request $request)
    {
        $data = Detail::findOrFail($request->id);
        $data->delete();
    }
}
