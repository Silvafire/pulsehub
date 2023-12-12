<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Tipo_evento_modRequest extends FormRequest
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
        $currentId = $this->tipo_eventos_mod ? $this->tipo_eventos_mod->id : null;
        return [
            "nome" => 'required|min:3|max:80|unique:tipo_eventos_mod,nome,' .
                $currentId . '|regex:/^[A-ZÀ-úa-z\s]+$/',
            'imagem' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
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
