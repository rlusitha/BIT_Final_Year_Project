<?php

namespace App\Http\Controllers;

use App\Patient_Model;

use Illuminate\Http\Request;

use App\Http\Requests\Validate_Patient;

class PatientController extends Controller
{   
    //Validating and saving the patient to the database
    public function store(Validate_Patient $request)
    {
        //When it comes to this step the input request is already validated
        $validated = $request->validated();

        //Saving the validated data to the database
        $patient = new Patient_Model;

        $patient->first_name = $validated['fname'];
        $patient->last_name = $validated['lname'];
        $patient->address_no = $validated['address_no'];
        $patient->street_name = $validated['street_name'];
        $patient->city = $validated['city'];
        $patient->district = $validated['district'];
        $patient->date_of_birth = $validated['dob'];
        $patient->gender = $validated['gender'];
        $patient->nic = $validated['nic'];
        $patient->email = $validated['email'];
        $patient->mobile_no = $validated['mobile_number'];

        $patient->save();
        
        // Returning to the same page after submitting data to the database
        return back()->with('success', 'Patient added successfully');
    }

    //View patient method
    public function viewPatient()
    {
        $guys = Patient_Model :: all();
        return view('reception.view_patient',['patients'=>$guys]);
    }
}
