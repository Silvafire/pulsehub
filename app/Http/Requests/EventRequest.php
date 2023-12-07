<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
        $currentId = $this->event ? $this->event->id : null;
        return [
            "nome" => 'required|min:3|max:80|unique:events,nome,' .
                $currentId . '|regex:/^[A-ZÀ-úa-z\s]+$/',
            "descricao" =>'required|min:8|max:80',
            'data' => 'required|date|date_format:"Y-m-d"',
            "tipo_eventos_mod_id" =>'required|exists:tipo_eventos_mod,id',
            'img' =>'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'nome.regex' => 'O nome deve conter apenas letras e espaços',
            'img.max' => 'Imagem demaisado grande',
            'tipo_eventos_mod_id.exists' => 'Tipo de evento não existente',
        ];
    }
}
