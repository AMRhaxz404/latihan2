<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama' => 'Required',
            'username' => 'Required|unique:user,username|gte:6',
            'email' => 'Required|email:rfc,dns'
        ];
    }

    function messages(){
        return[
            'nama.required' => 'Nama Wajib Di Isi !',
            'username.required' => 'Username Wajib Di Isi !',
            'username.unique' => 'Username Sudah Terdaftar !',
            'email.required' => 'Email Wajib Di Isi !'
        ];
    }
}
