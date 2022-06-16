<?php

namespace App\Http\Requests;

use App\Rules\PersianPhone;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name' => 'bail|required|min:2|max:30|string',
            'last_name' => 'bail|required|min:2|max:30|string',
            'birthday' => 'bail|required|date',
            'sex' => ['bail','required', Rule::in(['male', 'female'])],
            'phone' => ['bail','required', new PersianPhone],
            'email' => 'bail|required|email|unique:users',
            ];
    }

    public function messages()
    {

    }
}
