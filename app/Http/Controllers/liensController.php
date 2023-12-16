<?php

namespace App\Http\Controllers;

use App\Http\Requests\liensRequest;
use App\Models\Lien;
use Illuminate\Http\Request;

class liensController extends Controller
{
    public function show ()
    {

    }

    public function create (liensRequest $request)
    {
        $fournisseur_id = $request->fournisseur_id ? $request->fournisseur_id : null;
        $boutique_id = $request->boutique_id ? $request->boutique_id : null;

        Lien::create([
            'site' => $request->site,
            'lien' => $request->lien,
            'fournisseur_id' => $fournisseur_id,
            'boutique_id' => $boutique_id,
        ]);
    }

    public function update ()
    {
        
    }

    public function delete (Request $request)
    {
        Lien::where('id', $request->id)->delete();
    }
}
