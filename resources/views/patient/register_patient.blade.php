@extends('layouts.app_patient')

@section('title', 'Register Patient')

@section('breadcrumbs')
<ol class="breadcrumb" style="margin-top: 15px;">
    <li class="breadcrumb-item"><a href="/patient">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Register Patient</li>
</ol>
@endsection

@section('content')

<div class="container">

    @if (Session::has('success'))
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
    <form action="/patient" method="POST" class="needs-validation" novalidate>
        @csrf
        <div class="form-row">
            <div class="form-group col-lg-6">
                <label for="name">First Name</label>
                <input type="text" name="fname" id="fname" class="form-control @error('fname') is-invalid @enderror" value="{{ old('fname') }}" required>
                @error('fname')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-lg-6">
                <label for="">Last Name</label>
                <input type="text" name="lname" id="lname" class="form-control @error('lname') is-invalid @enderror" value="{{ old('lname') }}" required>
                @error('lname')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-lg-3">
                <label for="inputAddress">Address (No:)</label>
                <input type="text" name="address_no" id="address_no" class="form-control @error('address_no') is-invalid @enderror" placeholder="Ex : 47/2" value="{{ old('address_no') }}" required>
                @error('address_no')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-lg-3">
                <label for="inputAddress">Street Name</label>
                <input type="text" name="street_name" id="street_name" class="form-control @error('street_name') is-invalid @enderror" placeholder="Ex : Morawattha Road" value="{{ old('street_name') }}" required>
                @error('street_name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-lg-3">
                <label for="inputAddress">City</label>
                <input type="text" name="city" id="city" class="form-control @error('city') is-invalid @enderror" placeholder="Ex : Kandana" value="{{ old('city') }}" required>
                @error('city')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-lg-3">
                <label for="inputAddress">District</label>
                <select id="district" class="custom-select @error('district') is-invalid @enderror" name="district" value="{{ old('district') }}" required>
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
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" required>
                @error('dob')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-3 float-right">
                <label for="gender">Gender</label>
                <select id="gender" class="custom-select @error('gender') is-invalid @enderror" name="gender" required>
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
        </div>
        <!-- <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div> -->
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">National Identity Card Number</label>
                <input type="text" name="nic" id="nic" class="form-control @error('nic') is-invalid @enderror" value="{{ old('nic') }}" required>
                @error('nic')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">E-mail</label>
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                @error('email')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-2">
                <label for="mobile_number">Mobile Number</label>
                <input type="text" id="mobile_number" class="form-control @error('email') is-invalid @enderror" name="mobile_number" value="{{ old('mobile_number') }}" required>
                <small class="form-text text-muted">Format : 0777123456</small>
                @error('mobile_number')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
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
        <button type="reset" class="btn btn-secondary">Reset</button>
    </form>

</div>
@endsection