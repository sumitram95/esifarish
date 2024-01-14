<?php

namespace App\Http\Requests\Esifarish;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class EsifarishRequest extends FormRequest
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
            "applicant_id" => 'nullable',
            "is_verified" => 'nullable',
            "is_taxpayer" => 'sometimes|nullable|in:on,off',
            "taxpayer_code" => 'required_if:is_taxpayer,on',
            'is_minor' => 'sometimes|nullable|in:on,off',
            "new_iid" => 'required_if:is_taxpayer,on',
            "first_name_np" => 'sometimes|nullable|string',
            "middle_name_np" => 'sometimes|nullable|string',
            "last_name_np" => 'sometimes|nullable|string',
            "email" => 'sometimes|nullable|email',
            "first_name_en" => 'sometimes|nullable|string',
            "middle_name_en" => 'sometimes|nullable|string',
            "last_name_en" => 'sometimes|nullable|string',
            'mobile_number' => 'sometimes|nullable|numeric|digits:10',
            "citizenship_number" => 'sometimes|nullable|string|unique:esifarish_citizen_tax_payers,citizen_no',
            "citizenship_issued_date_bs" => 'sometimes|nullable|string',
            "citizenship_issued_date_ad" => 'sometimes|nullable|string',
            "citizenship_issued_district" => 'sometimes|nullable|string',
            "birth_registration_no" => 'required_if:is_minor,on',
            "user_name" => 'sometimes|nullable|string',
            "password" => 'sometimes|nullable|string|confirmed',
        ];
    }

    /**
     * Handle a failed validation attempt.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function withValidator($validator)
    {
        // dd($validator->errors());
        if ($validator->fails()) {
            switch (true) {
                case ($this->input('is_taxpayer') == 'on'):
                    throw new ValidationException($validator, back()->withErrors($validator)->withInput()->with('is_taxpayer', 'on'));
                    break;
                case ($this->input('is_minor') == 'on'):
                    throw new ValidationException($validator, back()->withErrors($validator)->withInput()->with('is_minor', 'on'));
                    break;
                default:
                    throw new ValidationException($validator, back()->withErrors($validator)->withInput()->with('esifarish', 'on'));
                    break;
            }
        }
    }
}
