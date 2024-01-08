<?php

namespace App\Http\Controllers;

use App\Models\Abonnement;
use App\Models\Boutique;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class abonnementsController extends Controller
{

    // private function get ($id)
    // {
    //     return Abonnement::where('boutique_id', $id);
    // }

    public function show()
    {
        $boutique_id = Session::get('boutique_id');

        $abonnements = Abonnement::where('boutique_id', $boutique_id);
        $boutique = Boutique::where('id', $boutique_id)->get(['logo', 'nom', 'arriere_plan'])[0];

        return response()->json([
            'logo' => $boutique->logo,
            'name' => $boutique->nom,
            'arriere_plan' => $boutique->arriere_plan,
            'number' => $abonnements->where('action', true)->count(),
            'action' => $abonnements->where('user_id', Auth::id())->exists(),
            'auth' => Auth::check()
        ]);
    }


    public function create(Request $request)
    {
        $boutique_id = Session::get('boutique_id');

        $abonnements = Abonnement::where('boutique_id', $boutique_id);

        try {
            $nbrAbonnes = $abonnements->get('nombre')[0]->nombre;
        } catch (\Throwable $th) {
            $nbrAbonnes = null;
        }

        
        try {
            $user_id = $abonnements->get('user_id')[0]->user_id;
        } catch (\Throwable $th) {
            $user_id = null;
        }

        if (!$abonnements->where('user_id', Auth::id())->exists()) {
            // $nouveauAbonnes = $abonnements->count() + 1;
            Abonnement::create([
                'nombre' => $abonnements->count() + 1,
                'action' => true,
                'boutique_id' => $boutique_id,
                'user_id' => Auth::id()
            ]);
        } else {
            if ($abonnements->get('action')[0]->action) {
                $nouveauAbonnes = $abonnements->count() - 1;
                DB::table('abonnements')
                    ->where('id', $abonnements->get('id')[0]->id)
                    ->update([
                        'nombre' => $abonnements->count(),
                        'action' => false,
                    ]);
            } else {
                // $nouveauAbonnes = $abonnements->count() + 1;
                DB::table('abonnements')
                    ->where('id', $abonnements->get('id')[0]->id)
                    ->update([
                        'nombre' => $abonnements->count() + 1,
                        'action' => true,
                    ]);
            }
        }
    }
}
