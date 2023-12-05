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
            "Series" => 'required|integer|min:1', 
        "Duracao_Total" => 'required|integer|min:1', 
        "Tmp_Exercicio" => 'required|integer|min:1', 
        "Repeticoes" => 'required|integer|min:1',
        ];
    }

    public function messages()
    {
        return [
            'nome.regex' => 'O nome deve conter apenas letras e espaços',
            'descricao' => 'A descrição deve conter apenas letras e espaços',
            'img' => 'Imagem demaisado grande',
            'imagem_id' => 'Tipo de evento não existente',
        ];
    }
}
