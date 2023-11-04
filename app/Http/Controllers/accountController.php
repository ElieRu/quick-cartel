<?php

namespace App\Http\Controllers;

use App\Http\Requests\account_request_step1;
use App\Http\Requests\account_request_step2;
use App\Http\Requests\accountRequest;
use App\Http\Requests\loginRequest;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Inertia\Inertia;
use PhpParser\Node\Stmt\TryCatch;
use Psy\Readline\Hoa\Console;

class accountController extends Controller
{
    public function show ()
    {
        return Inertia::render('Public/Account', [
            'user' => Auth::user()
        ]);
    }

    

}
