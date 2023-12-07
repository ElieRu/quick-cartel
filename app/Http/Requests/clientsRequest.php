<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class clientsRequest extends FormRequest
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
            'nom' => 'required|min: 3|max:50',
            // 'phone' => 'required|min: 10|max:10',
        ];
    }

    public function messages()
    {
        return [
            'nom.required' => 'Ce champ est requis',
            'nom.min' => 'Pas moins de 3 caractères',
            'nom.max' => 'Pas plus de 50 caractères',

            // 'phone.required' => 'Ce champ est requis',
            // 'phone.min' => 'Ce champ n\'est pas correcte',
            // 'phone.max' => 'Ce champ n\'est pas correcte',
        ];
    }
}
