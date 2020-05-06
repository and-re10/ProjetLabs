<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'titre' => 'required|min:5|max:50',
            'texte1' => 'required',
            'btn_name' => 'required|min:2|max:20',
            // 'btn_url' => 'required|min:2|max:100',
        ];
    }

    public function messages()
    {
        return [
            'titre.required' => 'Ecrivez un titre',
            'titre.min' => 'Minimum, 5 caractères',
            'titre.max' => 'Maximum, 50 caractères',

            'texte1.required' => 'Ecivez un texte',

            'btn_name.required' => 'Ecrivez le nom du bouton',
            'btn_name.min' => 'Minimum, 2 caractères',
            'btn_name.max' => 'Maximum, 20 caractères',

            // 'btn_url' => 'choisissez la direction de votre bouton',
            // 'btn_url' => 'Minimum, 2 caractères',
            // 'btn_url' => 'Maximum, 100 caractères',
        ];
    }
}
