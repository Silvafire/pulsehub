<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlanosRequest extends FormRequest
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
        $currentId = $this->plano ? $this->plano->id : null;
        return [
            "series" => 'required|integer|min:1',
        "duracao_total" => 'required|integer|min:1',
        "tmp_exercicio" => 'required|integer|min:1',
        "repeticoes" => 'required|integer|min:1',
        ];
    }

    public function messages()
    {
        return [
            'series' => 'numeros inteiros',
            'duracao_total' => 'A descrição deve conter apenas letras e espaços',
            'tmp_exercicio' => 'tempo nao possivel',
            'repeticoes' => 'Tipo de evento não existente',
        ];
    }
}
