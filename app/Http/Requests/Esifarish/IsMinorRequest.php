<?php

namespace App\Http\Requests\Esifarish;

use Illuminate\Foundation\Http\FormRequest;

class IsMinorRequest extends FormRequest
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
            'email' => 'required|email',
            'user_name' => 'required',
            'password' => 'required',
            'first_name_np' => 'required',
            'middle_name_np' => 'nullable',
            'last_name_np' => 'required',
            'first_name_en' => 'required',
            'middle_name_en' => 'nullable',
            'last_name_en' => 'required',
            'mobile_number' => 'required|numeric|max:10',
            'birth_registration_no' => 'required',
        ];
    }
}
