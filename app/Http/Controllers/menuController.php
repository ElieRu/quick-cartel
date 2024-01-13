<?php

namespace App\Http\Controllers;

use App\Models\Boutique;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class menuController extends Controller
{
    public function show ()
    {
        try {
            $user_id = Auth::user()->id;
        } catch (\Throwable $th) {
            $user_id = null;
        }
        
        try {
            $boutique = Boutique::where('user_id', $user_id)->get(["id", "nom"]);
        } catch (\Throwable $th) {
            $boutique = null;
        }
        

        return response()->json([
            'boutique' => $boutique,
        ]);
    }
}
