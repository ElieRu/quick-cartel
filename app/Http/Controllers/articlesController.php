<?php

namespace App\Http\Controllers;

use App\Http\Requests\articlesManagmentRequest;
use App\Models\Article;
use App\Models\Categorie;
use App\Models\Devisemonetaire;
use App\Models\Specification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class articlesController extends Controller
{
    public function show (Article $article, Categorie $categorie, Specification $specification)
    {
        // $articles = DB::table('articles')
            // ->join('categories', 'categories.id', '=', 'articles.categorie_id')
            // ->join('specifications', 'specifications.id', '=', 'categories.specification_id')
            // ->join('devisemonetaires', 'devisemonetaires.id', '=', 'articles.monetaire_id')
            // ->select('articles.id', 'articles.nom', 'articles.user_id', 'categories.designation AS categorie', 'specifications.nom AS specification', 'articles.prix', 'devisemonetaires.symbole')
            // ->get();

        return Inertia::render('Private/Articles', [
            'articles' => $article->where('user_id', Auth::id()),
            'categories' => Categorie::all(),
            'specifications' => Specification::all(),
            // 'devise_monetaires' => Devisemonetaire::all()
        ]);
    }

    public function store (articlesManagmentRequest $request, Article $article) 
    {
        Article::create([
            'nom' => $request->nom,
            'prix' => $request->prix,
            'user_id' => Auth::id(),
            'categorie_id' => $request->categorie,
            'specification_id' => $request->specification,
            'monetaire_id' => $request->devise,
        ]);
    }

    public function update (articlesManagmentRequest $request, Article $article)
    {
        $article->nom = $request->nom;
        $article->prix = $request->prix;
        $article->devise = $request->devise;
        $article->categorie_id = $request->categorie;
        $article->specification_id = $request->specification;
        $article->user_id = Auth::id();

        $article->save();
    }

    public function remove (Request $request)
    {
        $data = Article::findOrFail($request->id);
        $data->delete();
    }

    public function searching (Article $article, Request $request)
    {
        return Inertia::render('Private/Articles', [
            'articles' => Article::find($request->article)
        ]);
    }
}
