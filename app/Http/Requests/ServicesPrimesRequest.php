<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicesPrimesRequest extends FormRequest
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
            'titre' => 'required|min:2|max:30',
            'btn_name' => 'required|min:2|max:30',
        ];
    }

    public function messages()
    {
        return [
            'titre.required' => 'Ecrivez un titre',
            'titre.min' => 'Minimum, 2 caractères',
            'titre.max' => 'Maximum, 30 caractères',

            'btn_name.required' => 'Ecrivez le nom du bouton',
            'btn_name.min' => 'Minimum, 2 caractères',
            'btn_name.max' => 'Maximum, 30 caractères',
        ];
    }
}
