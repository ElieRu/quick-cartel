<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class account_request_step1 extends FormRequest
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
            'name' => 'required|min: 3',
            'email' => 'required|email'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nom requis',
            'name.min' => 'Nom min 3',
            'email.required' => 'Mail requis',
            'email.required' => 'Mail bad type'
        ];
    }
}
