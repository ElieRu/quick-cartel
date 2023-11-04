<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class aboutController extends Controller
{
    public function show () {
        return Inertia::render('Public/About');
    }
}
