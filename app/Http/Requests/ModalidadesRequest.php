<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModalidadesRequest extends FormRequest
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
        $currentId = $this->modalidade ? $this->modalidade->id : null;
        return [
            "nome" => 'required|min:3|max:80|unique:events,nome,' . $currentId . '|regex:/^[A-ZÀ-úa-z\s]+$/',
            "descricao" =>'required|min:15|max:80',
            "tipo_eventos_mod_id" =>'required|exists:tipo_eventos_mod,id',
            'imagem' =>$this->modalidade ? 'nullable':'required'.'|image|mimes:jpg,png,jpeg,gif|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'nome.regex' => 'O nome deve conter apenas letras e espaços',
            'descricao' => 'A descrição deve conter apenas letras e espaços',
            'img' => 'Imagem demaisado grande',
            'staff_id' => 'Tipo de staff não existente',
            'tipo_eventos_mod_id' => 'Tipo de modalidade não existente',
        ];
    }
}
