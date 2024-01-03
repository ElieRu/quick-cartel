<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class accountInfosByMenuController extends Controller
{
    public function show (Request $request)
    {
        if ($request->id) {
            Session::put('boutique_id', $request->id);
        }

        return response()->json([
            'enableBoutiqueNav' => Session::get('boutique_id')
        ]);
    }
}
