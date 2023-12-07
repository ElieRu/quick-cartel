<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class paiementRequest extends FormRequest
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
            'mode' => 'required',
            'montant' => 'required|integer',
            'date' => 'required',
            'devise_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'mode.required' => 'Le mode de requis',
            'montant.required' => 'Le montant est requis',
            'date.required' => 'La date est requise',
            'devise_id.required' => 'La devise est requise',
        ];
    }
}
