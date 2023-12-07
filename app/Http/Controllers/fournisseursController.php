<?php

namespace App\Http\Controllers;

use App\Http\Requests\FournisseurRequest;
use App\Models\Boutique;
use App\Models\Fournisseur;
use App\Models\Requisition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class fournisseursController extends Controller
{
    private $fournisseurs;

    public function show (Request $request)
    {
        try {
            $boutique_id = Boutique::where('user_id', '=', Auth::id())->get('id')[0]->id;;
        } catch (\Throwable $th) {
            $boutique_id = null;
        }

        $query = $request->get('search');

        return Inertia::render('Private/Fournisseur', [
            'fournisseurs' => Fournisseur::where("nom", "LIKE", "%{$query}%")
                        ->where('boutique_id', '=', $boutique_id)
                        ->where('boutique_id', '=', $boutique_id)->get()
        ]);
    }

    public function create (FournisseurRequest $request)
    {
        Fournisseur::create([
            'nom' => $request->nom,
            'email' => $request->email,
            'phone' => $request->phone,
            'boutique_id' => Boutique::where('user_id', '=', Auth::id())->get('id')[0]->id,
        ]);
    }

    public function put (FournisseurRequest $request)
    {
        DB::table('fournisseurs')
            ->where('id', '=', $request->id)
            ->update([
                'nom' => $request->nom,
                'email' => $request->email,
                'phone' => $request->phone,
            ]);
    }

    public function delete (Request $request)
    {
        $requisitions = Requisition::where('fournisseur_id', '=', $request->id);
        $requisitions->delete();

        $fournisseur = Fournisseur::findOrFail($request->id);
        $fournisseur->delete();
    }

    public function moreInfos (Request $request) 
    {
        $idBoutique = Boutique::where('user_id', '=', Auth::id())->get('id')[0]->id;
        $fournisseur = Fournisseur::where('id', '=', $request->id)->get();

        $requisitions = DB::table('requisitions')
            ->where('fournisseur_id', '=', $request->id)
            ->where('boutique_id', '=', $fournisseur[0]->boutique_id)
            ->select('requisitions.*')
            ->get();


        return Inertia::render('Private/FournisseurInfos', [
            'requisitions' => $requisitions
        ]);
    }

}
