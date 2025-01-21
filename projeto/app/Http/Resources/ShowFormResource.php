<?php

namespace App\Http\Resources;

use Illuminate\Foundation\Http\FormRequest;

class ShowFormResource extends FormRequest
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
            'name' => 'required|min:2'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é obrigatório',
            'name.min'  => 'Mínimo :min caracteres',
        ];
    }
}
