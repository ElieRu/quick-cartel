<?php

namespace App\Http\Controllers;

use App\Http\Requests\paiementRequest;
use App\Models\Paiement;
use Illuminate\Http\Request;

class paiementController extends Controller
{
    public function create(paiementRequest $request) {
        $paiement = Paiement::create([
            'requisition_id' => $request->requisition_id,
            'mode' => $request->mode,
            'montant' => $request->montant,
            'date' => $request->date,
            'devise_id' => $request->devise_id,
        ]);
    }
}
