<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InfoContactRequest extends FormRequest
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
            'titre1' => 'required|min:2|max:30',
            'texte' => 'required|min:2|max:200',
            'titre2' => 'required|min:2|max:30',
            'address' => 'required|min:2|max:200',
            'phone' => 'required|min:2|max:20',
            'email' => 'required|min:2|max:30',
        ];
    }

    public function messages()
    {
        return [
            'titre1.required' => 'Ecrivez un Titre',
            'titre1.min' => 'Minimum, 2 caractères',
            'titre1.max' => 'Maximum, 30 caractères',

            'texte.required' => 'Ecrivez un texte',
            'texte.min' => 'Minimum, 2 caractères',
            'texte.max' => 'Maximum, 200 caractères',

            'titre2.required' => 'Ecivez un Titre',
            'titre2.min' => 'Minimum, 2 caractères',
            'titre2.max' => 'Maximum, 30 caractères',

            'address.required' => 'Ecrivez votre address',
            'address.min' => 'Minimum, 2 caractères',
            'address.max' => 'Maximum, 30 caractères',

            'phone.required' => 'Ecrivez votre numero',
            'phone.min' => 'Minimum, 2 caractères',
            'phone.max' => 'Maximum, 20 caractères',

            'email.required' => 'Ecrivez votre email',
            'email.min' => 'Minimum, 2 caractères',
            'email.max' => 'Maximum, 30 caractères',
        ];
    }
}
