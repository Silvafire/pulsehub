<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicesRequest extends FormRequest
{
    //Determine if the user is authorized to make this request.*/

    public function authorize(): bool
    {
        return true;
    }

    /* Get the validation rules that apply to the request.*

@return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>*/


    public function rules(): array
    {
        $currentId = $this->service ? $this->service->id : null;
        return [
            "nome" => 'required|min:3|max:30|unique:services,nome,' . $currentId . '|regex:/^[A-ZÀ-úa-z\s]+$/',
            "descricao" => 'required|min:3|max:255',
            /* "img" => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            "imagem_id" => 'required', */
        ];

    }

    public function messages()
    {
        return [
            'nome.regex' => 'O nome deve conter apenas letras e espaços',
            'nome.max' => 'O nome deve ter no máximo 30 caracteres',
            
            /* 'img' => 'Imagem demaisado grande',
            'imagem_id' => 'Tipo de evento não existente', */
        ];
    }
}
