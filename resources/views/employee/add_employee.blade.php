@extends('layouts.app_admin')

@section('title', 'Add Employee')

@section('breadcrumbs')
<ol class="breadcrumb" style="margin-top: 15px;">
    <li class="breadcrumb-item"><a href="/patient">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add Employees</li>
</ol>
@endsection

@section('content')

<div class="container">

    @if (Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Employee addedd successfully!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <!-- Add Employee Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            <b>Add Employees</b>
        </h1>
    </div>

    <hr>

    <!-- Employee registration form -->
    <form action="/employee" method="POST" class="needs-validation" novalidate>
        @csrf

        <!-- Title Field -->
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="title">Title</label>
                <select name="title" class="form-control @error('title') is-invalid @enderror" required>
                    <option value="" selected>Select Title</option>
                    <option value="Mr." {{ old('title') == 'Mr.' ? 'selected' : ''}}>Mr.</option>
                    <option value="Miss." {{ old('title') == 'Miss.' ? 'selected' : ''}}>Miss.</option>
                    <option value="Mrs." {{ old('title') == 'Mrs.' ? 'selected' : ''}}>Mrs.</option>
                    <option value="Dr." {{ old('title') == 'Dr.' ? 'selected' : ''}}>Dr.</option>
                </select>
                @error('title')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>

        <!-- Employee Name -->
        <div class="form-row">

            <!-- First Name -->
            <div class="form-group col-md-4">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required>
                @error('first_name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <!-- Middle Name -->
            <div class="form-group col-md-4">
                <label for="middle_name">Middle Name</label>
                <input type="text" class="form-control @error('middle_name') is-invalid @enderror" name="middle_name" value="{{ old('middle_name') }}">
                <small class="form-text text-muted">Middle name is optional</small>
                @error('middle_name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <!-- Last Name -->
            <div class="form-group col-md-4">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required>
                @error('last_name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

        </div>

        <!-- Employee Address -->
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required>
            @error('address')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <!-- District, Contact Number, Email -->
        <div class="form-row">

            <!-- District -->
            <div class="form-group col-md-4">
                <label for="district">District</label>
                <select name="district" class="form-control @error('district') is-invalid @enderror" value="{{ old('district') }}" required>
                    <option value="" selected>Choose District</option>
                    <option value="Jaffna" {{ old('district') == 'Jaffna' ? 'selected' : ''}}>
                        Jaffna
                    </option>
                    <option value="Kilinochchi" {{ old('district') == 'Kilinochchi' ? 'selected' : ''}}>
                        Kilinochchi
                    </option>
                    <option value="Mannar" {{ old('district') == 'Mannar' ? 'selected' : ''}}>
                        Mannar
                    </option>
                    <option value="Mullaitivu" {{ old('district') == 'Mullaitivu' ? 'selected' : ''}}>
                        Mullaitivu
                    </option>
                    <option value="Vavuniya" {{ old('district') == 'Vavuniya' ? 'selected' : ''}}>
                        Vavuniya
                    </option>
                    <option value="Puttalam" {{ old('district') == 'Puttalam' ? 'selected' : ''}}>
                        Puttalam
                    </option>
                    <option value="Kurunegala" {{ old('district') == 'Kurunegala' ? 'selected' : ''}}>
                        Kurunegala
                    </option>
                    <option value="Gampaha" {{ old('district') == 'Gampaha' ? 'selected' : ''}}>
                        Gampaha
                    </option>
                    <option value="Colombo" {{ old('district') == 'Colombo' ? 'selected' : ''}}>
                        Colombo
                    </option>
                    <option value="Kalutara" {{ old('district') == 'Kalutara' ? 'selected' : ''}}>
                        Kalutara
                    </option>
                    <option value="Anuradhapura" {{ old('district') == 'Anuradhapura' ? 'selected' : ''}}>
                        Anuradhapura
                    </option>
                    <option value="Polonnaruwa" {{ old('district') == 'Polonnaruwa' ? 'selected' : ''}}>
                        Polonnaruwa
                    </option>
                    <option value="Matale" {{ old('district') == 'Matale' ? 'selected' : ''}}>
                        Matale
                    </option>
                    <option value="Kandy" {{ old('district') == 'Kandy' ? 'selected' : ''}}>
                        Kandy
                    </option>
                    <option value="Nuwara Eliya" {{ old('district') == 'Nuwara Eliya' ? 'selected' : ''}}>
                        Nuwara Eliya
                    </option>
                    <option value="Kegalle" {{ old('district') == 'Kegalle' ? 'selected' : ''}}>
                        Kegalle
                    </option>
                    <option value="Ratnapura" {{ old('district') == 'Ratnapura' ? 'selected' : ''}}>
                        Ratnapura
                    </option>
                    <option value="Trincomalee" {{ old('district') == 'Trincomalee' ? 'selected' : ''}}>
                        Trincomalee
                    </option>
                    <option value="Batticaloa" {{ old('district') == 'Batticaloa' ? 'selected' : ''}}>
                        Batticaloa
                    </option>
                    <option value="Ampara" {{ old('district') == 'Ampara' ? 'selected' : ''}}>
                        Ampara
                    </option>
                    <option value="Badulla" {{ old('district') == 'Badulla' ? 'selected' : ''}}>
                        Badulla
                    </option>
                    <option value="Monaragala" {{ old('district') == 'Monaragala' ? 'selected' : ''}}>
                        Monaragala
                    </option>
                    <option value="Hambantota" {{ old('district') == 'Hambantota' ? 'selected' : ''}}>
                        Hambantota
                    </option>
                    <option value="Matara" {{ old('district') == 'Matara' ? 'selected' : ''}}>
                        Matara
                    </option>
                    <option value="Galle" {{ old('district') == 'Galle' ? 'selected' : ''}}>
                        Galle
                    </option>
                </select>
                @error('district')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <!-- Contact Number -->
            <div class="form-group col-md-4">
                <label for="contact_number">Contact Number</label>
                <input type="tel" class="form-control @error('contact_number') is-invalid @enderror" name="contact_number" pattern="[0-9]{3}-[0-9]{7}" value="{{ old('contact_number') }}" required>
                <small class="form-text text-muted">Format : 077-1234567</small>
                @error('contact_number')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <!-- Email-->
            <div class="form-group col-md-4">
                <label for="email">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                @error('email')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

        </div>

        <!-- DOB, Gender, NIC, Designation -->
        <div class="form-row">

            <!-- Date of Birth -->
            <div class="form-group col-md-3">
                <label for="dob">Date of Birth</label>
                <input type="date" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" required>
                @error('dob')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <!-- Gender -->
            <div class="form-group col-md-3">
                <label for="gender">Gender</label>
                <select class="form-control @error('gender') is-invalid @enderror" name="gender" required>
                    <option value="" selected>Select Gender</option>
                    <option value="Male" {{ old('gender') == 'Male' ? 'selected' : ''}}>
                        Male
                    </option>
                    <option value="Female" {{ old('gender') == 'Female' ? 'selected' : ''}}>
                        Female
                    </option>
                </select>
                @error('gender')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <!-- NIC -->
            <div class="form-group col-md-3">
                <label for="nic">National Identity Card Number</label>
                <input type="text" name="nic" class="form-control @error('nic') is-invalid @enderror" value="{{ old('nic') }}" required>
                @error('nic')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <!-- Designation -->
            <div class="form-group col-md-3">
                <label for="nic">Designation</label>
                <input type="text" name="designation" class="form-control @error('designation') is-invalid @enderror" value="{{ old('designation') }}" required>
                @error('designation')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-secondary ml-1" onclick="customReset()">Reset</button>

    </form>

</div>

@endsection