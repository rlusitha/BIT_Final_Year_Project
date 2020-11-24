<?php

namespace App\Http\Controllers;

use App\Patient;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function store(Request $request)
    {
        $patient = new Patient;

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

        return back()->with('success', 'Patient added successfully');
    }
}
