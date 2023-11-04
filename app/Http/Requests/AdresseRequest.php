<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdresseRequest extends FormRequest
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
            'ville' => 'required|min:4|max:50',
            'commune' => 'required|min:4|max:50',
            'quartier' => 'required|min:4|max:50',
            'avenue' => 'required|min:4|max:50',
        ];
    }


    public function messages()
    {
        return [
            'ville.required' => 'La ville est requise',
            'ville.min' => 'Pas moins de 4 caractères',
            'ville.max' => 'Pas plus de 50 caractères',

            'commune.required' => 'La commune est requise',
            'commune.min' => 'Pas moins de 4 caractères',
            'commune.max' => 'Pas plus de 50 caractères',

            'quartier.required' => 'Le quartier est requis',
            'quartier.min' => 'Pas moins de 4 caractères',
            'quartier.max' => 'Pas plus de 50 caractères',

            'avenue.required' => 'L\'avenue est requis',
            'avenue.min' => 'Pas moins de 4 caractères',
            'avenue.max' => 'Pas plus de 50 caractères',
        ];
    }
}
