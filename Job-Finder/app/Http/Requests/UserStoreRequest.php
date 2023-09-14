<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
     if(request()->isMethod('post')){
        return [
            'name' => 'required|String|max:258',
            'email' => 'required|String',
            'password' => 'required|String'
        ];
     }else{
        return [
            'name' => 'required|String|max:258',
            'email' => 'required|String',
            'password' => 'required|String'
        ];
     }
    }
    public function message()   
    {
     if(request()->isMethod('post')){
        return [
            'name.required' => 'Name is Required',
            'email.required' => 'Email is Required',
            'password.required' => 'Password is Required'
        ];
     }else{
        return [
            'name.required' => 'Name is Required',
            'email.required' => 'Email is Required',
            'password.required' => 'Password is Required'
        ];
     }
    }
}
