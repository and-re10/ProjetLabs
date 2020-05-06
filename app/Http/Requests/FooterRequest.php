<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FooterRequest extends FormRequest
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
            'texte' => 'required|min:5|max:100',
        ];
    }

    public function messages()
    {
        return [
            'texte.required' => 'Ecrivez un texte',
            'texte.min' => 'Minimum, 5 caractères',
            'texte.max' => 'Maximum, 100 caractères',
        ];
    }
}
