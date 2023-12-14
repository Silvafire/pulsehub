<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /*Get the validation rules that apply to the request.*
    @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>*/

    public function rules(): array
{
    $currentId = $this->post ? $this->post->id : null;
    return [
        "img" => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        "titulo" => 'required|min:3|max:100|unique:post,titulo,' . $currentId . '|regex:/^[A-ZÀ-úa-z0-9\s:\-_\.,?!]+$/',
        "descricao" => 'required|min:15|max:255|unique:post,descricao,'. $currentId . '|regex:/^[A-ZÀ-úa-z\s:\-_\.,?!]+$/',
        "informacao" => 'nullable|min:3|max:255|unique:post,informacao,'. $currentId . '|regex:/^[A-ZÀ-úa-z\s:\-_\.,?!]+$/',
        "tipo_post_id" => 'required',
    ];
}


    public function messages()
    {
        return [
            'img' => 'Imagem demasiado grande',
            'titulo.regex' => 'O título deve conter apenas letras e espaços',
            'descricao.regex' => 'A descrição deve conter apenas letras e espaços',
            'informacao' => 'A informação deve conter apenas letras e espaços',
            'tipo_post_id' => 'Tipo de post não existente',
        ];
    }
}
