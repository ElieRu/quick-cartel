<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class accountRequest extends FormRequest
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
            'username' => 'required|min: 5',
            'email' => 'required|email',
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'username.required' => "required",
    //         'username.min' => "min",
    //         'username.unique' => "unique",
    //         'email.required' => "required",
    //         'email.min' => "min",
    //         'email.unique' => "unique"
    //     ];
    // }
    
}
