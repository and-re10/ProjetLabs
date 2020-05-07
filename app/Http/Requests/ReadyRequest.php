<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReadyRequest extends FormRequest
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
            'titre' => 'required|min:2|max:70',
            'sous_titre' => 'required|min:2|max:200',
            'btn_name' => 'required|min:2|max:20',
        ];
    }

    public function messages()
    {
        return [
            'titre.required' => 'Ecrivez un titre',
            'titre.min' => 'Minimum, 2 caractères',
            'titre.max' => 'Maximum, 70 caractères',

            'sous_titre.required' => 'Ecrivez un sous-titre',
            'sous_titre.min' => 'Minimum, 2 caractères',
            'sous_titre.max' => 'Maximum, 200 caractères',

            'btn_name.required' => 'Ecrivez le nom du bouton',
            'btn_name.min' => 'Minimum, 2 caractères',
            'btn_name.max' => 'Maximum, 20 caractères',
        ];
    }
}
