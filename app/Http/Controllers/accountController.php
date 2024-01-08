<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;

class accountController extends Controller
{
    public function show (Request $request)
    {
        if ($request->id) {
            Session::put('boutique_id', $request->id);
        } 

        $articles = DB::table('articles')
            ->where('boutique_id', Session::get('boutique_id'))
            ->join('specifications', 'specifications.id', '=', 'articles.specification_id')
            ->join('images', 'images.article_id', '=', 'articles.id')
            ->where('images.default', '=', true)
            ->select('articles.*', 'specifications.nom as nomSpec', 'images.image')
            ->get();

        $promotions = DB::table('promotions')
            ->where('promotions.boutique_id', Session::get('boutique_id'))
            ->join('articles', 'articles.id', '=', 'promotions.article_id')
            ->join('images', 'images.article_id', '=', 'articles.id')
            ->where('images.default', '=', true)
            ->select('promotions.*', 'images.image as image', 'promotions.nom as nomPromo', 'articles.*', 'articles.nom as nomArt')
            ->get();

            // dd($promotions);

        return Inertia::render('Public/Account', [
            'user' => Auth::user(),
            'articles' => $articles,
            'promotions' => $promotions,
            'my_boutique_id' => Session::get('boutique_id')
        ]);
    }

}
