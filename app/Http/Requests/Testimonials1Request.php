<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Testimonials1Request extends FormRequest
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
            'titre.required' => 'Ecrivez un titre',
            'titre.min' => 'Minimum, 2 caractères',
            'titre.max' => 'Maxmimum, 70 caractères',
        ];
    }
}
