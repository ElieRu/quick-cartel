<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userRequest extends FormRequest
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
            'name' => 'required|min:4|max:50',
            'postnom' => 'min:4|max:50',
            'email' => 'required|email',
            'date_de_naissance' => 'date',
            'sexe' => 'required|min:5',
            'profession' => 'min:4|max:50'
        ];
    }

    public function messages()
    {
        return [
            
            'name.required' => 'Le nom est requis',
            'name.min' => 'Pas moins de 4 caractères',
            'name.max' => 'Pas plus de 50 caractères',

            'postnom.min' => 'Pas moins de 4 caractères',
            'postnom.max' => 'Pas plus de 50 caractères',

            'email.required' => 'L\'adresse mail est requis',
            'email.email' => 'Le format n\'est pas un adresse mail',
            // 'email.unique' => 'Cet adresse mail existe déjà',

            'date_de_naissance.date' => 'Le format n\'est pas une date',

            'sexe.required' => 'Le sexe est requis',
            'sexe.min' => 'Pas moins de 4 caractères',

            'profession.min' => 'Pas moins de 4 caractères',
            'profession.max' => 'Pas plus de 50 caractères'

        ];
    }
}
