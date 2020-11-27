<?php

namespace App\Http\Controllers;

use App\Patient_Model;

use Illuminate\Http\Request;

class PatientController extends Controller
{   
    public function store(Request $request)
    {
        // Validating input data of patient registration form
        $validatedData = $request->validate([
            'fname' => 'required|string',
            'lname' => 'required|string',
            'address_no' => 'required|string',
            'street_name' => 'required|string',
            'city' => 'required|string',
            'district' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'nic' => 'required',
            'email' => 'required|email',
            'mobile_number' => 'required|size:10'
        ]);
        
        // Saving the validated data to the database
        $patient = new Patient_Model;

        $patient->first_name = $request->fname;
        $patient->last_name = $request->lname;
        $patient->address_no = $request->address_no;
        $patient->street_name = $request->street_name;
        $patient->city = $request->city;
        $patient->district = $request->district;
        $patient->date_of_birth = $request->dob;
        $patient->gender = $request->gender;
        $patient->nic = $request->nic;
        $patient->email = $request->email;
        $patient->mobile_no = $request->mobile_number;

        $patient->save();
        
        // Returning to the same page after submitting data to the database
        return back()->with('success', 'Patient added successfully');
    }
}
