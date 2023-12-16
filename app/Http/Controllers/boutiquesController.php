<?php

namespace App\Http\Controllers;

use App\Http\Requests\boutiqueRequest;
use App\Http\Requests\updateBoutiqueRequest;
use App\Models\Adresse;
use App\Models\Article;
use App\Models\Boutique;
use App\Models\Commande;
use App\Models\Contact;
use App\Models\Fournisseur;
use App\Models\Requisition;
use App\Models\User;
use App\Models\Vente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;
use Mockery\Undefined;

class boutiquesController extends Controller
{
    public function show () 
    {
        try {
            $idBoutique = Boutique::where('user_id', '=', Auth::id())->get('id')[0]->id;
        } catch (\Throwable $th) {
            $idBoutique = null;
        }

        $contacts = Contact::where('boutique_id', $idBoutique)
            ->where('client_id', null)
            ->where('user_id', null)
            ->where('fournisseur_id', null)
            ->get();

        $adresse = DB::table('adresses')
            ->where('user_id', '=', Auth::id())
            // ->where('fournisseur_id', '=', null)
            ->where('boutique_id', '=', $idBoutique)
            ->select('adresses.*')
            ->get();

        $boutique = Boutique::where('user_id', Auth::id())->exists();

        if ($boutique) {
            $boutique = Boutique::where('user_id', Auth::id())->get()[0];
        }
        
        return Inertia::render('Private/Boutiques', [
            'boutique' => $boutique,
            'contacts' => $contacts,
            'adresse' => $adresse
        ]);
    }

    public function getBoutique ()
    {
        return Boutique::where('user_id', '=', Auth::id())->get() ? [0] : false;
    }

    public function create (boutiqueRequest $request, Boutique $boutique)
    {
        Boutique::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'user_id' => Auth::id()
        ]);
        return to_route('home');
    }

    public function update (Boutique $boutique, updateBoutiqueRequest $request)
    {
        DB::table('boutiques')
            ->where('user_id', Auth::id())
            ->update([
                'nom' => $request->nom,
                'email' => $request->email,
                'phone' => $request->phone,
                // 'url' => $request->url,
                'description' => $request->description
            ]);
    }

    public function delete (Request $request)
    {
        $user = User::find(Auth::id());
        if (Hash::check($request->password, $user->password)) {

            $adresse = Adresse::where('boutique_id', '=', $request->id);
            $adresse->delete();

            $requisitions = Requisition::where('boutique_id', '=', $request->id);
            $requisitions->delete();

            $ventes = Vente::where('boutique_id', '=', $request->id);
            $ventes->delete();


            $articles = Article::where('boutique_id', '=', $request->id);
            $articles->delete();
            
            // notifications
            $commandes = Commande::where('boutique_id', '=', $request->id);
            $commandes->delete();

            

            // $Descriptions = Vente::where('article_id', '=', $request->id);
            // $Descriptionptions->delete();

            
            // Descriptions
            $fournisseurs = Fournisseur::where('boutique_id', '=', $request->id);
            $fournisseurs->delete();
            // 
            // abonnements
            // adresses

            $adresses = Adresse::where('boutique_id', '=', $request->id);
            $adresses->delete();
            
            $data = Boutique::findOrFail($request->id);
            $data->delete();
            
            return to_route('home');
        }
    }

    public function boutiqueProfileImg (Request $request)
    {
        dd('bien');
        
        $idBtk = Boutique::where('user_id', '=', Auth::id())->get('id')[0]->id;

        $request['img'] = $request->file('img')->store('profile', 'public');

        DB::table('boutiques')
            ->where('id', '=', $idBtk)
            ->update([
                'img' => $request['img']
            ]);
    }
    
}
