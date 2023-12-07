<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostUserRequest extends FormRequest
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
        return [
            'id_post' => 'required|exists:post,id',
            'id_users' => 'required|exists:users,id',
        ];
    }

    /**
     * Custom validation messages.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'id_post.required' => 'O campo ID do post é obrigatório.',
            'id_post.exists' => 'O ID do post fornecido não existe.',
            'id_users.required' => 'O campo ID do usuário é obrigatório.',
            'id_users.exists' => 'O ID do usuário fornecido não existe.',
        ];
    }
}
