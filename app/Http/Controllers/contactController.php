<?php

namespace App\Http\Controllers;

use App\Http\Requests\contactRequest;
use App\Models\c;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(contactRequest $request, Contact $contact)
    {
        Contact::create([
            'phone' => $request->phone,
            'user_id' => Auth::id()
        ]);

        dd('redirect me and revieuw the regex');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        //
    }

    public function remove (Request $request)
    {
        $data = Contact::findOrFail($request->id);
        $data->delete();
    }
}
