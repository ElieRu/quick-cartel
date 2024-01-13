<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Boutique;
use App\Models\User;
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

        $myUser = null;
        $contacts = null;
        if ($user_id) {
            $boutiques = Boutique::where('user_id', '!=', $user_id)->get();
            try {
                $myUser = DB::table('users')
                    ->where('users.id', $user_id)
                    ->join('boutiques', 'boutiques.user_id', '=', 'users.id')
                    ->select('users.name', 'users.postnom', 'users.image', 'boutiques.nom as nomBoutique')
                    ->get()[0];

                $contacts = DB::table('contacts')
                    ->join('users', 'users.id', '=', 'contacts.user_id')
                    ->select('contacts.phone')
                    ->get();

            } catch (\Throwable $th) {
                $myUser = null;
            }
        } else {
            $boutiques = Boutique::all();
        }

        $checkBoutique = Boutique::where('user_id', $user_id)->exists();

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

        $categories = $articles->groupBy('nomCat');


        return Inertia::render('Home', [
            'myUser' => $myUser,
            'contacts' => $contacts,
            'checkBoutique' => $checkBoutique,
            'checkAuth' => Auth::check(),
            'boutiques' => $boutiques,
            'categories' => $categories
        ]);
    }
}
