<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateBoutiqueRequest extends FormRequest
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
            'nom' => 'required|min:4|max:50',
            'email' => 'email|max: 50',
            'url' => 'min:4|max:225|url',
            'description' => 'required|min:4|max:225',
        ];
    }


    public function messages()
    {
        return [
            'nom.required' => 'Le nom est requis',
            'nom.min' => 'Pas moins de 4 caracteres',
            'nom.max' => 'Pas plus de 50 caracteres',

            'email.email' => "Le n'est pas correcte",
            'email.max' => "Pas plus de 50 caracteres",

            'phone.min' => 'Pas moins de 10 caracteres',
            'phone.max' => 'Pas plus de 13 caracteres',

            'url.min' => 'Pas moins de 4 caracteres',
            'url.max' => 'Pas plus de 225 caracteres',
            'url.url' => 'Le liens n\'est pas une url',

            'description.min' => 'Pas moins de 4 caracteres',
            'description.max' => 'Pas plus de 225 caracteres',
            'description.required' => "La description est requise",
        ];
    }
}
