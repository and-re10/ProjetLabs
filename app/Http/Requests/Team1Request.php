<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Team1Request extends FormRequest
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
            'titre' => 'required|min:2|max:70'
        ];
    }

    public function messages()
    {
        return [
            'titre.required' => 'Ecrivez un Titre',
            'titre.min' => 'Minimum, 2 carcactères',
            'titre.max' => 'Mamimum, 70 caractères',
        ];
    }
}
