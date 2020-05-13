<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriesRequest extends FormRequest
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
            'categories' => 'required|min:2|max:30',
        ];
    }

    public function messages()
    {
        return [
            'categories.required' => 'Ecrivez une categorie',
            'categories.min' => 'Minimum, 2 caractères',
            'categories.max' => 'Maximum, 30 caractères',
        ];
    }
}
