<?php

namespace App\Http\Controllers;

use App\Models\Boutique;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{

    public function store () {
        return view('private.profile', ['user' => Auth::user()]);
    }

    public function get (Request $request) {
        return view('private.profile', ['user' => Auth::user()]);
    }

    public function update (Request $request, User $user)
    {
        
        $user->name = $request->name;
        $user->postname = $request->postname;
        $user->email = $request->email;
        $user->birthday = $request->birthday;
        $user->sexe = $request->sexe;
        $user->profession = $request->profession;
        $user->name = $request->name;

        $user->save();

        return redirect('/profile')->with('success', "L'utilisateur a été mis à jour");

    }

    public function userInformations (Boutique $boutique) 
    {
        return response()->json([
            'user' => Auth::user(),
            'boutique' => Boutique::where('user_id', Auth::id())->get(),
        ]);
    }

}
