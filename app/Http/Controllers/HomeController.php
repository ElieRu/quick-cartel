<?php

namespace App\Http\Controllers;

use App\Models\Boutique;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class homeController extends Controller
{
    public function show () {
    
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

        return Inertia::render('Home', [
            'boutiques' => $boutiques
        ]);
    }
}
