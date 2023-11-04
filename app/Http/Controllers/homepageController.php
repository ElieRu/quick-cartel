<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class homepageController extends Controller
{
    public function show () {
        return Inertia::render('Public/Homepahe');
    }
}
