<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TagsRequest extends FormRequest
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
            'tag_name' => 'required|min:2|max:30',
        ];
    }

    public function messages()
    {
        return [
            'tag_name.required' => 'Ecrivez un tag',
            'tag_name.min' => 'Minimum, 2 caractères',
            'tag_name.max' => 'Maximum, 30 caractères',
        ];
    }
}
