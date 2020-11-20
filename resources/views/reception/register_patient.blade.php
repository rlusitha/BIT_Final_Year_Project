@extends('layouts.app_reception')

@section('title', 'Register Patient')

@section('breadcrumbs')
<ol class="breadcrumb" style="margin-top: 15px;">
    <li class="breadcrumb-item"><a href="{{ url('/reception') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Register Patient</li>
</ol>
@endsection

@section('content')

<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Register Patient</h1>
    </div>
</div>

@endsection