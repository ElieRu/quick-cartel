<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class requisitionsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'qtte' => 'required|integer',
            'date' => 'required|date',
            'montant' => 'required|integer',
            'devise' => 'required',
            // 'fournisseur_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'qtte.required' => 'La quantité est requise',
            'qtte.integer' => 'Entrer un nombre',

            'date.required' => 'La date est requise',
            'date.date' => 'Entrer une date',

            'statut.required' => 'Le statut est requis',
            // 'fournisseur_id.required' => 'Le fournisseur est requis',
        ];
    }
}
