<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class clientUtilisateurController extends Controller
{
    public function index ()
    {
        return Inertia::render('Private/clientUtilisateur', [
            'users' => User::all()
        ]);
    }
}
