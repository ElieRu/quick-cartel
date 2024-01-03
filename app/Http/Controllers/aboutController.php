<?php

namespace App\Http\Controllers;

use App\Models\Boutique;
use App\Models\Contact;
use App\Models\Lien;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;

class aboutController extends Controller
{
    public function show () {

        $boutique_id = Session::get('boutique_id');

        $infos = DB::table('boutiques')
            ->join('users', 'users.id', '=', 'boutiques.user_id')
            ->where('boutiques.id', $boutique_id)
            ->select('users.name as user_name', 'users.postnom as postname', 'users.email as user_mail', 'users.date_de_naissance as birthday', 'users.sexe', 'users.profession', 'boutiques.*', 'boutiques.nom as boutique_name')
            ->get()[0];

        $liens = Lien::where('boutique_id', $boutique_id)->exists() ? 
        Lien::where('boutique_id', $boutique_id)->get() : false;

        $contacts = Contact::where('boutique_id', $boutique_id)->exists() ?
        Contact::where('boutique_id', $boutique_id)->get() : false;
        
        return Inertia::render('Public/About', [
            'boutique' => $infos,
            'liens' => $liens,
            'contacts' => $contacts,
        ]);
    }
}
