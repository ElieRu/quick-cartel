<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class detailRequest extends FormRequest
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
            'valeur' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nom.required' => 'Le nom est requis',
            'nom.min' => 'Pas moins de 4 caractères',
            'nom.max' => 'Pas plus de 50 caractères',

            'valeur.required' => 'La valeur est requise',
            'valeur.min' => 'Pas moins de 4 caractères',
            'valeur.max' => 'Pas plus de 50 caractères',
        ];
    }
}
