<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class promotionsRequest extends FormRequest
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
            'nom' => 'required',
            'dateDebut' => 'required',
            'dateFin' => 'required',
            'type' => 'required',
            'pourcentage' => 'sometimes|required_if:type,Rémise en pourcentage',
            'montantReduction' => 'sometimes|required_if:type,Réduction forfaitaire',
            'statut' => 'required_if:dateDebut,dateFin',
            'description' => 'nullable',
            'article_id' => 'required'
        ];
    }

    public function message ()
    {
        return [];
    }
}
