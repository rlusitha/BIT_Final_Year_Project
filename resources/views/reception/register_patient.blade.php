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

    @if (\Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Patient addedd successfully!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <!-- Register Patient Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            <b>Register Patient</b>
        </h1>
    </div>

    <hr>

    <!-- Patient registration form -->
    <form action="register_patient" method="POST">
        @csrf
        <div class="form-row">
            <div class="form-group col-lg-6">
                <label for="name">First Name</label>
                <input type="text" name="fname" class="form-control" id="fname">
            </div>
            <div class="form-group col-lg-6">
                <label for="">Last Name</label>
                <input type="text" name="lname" class="form-control" id="lname">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-lg-3">
                <label for="inputAddress">Address (No:)</label>
                <input type="text" name="address_no" class="form-control" id="address_no" placeholder="Ex : 47/2">
            </div>
            <div class="form-group col-lg-3">
                <label for="inputAddress">Street Name</label>
                <input type="text" name="street_name" class="form-control" id="street_name" placeholder="Ex : Morawattha Road">
            </div>
            <div class="form-group col-lg-3">
                <label for="inputAddress">City</label>
                <input type="text" name="city" class="form-control" id="address_city" placeholder="Ex : Kandana">
            </div>
            <div class="form-group col-lg-3">
                <label for="inputAddress">District</label>
                <select class="custom-select" name="district">
                    <option selected>Choose District</option>
                    <option value="Jaffna">Jaffna</option>
                    <option value="Kilinochchi">Kilinochchi</option>
                    <option value="Mannar">Mannar</option>
                    <option value="Mullaitivu">Mullaitivu</option>
                    <option value="Vavuniya">Vavuniya</option>
                    <option value="Puttalam">Puttalam</option>
                    <option value="Kurunegala">Kurunegala</option>
                    <option value="Gampaha">Gampaha</option>
                    <option value="Colombo">Colombo</option>
                    <option value="Kalutara">Kalutara</option>
                    <option value="Anuradhapura">Anuradhapura</option>
                    <option value="Polonnaruwa">Polonnaruwa</option>
                    <option value="Matale">Matale</option>
                    <option value="Kandy">Kandy</option>
                    <option value="Nuwara Eliya">Nuwara Eliya</option>
                    <option value="Kegalle">Kegalle</option>
                    <option value="Ratnapura">Ratnapura</option>
                    <option value="Trincomalee">Trincomalee</option>
                    <option value="Batticaloa">Batticaloa</option>
                    <option value="Ampara">Ampara</option>
                    <option value="Badulla">Badulla</option>
                    <option value="Monaragala">Monaragala</option>
                    <option value="Hambantota">Hambantota</option>
                    <option value="Matara">Matara</option>
                    <option value="Galle">Galle</option>
                </select>
                <!-- <input type="text" class="form-control" id="address_province" placeholder="Ex : Western"> -->
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="dob">Date of Birth</label>
                <input type="date" class="form-control" name="dob" id="dob">
            </div>
            <div class="form-group col-md-3 float-right">
                <label for="gender">Gender</label>
                <select class="custom-select" name="gender">
                    <option selected>Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
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
                <input type="text" name="nic" class="form-control" id="nic">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">E-mail</label>
                <input type="email" name="email" class="form-control" id="nic">
            </div>
            <div class="form-group col-md-2">
                <label for="mobile_number">Mobile Number</label>
                <input type="text" class="form-control" name="mobile_number" id="mobile_number">
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