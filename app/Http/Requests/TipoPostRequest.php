<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TipoPostRequest extends FormRequest
{
    /**Determine if the user is authorized to make this request.*/

    public function authorize(): bool
    {
        return true;
    }

    /* Get the validation rules that apply to the request.
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string> */

    public function rules(): array
    {
        $currentId = $this->tipopost ? $this->tipopost->id : null;
        return [
            "nome" => 'required|min:3|max:80|unique:tipo_post,nome,' .
            $currentId . '|regex:/^[A-ZÀ-úa-z\s]+$/',
            /*"tipo_post_id" =>'required',*/
        ];
    }

    public function messages()
    {
        return [
            'nome.regex' => 'O título deve conter apenas letras e espaços',
            /*'tipo_post_id' => 'Tipo de post não existente',*/
        ];
    }
}
