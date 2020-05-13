<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostCommentsRequest extends FormRequest
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
            'name' => 'required|max:40',
            'sujet' => 'required|max:70',
            'message' => 'required|max:200',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Ecrivez votre nom',
            'name.max' => 'Maximum, 40 caractères',

            'sujet.required' => 'Ecrivez le sujet',
            'sujet.max' => 'Maximum, 70 caractères',

            'message.required' => 'Ecrivez un message',
            'message.max' => 'Maximum, 200 caractères',
        ];
    }
}
