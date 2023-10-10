<?php

namespace App\Http\Controllers;

use App\Http\Requests\account_request_step1;
use App\Http\Requests\account_request_step2;
use App\Http\Requests\accountRequest;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\TryCatch;
use Psy\Readline\Hoa\Console;

class accountController extends Controller
{
    private $account;

    public function verifyInfos (Request $datas, Account $account)
    {
        $verification = $datas->validate([
            'username' => 'required|min: 5|unique:accounts',
            'email' => 'required|email|unique:accounts'
        ], 
        [
            'username.required' => "required",
            'username.min' => "min",
            'username.unique' => true,
            'email.required' => "required",
            'email.email' => "email",
            'email.unique' => true
        ]);
        
        if ($verification) {
            return response()->json(true);
        } 
        return response()->json([
            'invalid' => true,
            'label' => 'Information invalide'
        ]);
    }

    public function step2 (Account $account, Request $step2) {
        // if ($step2->password === $step2->password_confirmation) {
            

            // return response()->json(['href', 'next']);
            
        try {
            $verify = $step2->validate([
                'username' => 'required|min: 5',
                'email' => 'required|email|unique:accounts',
                'type' => 'required|boolean',
                'password' => 'required|min: 8|max: 16',
                'password_confirmation' => 'required|min: 8|max: 16'
            ]);

            if ($verify) {
                if ($step2->password === $step2->password_confirmation) {
                    // $account->name = $step2->name;
                    // $account->email = $step2->email;
                    // $account->type = $step2->type;
                    // $account->password = Hash::make($step2->password);

                    // $account->save();
                    return response()->json(['href' => '#carousel-2']);

                } else {
                    // return response()->json(['href' => '#carousel']);
                }
            }
        
        } catch (\Throwable $th) {
            return response()->json(['href' => '']);
        }
    }

}
