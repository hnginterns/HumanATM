<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = Auth::id();
        
            return [
                'name'=> 'required|unique:users,name,'.$id,
                'email'=> 'required|email|unique:users,email,'.$id,
                'passowrd'=> 'required|confirmed'
            ];
    }
}
