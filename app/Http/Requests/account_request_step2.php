<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class account_request_step2 extends FormRequest
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
            'name' => 'required|min: 5',
            'email' => 'required|email|unique:accounts',
            'type' => 'required|boolean',
            'password' => 'required|min: 8|max: 16',
            'password_confirmation' => 'required|min: 8|max: 16'
        ];
    }

    public function messages()
    {
        return [
            'email.unique' => 'existed'
        ];
    }
}
