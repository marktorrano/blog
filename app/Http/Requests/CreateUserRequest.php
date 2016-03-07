<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateUserRequest extends Request
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
            //
            
            'username'=>'required|unique:users,username,'. $this->route('users'),
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|unique:users,email,',
            'password'=>'required'
        ];
    }
    
    public function messages()
    {
        return [
            //
            
            'username.required'=>'Fill this up',
            'username.unique'=>'Already taken',
            'firstname.required'=>'Fill this up',
            'lastname.required'=>'Fill this up',
            'email.required'=>'Fill this up',
            'email.unique'=>'Already taken',            
            'password.required'=>'Fill this up'
        ];
    }
}
