<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormValidationRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
                'name'    =>'required|string|max:100|min:2',
                'email'  => 'sometimes|required|string|email|max:200|unique:users,email,'.$this->id,
        ];
    }
    public function messages(){
        return [
           'name.required'     => 'Name field must NOT be empty',
            'name.min'         => 'Name field must be at least 2 characters',
            'name.max'         => 'Name field must be at most 100 characters',
            'email.email'      => 'Email field should be a real email eg princewill@gmail.com',
            'email.max'        => 'Email field must be at most 200 characters',
            'email.required'   => 'Name field must NOT be empty',
        ];
    }
}
