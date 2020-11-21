@extends('layouts.app_reception')

@section('title', 'Register Patient')

@section('breadcrumbs')
<ol class="breadcrumb" style="margin-top: 15px;">
    <li class="breadcrumb-item"><a href="{{ url('/reception') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Register Patient</li>
</ol>
@endsection

@section('content')

<div class="container">

    <!-- Register Patient Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            <b>Register Patient</b>
        </h1>
    </div>

    <hr>

    <!-- Patient registration form -->
    <form>
        <div class="form-row">
            <div class="form-group col-lg-6">
                <label for="name">First Name</label>
                <input type="text" class="form-control" id="fname">
            </div>
            <div class="form-group col-lg-6">
                <label for="">Last Name</label>
                <input type="text" class="form-control" id="lname">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-lg-3">
                <label for="inputAddress">Address (No:)</label>
                <input type="text" class="form-control" id="address_no" placeholder="Ex : 47/2">
            </div>
            <div class="form-group col-lg-3">
                <label for="inputAddress">Street Name</label>
                <input type="text" class="form-control" id="street_name" placeholder="Ex : Morawattha Road">
            </div>
            <div class="form-group col-lg-3">
                <label for="inputAddress">City</label>
                <input type="text" class="form-control" id="address_city" placeholder="Ex : Kandana">
            </div>
            <div class="form-group col-lg-3">
                <label for="inputAddress">District</label>
                <select class="custom-select">
                    <option selected>Choose District</option>
                    <option value="1">Jaffna</option>
                    <option value="2">Kilinochchi</option>
                    <option value="3">Mannar</option>
                    <option value="4">Mullaitivu</option>
                    <option value="5">Vavuniya</option>
                    <option value="6">Puttalam</option>
                    <option value="7">Kurunegala</option>
                    <option value="8">Gampaha</option>
                    <option value="9">Colombo</option>
                    <option value="10">Kalutara</option>
                    <option value="11">Anuradhapura</option>
                    <option value="12">Polonnaruwa</option>
                    <option value="13">Matale</option>
                    <option value="14">Kandy</option>
                    <option value="15">Nuwara Eliya</option>
                    <option value="16">Kegalle</option>
                    <option value="17">Ratnapura</option>
                    <option value="18">Trincomalee</option>
                    <option value="19">Batticaloa</option>
                    <option value="20">Ampara</option>
                    <option value="21">Badulla</option>
                    <option value="22">Monaragala</option>
                    <option value="23">Hambantota</option>
                    <option value="24">Matara</option>
                    <option value="25">Galle</option>
                </select>
                <!-- <input type="text" class="form-control" id="address_province" placeholder="Ex : Western"> -->
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="dob">Date of Birth</label>
                <input type="date" class="form-control" id="dob">
            </div>
            <div class="form-group col-md-3 float-right">
                <label for="gender">Gender</label>
                <select class="custom-select">
                    <option selected>Select Gender</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                </select>
            </div>
        </div>
        <!-- <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div> -->
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">National Identity Card Number</label>
                <input type="text" class="form-control" id="nic">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">E-mail</label>
                <input type="email" class="form-control" id="nic">
            </div>
            <div class="form-group col-md-2">
                <label for="mobile_number">Mobile Number</label>
                <input type="tel" class="form-control" id="mobile_number">
                <small class="form-text text-muted">Format : 0777123456</small>
            </div>
        </div>
        <!-- <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
            </div>
        </div> -->
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reser" class="btn btn-secondary">Reset</button>
    </form>

</div>

@endsection