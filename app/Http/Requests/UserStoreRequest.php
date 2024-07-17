<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use function Laravel\Prompts\password;

class UserStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        if(request()->isMethod('post')) {
            return [
                'name' => 'required|string|max:258', 
                'email' =>'required|string',
                'password' => 'required|string'
            ];
        } else {
            return [
                'name' => 'required|string|max:258', 
                'email' =>'required|string',
                'password' => 'required|string'
            ];
        }
    }
}
