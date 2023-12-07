<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class imageRequest extends FormRequest
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
            'image' => 'image|mines: jpeg,pnj,svg,jpg|max: 10240'
        ];
    }

    public function messages()
    {
        [
            // 'image.required' => "L'image est requise",
            'image.image' => "Le fichier n'est pas une image",
            'image.mines' => "Format d'image non supporté",
            'image.max' => "L'image est volumineux",
        ];
    }
}
