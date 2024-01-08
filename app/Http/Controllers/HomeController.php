<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Boutique;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class homeController extends Controller
{
    public function show()
    {

        try {
            $user_id = Auth::user()->id;
        } catch (\Throwable $th) {
            $user_id = null;
        }

        if ($user_id) {
            $boutiques = Boutique::where('user_id', '!=', $user_id)->get();
        } else {
            $boutiques = Boutique::all();
        }

        $articles = Article::with(['descriptions', 'images'])
            ->join('specifications', 'specifications.id', '=', 'articles.specification_id')
            ->join('categories', 'categories.id', '=', 'articles.categorie_id')
            ->join('images', 'images.article_id', '=', 'articles.id')
            ->join('boutiques', 'boutiques.id', '=', 'articles.boutique_id')
            ->where('images.image', '!=', null)
            ->where('images.default', '=', true)
            ->select(
                'articles.*',
                'specifications.nom as nomSpec',
                'categories.nom as nomCat',
                'images.image as src',
                'boutiques.logo',
                'boutiques.id as boutique_id'
            )
            ->limit(7)
            ->get();

        return Inertia::render('Home', [
            'boutiques' => $boutiques,
            'articles' => $articles,
        ]);
    }
}
