<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;

class accountController extends Controller
{
    public function show (Request $request)
    {
        if ($request->id) {
            Session::put('boutique_id', $request->id);
        } 

        return Inertia::render('Public/Account', [
            'user' => Auth::user(),
            'my_boutique_id' => Session::get('boutique_id')
        ]);
    }

}
