<?php

namespace App\Http\Controllers;

use App\Http\Requests\adresseRequest;
use App\Models\adresse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adresseController extends Controller
{
    public function get($id) {
        return adresse::where('id', $id)->get();
    }

    public function create (adresseRequest $request)
    {
        adresse::create([
            'ville' => $request->ville,
            'commune' => $request->commune,
            'quartier' => $request->quartier,
            'avenue' => $request->avenue,
            'boutique_id' => $request->boutique_id,
            'fournisseur_id' => $request->fournisseur_id,
            'user_id' => Auth::id()
        ]);
    }

    public function update (adresseRequest $request, adresse $adresse) {
        
        $adresse = $adresse::find($request->id);
        
        $adresse->ville = $request->ville;
        $adresse->commune = $request->commune;
        $adresse->quartier = $request->quartier;
        $adresse->avenue = $request->avenue;
        
        // $adresse->fournisseur_id = $request->fournisseur_id;
        // $adresse->avenue = $request->avenue;
        $adresse->user_id = Auth::id();

        $adresse->save();

    }

}
