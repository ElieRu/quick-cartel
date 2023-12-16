<?php

namespace App\Http\Controllers;

use App\Http\Requests\FournisseurRequest;
use App\Models\Boutique;
use App\Models\Contact;
use App\Models\Fournisseur;
use App\Models\Lien;
use App\Models\Requisition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class fournisseursController extends Controller
{
    private $fournisseurs;

    public function show(Request $request)
    {
        try {
            $boutique_id = Boutique::where('user_id', '=', Auth::id())->get('id')[0]->id;;
        } catch (\Throwable $th) {
            $boutique_id = null;
        }

        return Inertia::render('Private/Fournisseur', [
            'fournisseurs' => Fournisseur::query()
                ->when($request->search, function ($query, $search) {
                    $query->where('nom', 'like', "%{$search}%");
                })
                ->where('boutique_id', '=', $boutique_id)
                ->where('boutique_id', '=', $boutique_id)
                ->select()
                ->paginate(15)
                ->withQueryString()
        ]);
    }

    public function create(FournisseurRequest $request)
    {
        Fournisseur::create([
            'nom' => $request->nom,
            'boutique_id' => Boutique::where('user_id', '=', Auth::id())->get('id')[0]->id,
        ]);
    }

    public function put(FournisseurRequest $request)
    {
        DB::table('fournisseurs')
            ->where('id', '=', $request->id)
            ->update([
                'nom' => $request->nom,
                'email' => $request->email,
                'type' => $request->type,
                'adresse' => $request->adresse
            ]);
    }

    public function uploadProfile(Request $request)
    {
        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $image = $file->store('profile', 'public');

            Fournisseur::where('id', $request->id)
                ->update([
                    'photo' => $image
                ]);
        }
    }

    public function delete(Request $request)
    {
        if (is_integer($request->id)) {
            Fournisseur::findOrFail($request->id)->delete();
            return to_route('fournisseurs.show');
        } else {
            foreach ($request->id as $value) {
                Fournisseur::findOrFail($value)->delete();
            }
        }
    }

    public function moreInfos(Request $request)
    {
        $idBoutique = Boutique::where('user_id', Auth::id())->get('id')[0]->id;
        $fournisseur = Fournisseur::where('id', $request->id)->get();

        $contacts = Contact::where('fournisseur_id', $request->id)
            ->where('boutique_id', null)
            ->where('user_id', null)
            ->where('client_id', null)
            ->get();

        $requisitions = DB::table('requisitions')
            ->where('fournisseur_id', '=', $request->id)
            ->where('boutique_id', '=', $fournisseur[0]->boutique_id)
            ->select('requisitions.*')
            ->get();

        $liens = Lien::where('fournisseur_id', $request->id)->get();

        return Inertia::render('Private/FournisseurInfos', [
            'fournisseur' => $fournisseur[0],
            'requisitions' => $requisitions,
            'contacts' => $contacts,
            'liens' => $liens
        ]);
    }
}
