<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class venteRequest extends FormRequest
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
            'qtte' => 'required|integer|min:1',
            'prix' => 'required|integer|min:1',
        ];
    }

    public function messages()
    {
        return [
            'qtte.required' => 'La quantité est requise',
            'qtte.min' => 'Pas de nombre négatif ou nul',
            'qtte.integer' => 'Pas de chaine des caractères',

            'prix.required' => 'Le prix est requis',
            'prix.integer' => 'Pas de chaine des caractères',
            'prix.min' => 'Pas de nombre négatif ou nul',
        ];
    }
}
