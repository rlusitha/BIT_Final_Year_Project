<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePatient extends FormRequest
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
            'name' => 'required|string',
            'address_no' => 'required|string',
            'street_name' => 'required|string',
            'city' => 'required|string',
            'district' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'nic' => 'required',
            'email' => 'required|email',
            'mobile_number' => 'required|size:10',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required',
            'name.string' => 'Name has to be characters',

            'address_no.required' => 'Address number is required',
            'address_no.string' => 'Address number should be numeric & characters',

            'street_name.required' => 'Street name is required',
            'street_name.string' => 'Street name has to be characters',

            'city.required' => 'City is required',
            'city.string' => 'City has to be characters',

            'district.required' => 'District is required',

            'dob.required' => 'Date of birth is required',
            
            'gender.required' => 'Gender is required',
            
            'nic.required' => 'National identity card number is required',

            'email.required' => 'Email is required',
            'email.email' => 'It should be a valid email address',

            'mobile_number.required' => 'Mobile number is required',
            'mobile_number.size:10' => 'Should include 10 digits'
        ];
    }
}
