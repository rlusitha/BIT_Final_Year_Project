<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployee extends FormRequest
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
            'title' => 'required',
            'first_name' => 'required|alpha',
            'middle_name' => 'nullable|alpha',
            'last_name' => 'required|alpha',
            'address' => 'required|string',
            'district' => 'required',
            'contact_number' => 'required|size:11',
            'email' => 'required|unique:employees,email|email:rfc,dns',
            'dob' => 'required|date',
            'gender' => 'required',
            'nic' => 'required|unique:employees,nic|string',
            'designation' => 'required|alpha',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'Title is required',

            'first_name.required' => 'First name is required',
            'first_name.alpha' => 'First name should be characters',

            'middle_name.alpha' => 'Middle name should be characters',

            'last_name.required' => 'Last name is required',
            'last_name.alpha' => 'Last name should be characters',

            'address.required' => 'Address is required',

            'district.required' => 'Please choose a district',

            'contact_number.required' => 'Contact number is required',
            'contact_number.size' => 'Please follow the contact number format',

            'email.required' => 'Email is required',
            'email.email' => 'Please enter a valid email address',

            'dob.required' => 'Date of birth is required',

            'gender.required' => 'Please select the gender',

            'nic.required' => 'National identity card number is required',

            'designation.required' => 'Designation is required',
            'designation.alpha' => 'Designation should be characters',
        ];
    }
}
