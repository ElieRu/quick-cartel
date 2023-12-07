<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class test extends Controller
{
    public function show ()
    {
        return Inertia::render('Test');
    }
}
