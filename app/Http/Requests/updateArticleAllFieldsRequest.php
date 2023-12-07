<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updateArticleAllFieldsRequest extends FormRequest
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
            'categorie' => 'required',
            'specification' => 'required',
            'prix' => 'required|integer',
            'description' => 'required|min:4|max:225',
            'devise_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nom.required' => 'Le nom est requis',
            'nom.min' => 'Pas moins de 4 caractères',
            'nom.max' => 'Pas plus de 50 caractères',

            'categorie.required' => 'La catégorie est réquise',

            'specification.required' => 'La spécification est réquise',

            'prix.required' => 'Le prix est requis',
            'prix.integer' => 'Format non supporté',
            'prix.max' => 'Pas plus de 10 chiffres',

            'description.required' => 'La description est requise',
            'description.min' => 'Pas de 4 caractères',
            'description.max' => 'Pas plus de 225 caractères',
            
            'devise_id.required' => 'La déevise est requise',
            // 'devise.required' => 'La devise est requise',
        ];
    }
}
