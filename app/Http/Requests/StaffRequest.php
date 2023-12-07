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
            "nome" => 'required|min:3|max:80|unique:staff,nome,' .
                $currentId . '|regex:/^[A-ZÀ-úa-z\s]+$/',
            "apelido" =>'required',
          /*   'img' =>$this->Staff ? 'nullable':'required'.'|image|mimes:jpg,png,jpeg,gif,svg|max:2048', */
        ];
    }

    public function messages()
    {
        return [
            'nome.regex' => 'O nome deve conter apenas letras e espaços',
            'img.max' => 'Imagem demaisado grande',

        ];
    }

}
