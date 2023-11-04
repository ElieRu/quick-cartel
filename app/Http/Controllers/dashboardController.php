<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class dashboardController extends Controller
{
    public function show () {
        return Inertia::render('Private/Dashboard');
    }
}
