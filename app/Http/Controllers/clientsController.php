<?php

namespace App\Http\Controllers;

use App\Http\Requests\clientsRequest;
use App\Models\Boutique;
use App\Models\Client;
use App\Models\Commande;
use App\Models\Contact;
use App\Models\Detail;
use App\Models\Reservation;
use App\Models\Vente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class clientsController extends Controller
{
    public function show(Request $request)
    {
        $boutique_id = Boutique::where('user_id', Auth::id())->get('id')[0]->id;

        // $empty_client = Client::where('empty_client');

        $clients = Client::query()
            ->when($request->search, function ($query, $search) {
                $query->where('nom', 'like', "%{$search}%");
            })
            ->where('clients.boutique_id', $boutique_id)
            ->where('clients.boutique_id', $boutique_id)
            // ->join('ventes', 'ventes.client_id', 'clients.id')
            ->select('clients.*',
                // DB::raw('SUM (ventes.client_id) AS all_sales')
                )
            ->paginate(15)
            ->withQueryString();
        
        // dd($clients);

        return Inertia::render('Private/Clients', [
        'clients' => $clients
            ]);
        }

    public function create(clientsRequest $request)
    {
        $boutique_id = Boutique::where('user_id', Auth::id())->get('id')[0]->id;

        $client = Client::create([
            'nom' => $request->nom,
            'boutique_id' => $boutique_id
        ]);
    }

    public function put(clientsRequest $request)
    {
        $client = Client::where('id', $request->id)
            ->update([
                'nom' => $request->nom,
                'postnom' => $request->postnom,
                'email' => $request->email,
                'adresse' => $request->adresse,
            ]);
    }

    public function uploadProfile(Request $request)
    {
        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $image = $file->store('profile', 'public');

            Client::where('id', $request->id)
                ->update([
                    'profileImg' => $image
                ]);
        }
    }

    public function delete(Request $request)
    {
        if (is_integer($request->id)) {
            Client::find($request->id)->delete();
            return to_route('clients.show');
        } else {
            foreach ($request->id as $value) {
                Client::find($value)->delete();
            }
        }
    }

    public function showInfos(Request $request)
    {
        $boutique_id = Boutique::where('user_id', Auth::id())->get('id')[0]->id;
        $client = Client::where('boutique_id', $boutique_id)
            ->where('id', $request->id)
            ->get()[0];

        // dd();

        $contacts = Contact::where('client_id', $request->id)
            ->where('boutique_id', null)
            ->where('user_id', null)
            ->where('fournisseur_id', null)
            ->get();

        $nbr_ventes = Vente::where('client_id', $request->id)->count();
        $nbr_commandes = Commande::where('client_id', $request->id)->count();
        $nbr_reservations = Reservation::where('client_id', $request->id)->count();

        // Les ventes...
        $ventes_client = DB::table('ventes')
            ->where('ventes.boutique_id', $boutique_id)
            ->where('ventes.client_id', $request->id)
            ->join('details', 'details.vente_id', 'ventes.id')
            ->join('articles', 'articles.id', 'details.article_id')
            // ->sum('details.prixTotal')
            ->select(
                "details.*",
                "ventes.id AS vente_id",
                "details.qtte AS qtte_vente",
                "articles.*",
                // DB::raw("SUM(prixTotal) as value_total")
            )->get();

        $ventes = $ventes_client->groupBy('vente_id');

        return Inertia::render('Private/ClientInfos', [
            'client' => $client,
            'ventes' => $ventes,
            'contacts' => $contacts,
            'nbr_ventes' => $nbr_ventes,
            'nbr_commandes' => $nbr_commandes,
            'nbr_reservations' => $nbr_reservations,
        ]);
    }
}
