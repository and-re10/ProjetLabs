<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Testimonials2Request extends FormRequest
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
            'name' => 'required|min:2|max:20',
            'surnom' => 'required|min:2|max:20',
            'texte' => 'required|min:2|max:300',
            'work' => 'required|min:2|max:30',
        ];
    }

    public function messages()
    {
        return [
            'image.required' => 'Choisissez une image',

            'name.required' => 'Ecrivez votre nom',
            'name.min' => 'Minimum, 2 caractères',
            'name.max' => 'Maximum, 20 caractères',

            'surnom.required' => 'Ecrivez votre surnom',
            'surnom.min' => 'Minimum, 2 caractères',
            'surnom.max' => 'Maximum, 20 caractères',

            'texte.required' => 'Ecrivez un texte',
            'texte.min' => 'Minimum, 2 caractères',
            'texte.max' => 'Maximum, 300 caractères',

            'work.required' => 'Ecrivez votre job',
            'work.min' => 'Minimum, 2 caractères',
            'work.max' => 'Maximum, 30 caractères',
        ];
    }
}
