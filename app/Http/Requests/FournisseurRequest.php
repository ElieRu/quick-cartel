<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FournisseurRequest extends FormRequest
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
            'nom' => 'required|min: 4|max: 50',
            'email' => '',
            'phone' => '',
        ];
    }

    public function messages()
    {
        return [
            'nom.required' => 'Le nom est requis',
            'nom.min' => 'Pas moins de 4 caractères',
            'nom.max' => 'Pas plus de 50 caractères',

            'email.required' => 'L\'adresse mail est requis',
            'email.email' => 'Le format n\'est pas correcte',

            'phone.required' => 'Le numéro de téléphone est requis',
            'phone.string' => 'Le numéro de téléphone n\'est pas correcte',
            'phone.digits' => 'Le numéro de téléphone n\'est pas correcte',
        ];
    }
}
