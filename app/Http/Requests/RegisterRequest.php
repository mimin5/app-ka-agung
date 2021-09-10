<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'name'=> 'required|min:3|max:20',
            'username'=>'required|min:3|max:20|unique:users',
            'password'=>'required|min:3|max:20|confirmed'
        ];
    }
    public function messages()
    {
        return[
            'required'=> 'field ini tidak boleh kosong',
            'name.min'=> 'nama terlalu pendek',
            'name.max'=> 'nama terlalu panjang',
            'unique'=> 'username telah digunakan',
            'username.min'=> 'username terlalu pendek',
            'username.max' => 'username terlalu panjang',
            'confirmed'=>'konfirmasi password tidak sama'
        ];
    }
}
