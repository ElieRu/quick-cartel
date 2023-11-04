<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class promotionsController extends Controller
{
    public function show () {
        return Inertia::render('Public/Promotions');
    }
}
