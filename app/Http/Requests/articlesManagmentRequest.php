<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class articlesManagmentRequest extends FormRequest
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
            'prix' => 'required|min:3|max:10',
            'categorie' => 'required',
            'specification' => 'required',
            'devise' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nom.required' => 'Le nom est requis',
            'nom.min' => 'Pas moins de 4 caractères',
            'nom.max' => 'Pas plus de 50 caractères',

            'prix.required' => 'Le prix est requis',
            'prix.min' => 'Pas moins de 3 caractères',
            'prix.max' => 'Pas plus de 10 chiffres',
            
            'categorie.required' => 'La catégorie est réquise',
            // 'prix.regex' => '...',
            'specification.required' => 'La spécification est réquise',

            'devise.required' => 'La devise est requise',
        ];
    }
}
