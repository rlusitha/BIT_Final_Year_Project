@extends('layouts.app_patient')

@section('title', 'Registered Patients Report')

@section('breadcrumbs')
<ol class="breadcrumb" style="margin-top: 15px;">
    <li class="breadcrumb-item"><a href="/patient">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Registered Patients</li>
</ol>
@endsection

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Registered Patients Report</h1>
        <a href="/all_patients/pdf" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Registered Patients</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>City</th>
                            <th>District</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>NIC</th>
                            <th>Email</th>
                            <th>Contact Number</th>
                            <th>Registered Date</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>City</th>
                            <th>District</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>NIC</th>
                            <th>Email</th>
                            <th>Contact Number</th>
                            <th>Registered Date</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($patients as $patient)
                        <tr>
                            <td>{{$patient->name}}</td>
                            <td>{{$patient->city}}</td>
                            <td>{{$patient->district}}</td>
                            <td>{{$patient->age}}</td>
                            <td>{{$patient->gender}}</td>
                            <td>{{$patient->nic}}</td>
                            <td>{{$patient->email}}</td>
                            <td>{{$patient->mobile_no}}</td>
                            <td>{{$patient->created_at}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection