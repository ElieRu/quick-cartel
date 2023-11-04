<?php

namespace App\Http\Controllers;

use App\Http\Requests\caracteristiqueRequest;
use App\Models\Caracteristique;
use Illuminate\Http\Request;
use Inertia\Inertia;

class detailsController extends Controller
{
    public function index (Request $request, Caracteristique $caracteristique)
    {
        return Inertia::render('Private/ArticlesManagment/Details', [
            'article' => $request,
            'caracteristiques' => Caracteristique::all()
        ]);
    }

    public function store (caracteristiqueRequest $request)
    {
        Caracteristique::create([
            'nom' => $request->nom,
            'valeur' => $request->valeur,
            'specification_id' => $request->specification_id
        ]);
        
    }

    public function remove (Caracteristique $caracteristique, Request $request)
    {
        $data = Caracteristique::findOrFail($request->id);
        $data->delete();
    }
}
