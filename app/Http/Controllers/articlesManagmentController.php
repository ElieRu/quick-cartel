<?php

namespace App\Http\Controllers;

use App\Http\Requests\articlesManagmentRequest;
use App\Http\Requests\caracteristiqueRequest;
use App\Http\Requests\imageRequest;
use App\Models\Article;
use App\Models\Caracteristique;
use App\Models\Categorie;
use App\Models\DeviseMonetaire;
use App\Models\Specification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class articlesManagmentController extends Controller
{
    // public function show (Article $article, Categorie $categorie, Specification $specification)
    // {
    //     // Les informations système...
    //     $art = [
    //         'cat1' => [
    //             'spec1' => ['car1', 'car2'],
    //             'spec2' => ['car1', 'car2']
    //         ],
    //         'cat2' => [
    //             'spec1' => ['car1', 'car2'],
    //             'spec2' => ['car1', 'car2']
    //         ]
    //     ];


    //     return Inertia::render('Private/Articles', [
    //         'articles' => Article::where('user_id', Auth::id())->get(),
    //         'categories' => Categorie::all(),
    //         'specifications' => Specification::all(),
    //         'devise_monetaires' => DeviseMonetaire::all()
    //     ]);
    // }

    // public function store (articlesManagmentRequest $request, Article $article) 
    // {
    //     Article::create([
    //         'nom' => $request->nom,
    //         'prix' => $request->prix,
    //         'user_id' => Auth::id(),
    //         'categorie_id' => $request->categorie,
    //         'specification_id' => $request->specification,
    //         'monetaire_id' => $request->devise,
    //     ]);
    // }

    // public function update (articlesManagmentRequest $request, Article $article)
    // {
    //     $article->nom = $request->nom;
    //     $article->prix = $request->prix;
    //     $article->devise = $request->devise;
    //     $article->categorie_id = $request->categorie;
    //     $article->specification_id = $request->specification;
    //     $article->user_id = Auth::id();

    //     $article->save();
    // }

    // public function remove (Article $article, Request $request)
    // {
    //     $data = Article::findOrFail($request->id);
    //     $data->delete();
    // }

    // public function searching (Article $article, Request $request)
    // {
    //     return Inertia::render('Private/Articles', [
    //         'articles' => Article::find($request->article)
    //     ]);
    // }
}
