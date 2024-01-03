<?php

namespace App\Http\Controllers;

use App\Models\Abonnement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class abonnementsController extends Controller
{

    public function show()
    {
        return response()->json([
            'auth' => Auth::id() ? Auth::id() : false
        ]);
    }


    public function create(Request $request)
    {
        $boutique_id = Session::get('boutique_id');

        $abonnements = Abonnement::where('boutique_id', $boutique_id);
            // ->where('user_id', Auth::id());

        // dd($abonnements->get());

        try {
            $nbrAbonnes = $abonnements->get('nombre')[0]->nombre;
        } catch (\Throwable $th) {
            $nbrAbonnes = null;
        }

        // dd($abonnements->count());

        try {
            $user_id = $abonnements->get('user_id')[0]->user_id;
        } catch (\Throwable $th) {
            $user_id = null;
        }

        // vérifier si l'utilisateur est abonné à la boutique
        // si, non => abonnement
        // si oui => déabonnement
        // dd($abonnements->where('user_id', 100)->exists());

        if (!$abonnements->where('user_id', Auth::id())->exists()) {
            $nouveauAbonnes = $abonnements->count() + 1;
            // dd($nbrAbonnes);
            Abonnement::create([
                'nombre' => $nouveauAbonnes,
                'action' => true,
                'boutique_id' => $boutique_id,
                'user_id' => Auth::id()
            ]);
            dd("abonne");
        } else {
            if ($abonnements->get('action')[0]->action) {
                $nouveauAbonnes = $abonnements->count() - 1;
                // dd($abonnements->count());
                DB::table('abonnements')
                    ->where('id', $abonnements->get('id')[0]->id)
                    ->update([
                        'nombre' => $abonnements->count(),
                        'action' => false,
                    ]);
                dd("désabonne");
            } else {
                $nouveauAbonnes = $abonnements->count() + 1;
                DB::table('abonnements')
                    ->where('id', $abonnements->get('id')[0]->id)
                    ->update([
                        'nombre' => $nouveauAbonnes,
                        'action' => true,
                    ]);
                dd("réabonne");
            }
        }
    }
}
