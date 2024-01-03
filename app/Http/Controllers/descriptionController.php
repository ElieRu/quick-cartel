<?php

namespace App\Http\Controllers;

use App\Http\Requests\descriptioRequest;
use App\Models\Description;
use App\Models\Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class descriptionController extends Controller
{
    public function store (descriptioRequest $request)
    {
        Description::create([
            'nom' => $request->nom,
            'valeur' => $request->valeur,
            'article_id' => $request->article_id
        ]);
        
    }

    public function update (descriptioRequest $request)
    {
        DB::table('descriptions')
            ->where('id', '=', $request->id)
            ->update([
                'nom' => $request->nom,
                'valeur' => $request->valeur,
            ]);
    }

    public function remove (Request $request)
    {
        Description::findOrFail($request->id)->delete();
    }
}
