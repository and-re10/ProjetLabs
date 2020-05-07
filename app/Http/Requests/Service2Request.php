<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Service2Request extends FormRequest
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
            'icon' => 'required',
            'titre' => 'required|min:2|max:70',
            'description' => 'required|min:2|max:300',
        ];
    }

    public function messages()
    {
        return [
            'icon.required' => 'Choisissez un Icon',

            'titre.required' => 'Ecrivez un titre',
            'titre.min' => 'Minimum, 2 caractères',
            'titre.max' => 'Maximum, 70 caractères',

            'description.required' => 'Ecrivez une description',
            'description.min' => 'Minimum, 2 caractères',
            'description.max' => 'Maximum, 300 caractères',
        ];
    }
}
