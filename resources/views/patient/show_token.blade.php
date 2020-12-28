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
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            <b>All Tokens</b>
        </h1>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Patient Name</th>
                <th scope="col">Token Number</th>
                <th scope="col">Token Date</th>
                <th class="text-center" scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tokens as $token)
            <tr>
                <td>{{$token->patient_name}}</td>
                <td>{{$token->token_number}}</td>
                <td>{{$token->token_date}}</td>
                <td>
                    <a class="btn btn-sm btn-outline-success float-right" href="/pdf/{{$token->id}}"><i class="far fa-file-pdf mr-2"></i>Print Token</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection