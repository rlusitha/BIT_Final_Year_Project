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
    @endif

    <div class="card">
        <div class="card-header"><b>Registered Patients</b></div>
        <div class="card-body">
            <ul class="list-group">
                @foreach($patients as $patient)
                <li class="list-group-item">
                    <a href="/patient/{{$patient->id}}">{{$patient->name}}</a>
                    <a class="btn btn-sm btn-light ml-3" href="/patient/{{$patient->id}}/edit"><i class="fas fa-edit"></i>Edit Patient</a>
                    <form class="float-right" style="display: inline;" action="/patient/{{$patient->id}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <input class="btn btn-sm btn-outline-danger" type="submit" value="Delete">
                    </form>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection