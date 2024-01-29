<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => 'required',
            'email' => 'required',
            'designation' =>'required',
            'education' => 'required',
            'logo' => 'required|mimes:jpg,jpeg,webp,svg,png,gif',
            'experience' => 'required',
            'age' => 'required|max:3',
            'type' => 'required',
            'phone' => 'required',
            'location' => 'required',
         
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password'
        ];
    }
}
