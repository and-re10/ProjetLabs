<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Team2Request extends FormRequest
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
            'image' => 'required',
            'name' => 'required|min:2|max:30',
            'surname' => 'required|min:2|max:30',
            'work' => 'required|min:2|max:50',
        ];
    }

    public function messages()
    {
        return [
            'image.required' => 'required',

            'name.required' => 'Ecrivez votre prenom',
            'name.min' => 'Minimum, 2 caractères',
            'name.max' => 'Maximum, 30 caractères',

            'surname.required' => 'Ecrivez votre nom',
            'surname.min' => 'Minimum, 2 caractères',
            'surname.max' => 'Maximum, 30 caractères',

            'work.required' => 'Ecrivez votre profession',
            'work.min' => 'Minimum, 2 caractères',
            'work.max' => 'Maximum, 50 caractères',
        ];
    }
}
