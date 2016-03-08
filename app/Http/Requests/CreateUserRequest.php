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
            'email'=>'required|email|unique:users,email,',
            'password'=>'required',
            'photo'=>'required'
        ];
    }
    
    public function messages()
    {
        return [
            //
            
            'username.required'=>'You need a username',
            'username.unique'=>'Sorry, already taken',
            'firstname.required'=>'The owner need to know your name',
            'lastname.required'=>'What? No last name?',
            'email.required'=>'Let me know that you are real',
            'email.unique'=>'Already taken',            
            'password.required'=>'Everyone needs a password',
            'photo.required'=>'Please choose a photo'
        ];
    }
}
