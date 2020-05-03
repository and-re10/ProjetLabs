<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
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
            'logo' => 'required',
            'nom1' => 'required|min:2|max:30',
            'nom2' => 'required|min:2|max:30',
            'nom3' => 'required|min:2|max:30',
            'nom4' => 'required|min:2|max:30',
        ];
    }

    public function messages()
    {
        return [
            'logo.required' => 'Coisissez un logo',

            'nom1.required' => 'Ecrivez un nom',
            'nom1' => 'Minimum, 2 caractères',
            'nom1' => 'Maximum, 30 caractères',


            'nom2.required' => 'Ecrivez un nom',
            'nom2' => 'Minimum, 2 caractères',
            'nom2' => 'Maximum, 30 caractères',

            'nom3.required' => 'Ecrivez un nom',
            'nom3' => 'Minimum, 2 caractères',
            'nom3' => 'Maximum, 30 caractères',

            'nom4.required' => 'Ecrivez un nom',
            'nom4' => 'Minimum, 2 caractères',
            'nom4' => 'Maximum, 30 caractères',

        ];
    }
}
