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
        Patient restored successfully!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <div class="card">
        <div class="card-header"><b>Deleted Patients</b></div>
        <div class="card-body">
            <ul class="list-group">
                @foreach($patients as $patient)
                <li class="list-group-item">
                    {{$patient->name}}
                    <a class="btn btn-sm btn-light btn-outline-success float-right" href="{{ route('patient.restore', $patient->id) }}">Restore Patient</a>
                    <!-- <form class="float-right" style="display: inline;" action="/patient/{{$patient->id}}" method="GET">
                        @csrf
                        <input class="btn btn-sm btn-outline-danger" type="submit" value="Restore">
                    </form> -->
                </li>
                <!-- <a href="/patient/{{$patient->id}}"></a> -->
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection