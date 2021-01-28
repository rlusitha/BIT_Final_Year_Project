@extends('layouts.app_admin')

@section('title', 'View Employee')

@section('breadcrumbs')
<ol class="breadcrumb" style="margin-top: 15px;">
    <li class="breadcrumb-item"><a href="/employee">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Employees</li>
</ol>
@endsection

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Employees</h1>
        <a href="/all_employees/pdf" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">All Employees</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                            <th>Address</th>
                            <th>District</th>
                            <th>Contact Number</th>
                            <th>Email</th>
                            <th>Date of Birth</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>NIC</th>
                            <th>Designation</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Title</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                            <th>Address</th>
                            <th>District</th>
                            <th>Contact Number</th>
                            <th>Email</th>
                            <th>Date of Birth</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>NIC</th>
                            <th>Designation</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($employees as $employee)
                        <tr>
                            <td>{{$employee->title}}</td>
                            <td>{{$employee->first_name}}</td>
                            <td>{{$employee->middle_name}}</td>
                            <td>{{$employee->last_name}}</td>
                            <td>{{$employee->address}}</td>
                            <td>{{$employee->district}}</td>
                            <td>{{$employee->contact_number}}</td>
                            <td>{{$employee->email}}</td>
                            <td>{{$employee->date_of_birth}}</td>
                            <td>{{$employee->age}}</td>
                            <td>{{$employee->gender}}</td>
                            <td>{{$employee->nic}}</td>
                            <td>{{$employee->designation}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection