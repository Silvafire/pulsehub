<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $currentId = $this->Staff ? $this->Staff->id : null;
        return [
            "nome" => 'required|min:3|max:80|' .
                $currentId . '|regex:/^[A-ZÀ-úa-z\s]+$/',
            "apelido" =>'required',
            "especializacao" =>'required',
            "link_facebook" =>'required',
            "link_instagram" =>'required',
            "link_email" =>'required',
            'img' =>$this->staff ? 'nullable':'required'.'|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'nome.regex' => 'O nome deve conter apenas letras e espaços',
            'img.max' => 'Imagem demaisado grande',
            'apelido.required'=>'O Apelido é Obrigatório',
            'nome.required'=>'O Nome é Obrigatório',
            'especializacao.required'=>'A Especializacao é Obrigatória',

        ];
    }

}
