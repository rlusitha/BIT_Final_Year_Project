@extends('layouts.app_reception')

@section('title', 'View Patient')

@section('breadcrumbs')
<ol class="breadcrumb" style="margin-top: 15px;">
    <li class="breadcrumb-item"><a href="{{ url('/reception') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">View Patient</li>
</ol>
@endsection

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><b>View Patient</b></h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Patients</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                    <tfoot>
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
                    </tfoot>
                    <tbody>
                        @foreach($patients as $patient)
                        <tr>
                            <td>{{$patient->first_name}}</td>
                            <td>{{$patient->last_name}}</td>
                            <td>{{$patient->address_no}}</td>
                            <td>{{$patient->street_name}}</td>
                            <td>{{$patient->city}}</td>
                            <td>{{$patient->district}}</td>
                            <td>{{$patient->date_of_birth}}</td>
                            <td>{{$patient->gender}}</td>
                            <td>{{$patient->nic}}</td>
                            <td>{{$patient->email}}</td>
                            <td>{{$patient->mobile_no}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection