<?php

namespace App\Http\Controllers;

use App\Http\Requests\articlesManagmentRequest;
use App\Models\Article;
use App\Models\Boutique;
use App\Models\Categorie;
use App\Models\Client;
use App\Models\Description;
use App\Models\Requisition;
use App\Models\Specification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class articlesController extends Controller
{
    public function show (Request $request)
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

    public function create (articlesManagmentRequest $request, Article $article) 
    {
        $boutique_id = Boutique::where('user_id', '=', Auth::id())->get('id')[0]->id;
  
        Article::create([
            'nom' => $request->nom,
            // 'prix' => $request->prix,
            'qtte' => 0,
            'qtteEnReservation' => 0,
            // 'devise' => $request->devise,
            'user_id' => Auth::id(),
            'categorie_id' => $request->categorie,
            'specification_id' => $request->specification,
            'boutique_id' => $boutique_id
        ]);

    }

    public function update (articlesManagmentRequest $request, Article $article)
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

    public function remove (Request $request)
    {

        $requisitions = Requisition::where('article_id', $request->id);
        $requisitions->delete();

        $description = Description::where('article_id', $request->id);
        $description->delete();
        
        $article = Article::findOrFail($request->id);
        $article->delete();
    }

    public function searching (Article $article, Request $request)
    {
        return Inertia::render('Private/Articles', [
            'articles' => Article::find($request->article)
        ]);
    }
}
