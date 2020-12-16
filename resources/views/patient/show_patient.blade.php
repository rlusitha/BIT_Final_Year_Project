@extends('layouts.app_patient')

@section('title', 'View Patient')

@section('breadcrumbs')
<ol class="breadcrumb" style="margin-top: 15px;">
    <li class="breadcrumb-item"><a href="/patient">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">View Patient</li>
</ol>
@endsection

@section('content')
<div class="container">
    <div class="card mb-3">
        <div class="card-header"><b>Patient Details</b></div>
        <div class="card-body">
            <b>Name :</b> {{$patient->name}} <br><br>
            <b>Address Number :</b> {{$patient->address_no}} <br><br>
            <b>Street Name :</b> {{$patient->street_name}} <br><br>
            <b>City :</b> {{$patient->city}} <br><br>
            <b>District :</b> {{$patient->district}} <br><br>
            <b>Date of Birth :</b> {{$patient->date_of_birth}} <br><br>
            <b>Gender :</b> {{$patient->gender}} <br><br>
            <b>National Identity Card Number :</b> {{$patient->nic}} <br><br>
            <b>E-mail :</b> {{$patient->email}} <br><br>
            <b>Mobile Number :</b> {{$patient->mobile_no}} <br><br>
            <a class="btn btn-primary" role="button" href="/patient">Back</a>
        </div>
    </div>
</div>
@endsection