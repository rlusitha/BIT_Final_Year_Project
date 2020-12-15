@extends('layouts.app_patient')

@section('title', 'View Patient')

@section('breadcrumbs')
<!-- <ol class="breadcrumb" style="margin-top: 15px;">
    <li class="breadcrumb-item"><a href="/patient">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">View Patient</li>
</ol> -->
@endsection

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><b>Registered Patients</b></h1>

    <br>

    <table class="table">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address No</th>
                <th>Street Name</th>
                <th>City</th>
                <th>District</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>NIC</th>
                <th>Email</th>
                <th>Mobile Number</th>
            </tr>
        </thead>
        <tbody>
            @foreach($guys as $guy)
            <tr>
                <td>{{$guy->first_name}}</td>
                <td>{{$guy->last_name}}</td>
                <td>{{$guy->address_no}}</td>
                <td>{{$guy->street_name}}</td>
                <td>{{$guy->city}}</td>
                <td>{{$guy->district}}</td>
                <td>{{$guy->date_of_birth}}</td>
                <td>{{$guy->gender}}</td>
                <td>{{$guy->nic}}</td>
                <td>{{$guy->email}}</td>
                <td>{{$guy->mobile_no}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection