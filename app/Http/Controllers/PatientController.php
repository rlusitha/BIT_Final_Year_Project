<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;
use App\Http\Requests\StorePatient;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::all();
        return view('patient.index')->with([
            'patients' => $patients
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patient.register_patient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePatient $request)
    {
        $request->validated();

        $patient = new Patient([
            'name' => $request['name'],
            'address_no' => $request['address_no'],
            'street_name' => $request['street_name'],
            'city' => $request['city'],
            'district' => $request['district'],
            'date_of_birth' => $request['dob'],
            'gender' => $request['gender'],
            'active' => $request['active'],
            'nic' => $request['nic'],
            'email' => $request['email'],
            'mobile_no' => $request['mobile_number'],
        ]);

        $patient->save();

        return back()->with('success', 'Patient added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        return view('patient.show_patient')->with([
            'patient' => $patient
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        return view('patient.edit_patient')->with([
            'patient' => $patient
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        $request->validate([
            'name' => 'required',
            'address_no' => 'required',
            'street_name' => 'required',
            'city' => 'required',
            'district' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'active' => 'required',
            'nic' => 'required',
            'email' => 'required',
            'mobile_number' => 'required',
        ]);

        $patient->update([
            'name' => $request['name'],
            'address_no' => $request['address_no'],
            'street_name' => $request['street_name'],
            'city' => $request['city'],
            'district' => $request['district'],
            'date_of_birth' => $request['dob'],
            'gender' => $request['gender'],
            'active' => $request['active'],
            'nic' => $request['nic'],
            'email' => $request['email'],
            'mobile_no' => $request['mobile_number'],
        ]);

        return back()->with('success', 'Patient updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        $OldName = $patient->name;
        $patient->active = 0;
        $patient->save();

        $patient->delete();

        return back()->with('success', 'Patient deleted successfully');
    }
}
