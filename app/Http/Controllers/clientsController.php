<?php

namespace App\Http\Controllers;

use App\Http\Requests\clientsRequest;
use App\Http\Requests\imageRequest;
use App\Models\Boutique;
use App\Models\Client;
use App\Models\User;
use App\Models\Vente;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class clientsController extends Controller
{
    public function show(Request $request)
    {
        $boutique_id = Boutique::where('user_id', '=', Auth::id())->get('id')[0]->id;

        return Inertia::render('Private/Clients', [
            'clients' => Client::query()
                ->when($request->search, function ($query, $search) {
                    $query->where('nom', 'like', "%{$search}%");
                })
                ->where('clients.boutique_id', '=', $boutique_id)
                ->where('clients.boutique_id', '=', $boutique_id)
                // ->join('users', 'users.boutique_id', '=', 'clients.boutique_id')
                ->select('clients.*')
                ->paginate(3)
        ]);
    }

    public function create(clientsRequest $request)
    {
        $boutique_id = Boutique::where('user_id', '=', Auth::id())->get('id')[0]->id;

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
                'phone' => $request->phone,
                'adresse' => $request->adresse,
            ]);
    }

    public function uploadProfile(Request $request)
    {
        if ($request->hasFile('image')) {

            $file = $request->file('image');
            $image = $file->store('profile', 'public');

            $client = Client::where('id', $request->id)
                ->update([
                    'profileImg' => $image
                ]);
        }
    }

    public function delete(Request $request)
    {
        if (is_integer($request->id)) {
            Client::find($request->id)->delete();
        } else {
            foreach ($request->id as $value) {
                $client = Client::find($value)->delete();
            }
        }
    }

    public function showInfos(Request $request)
    {
        $boutique_id = Boutique::where('user_id', '=', Auth::id())->get('id')[0]->id;
        $client = Client::where('boutique_id', '=', $boutique_id)
            ->where('id', '=', $request->id)
            ->get()[0];
        
        $nbr_ventes = Vente::where('client_id', $request->id)->count();

        return Inertia::render('Private/ClientInfos', [
            'client' => $client,
            'nbr_ventes' => $nbr_ventes
        ]);
    }
}
