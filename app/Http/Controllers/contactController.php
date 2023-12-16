<?php

namespace App\Http\Controllers;

use App\Http\Requests\contactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(contactRequest $request)
    {
        $contact = Contact::create([
            'phone' => $request->phone,
            'client_id' => $request->client_id,
            'user_id' => $request->user_id,
            'boutique_id' => $request->boutique_id,
            'fournisseur_id' => $request->fournisseur_id,
        ]);
    }

    
    public function update(Request $request)
    {
        $update = Contact::find($request->id)
                        ->update([
                            'phone' => $request->phone,
                            'type' => $request->type,
                        ]);
    }

    public function remove (Request $request)
    {
        $delete = Contact::findOrFail($request->id)->delete();
    }
}
