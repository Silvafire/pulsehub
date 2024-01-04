<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
          'name'=>'required|min:3|max:40|regex:/^[A-ZÀ-úa-z\s]+$/',
           'email' =>'required|email|unique:users,email,'.
                    ($this->user?$this->user->id:''),
           'img' =>'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
           'perm' => 'sometimes|in:A,N',
           'data_nasc' => 'nullable|date|date_format:"Y-m-d"'
        ];
    }
    public function messages(): array
    {
        return[
            'img.max' => 'O ficheiro não é uma imagem'
        ];
    }

}
