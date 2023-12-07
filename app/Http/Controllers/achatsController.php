<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

use function Termwind\render;

class achatsController extends Controller
{
    public function show ()
    {
        return Inertia::render('Private/Achats');
    }
}
