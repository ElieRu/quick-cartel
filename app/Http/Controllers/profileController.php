<?php

namespace App\Http\Controllers;

use App\Http\Requests\userRequest;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class profileController extends Controller
{
    public function show (Request $request) {
        $contacts = Contact::where('user_id', Auth::id())
            ->where('boutique_id', null)
            ->where('client_id', null)
            ->where('fournisseur_id', null)
            ->get();

        return Inertia::render('Private/Profile', [
            'user' => Auth::user(),
            'contacts' => $contacts
        ]);
    }

    public function update (userRequest $request, User $user) 
    {
        
        try {
            $user = User::find(Auth::id());

            $user->name = $request->name;
            $user->postnom = $request->postnom;
            $user->email = $request->email;
            $user->date_de_naissance = $request->date_de_naissance;
            $user->sexe = $request->sexe;
            $user->profession = $request->profession;

            $user->save();

        } catch (\Throwable $th) {
            
            // Block the case of two emails in DB

        }

    }

}
