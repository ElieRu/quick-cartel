<?php

namespace App\Http\Controllers;

use App\Http\Requests\boutiqueRequest;
use App\Http\Requests\updateBoutiqueRequest;
use App\Models\Adresse;
use App\Models\Boutique;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class boutiquesController extends Controller
{
    public function show () 
    {
        return Inertia::render('Public/Boutiques', [
            'boutique' => Boutique::where('user_id', '=', Auth::id())->get(),
            'adresse' => Adresse::where('user_id', '=', Auth::id())->get()
        ]);
    }

    public function getBoutique ()
    {
        return Boutique::where('user_id', '=', Auth::id())->get() ? [0] : false;
    }

    public function create (boutiqueRequest $request, Boutique $boutique)
    {
        Boutique::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'user_id' => Auth::id()
        ]);
    }

    public function update (Boutique $boutique, updateBoutiqueRequest $request)
    {
        $boutique = DB::table('boutiques')
                    ->where('user_id', Auth::id())
                    ->update([
                        'nom' => $request->nom,
                        'email' => $request->email,
                        'phone' => $request->phone,
                        'url' => $request->url,
                        'description' => $request->description
                    ]);
    }

    public function delete (Request $request)
    {
        $data = Boutique::findOrFail($request->id);
        $data->delete();
    }
    
}
