<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticlesRequest extends FormRequest
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
            "image" => "required",
            "titre" => "required|min:2|max:50",
            "texte" => "required|min:2",
            "categorie_id" => "required|numeric",
        ];
    }

    public function messages()
    {
        return [
            "image.required" => "Choisissez une image",

            "titre.required" => "Ecrivez un titre",
            "titre.min" => "Minimum, 2 caractères",
            "titre.max" => "Maximum, 50 caractères",

            "texte.required" => "Ecrivez un texte",
            "texte.min" => "Minimum, 2 caractères",

            "categorie_id.required" => "Choisissez une categorie",
        ];
    }
}
