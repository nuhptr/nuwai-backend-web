<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // TODO: rules untuk mengubah inputan/editan user
            'name' => 'required|string|max:255',
            'email' => 'required|email|string|max:255',
            'username' => 'required|string|max:255',
            'roles' => 'required|in:USER,ADMIN|string|max:255',
        ];
    }
}
