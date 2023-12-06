<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TiposPlanosRequest extends FormRequest
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
        $currentId = $this->tipoplano ? $this->tipoplano->id : null;
        return [
            "nome" => 'required|min:3|max:80|unique:events,nome,' . $currentId . '|regex:/^[A-ZÀ-úa-z\s]+$/',
            "descricao" =>'required|min:15',
            'imagem' =>$this->tipoplano ? 'nullable':'required'.'|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'nome.regex' => 'O nome deve conter apenas letras e espaços',
            'imagem.max' => 'Imagem demaisado grande',
            
        ];
    }
}
