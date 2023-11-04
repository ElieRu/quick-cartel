<?php

namespace App\Http\Controllers;

use App\Http\Requests\adresseRequest;
use App\Models\adresse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adresseController extends Controller
{
    public function show (adresseRequest $request, adresse $adresse) {

        if (adresse::where('user_id', Auth::id())->exists()) {
            
            $adresse = $adresse::find($request->id);
            
            $adresse->ville = $request->ville;
            $adresse->commune = $request->commune;
            $adresse->quartier = $request->quartier;
            $adresse->avenue = $request->avenue;

            $adresse->save();

        } else {

            adresse::create([
                'ville' => $request->ville,
                'commune' => $request->commune,
                'quartier' => $request->quartier,
                'avenue' => $request->avenue,
                'user_id' => Auth::id()
            ]);
            
        }
    }

    public function getadresse($id) {
        return adresse::where('user_id', $id)->get();
    }

    public function update (adresseRequest $request)
    {
        dd($request);
    }

}
