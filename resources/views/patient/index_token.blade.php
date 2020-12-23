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

    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Patient deleted successfully!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @elseif (Session ::has('restore'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Patient restored successfully!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="input-group mb-4">
        <input type="text" class="form-control" placeholder="Search">
        <div class="input-group-append">
            <a href="{{ route('PatientSearch', $patients->id) }}" class="btn btn-secondary">
                <i class="fa fa-search"></i>
            </a>
        </div>
    </div>
    <div class="card">
        <div class="card-header"><b>Patients</b></div>
        <div class="card-body">
            <ul class="list-group">
                @foreach($patients as $patient)
                <li class="list-group-item">
                    <a>{{$patient->name}}</a>
                    <a class="ml-3">{{$patient->nic}}</a>
                    <!-- <a class="btn btn-sm btn-light ml-3" href="/patient/{{$patient->id}}/edit"><i class="fas fa-edit"></i>Edit Patient</a>
                    <form class="float-right" style="display: inline;" action="/patient/{{$patient->id}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <input class="btn btn-sm btn-outline-danger" type="submit" value="Delete">
                    </form> -->
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection