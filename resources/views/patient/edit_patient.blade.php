@extends('layouts.app_patient')

@section('title', 'Update Patient')

@section('breadcrumbs')
<ol class="breadcrumb" style="margin-top: 15px;">
    <li class="breadcrumb-item"><a href="/patient">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Update Patient</li>
</ol>
@endsection

@section('content')

<div class="container">

    @if (Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Patient updated successfully!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <!-- Register Patient Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            <b>Update Patient</b>
        </h1>
    </div>

    <hr>

    <!-- Patient registration form -->
    <form action="/patient/{{$patient->id}}" method="POST" class="needs-validation" novalidate>
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group col-lg-12">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ $patient->name ?? old('name') }}" required>
                @error('name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-lg-3">
                <label for="inputAddress">Address (No:)</label>
                <input type="text" name="address_no" id="address_no" class="form-control @error('address_no') is-invalid @enderror" placeholder="Ex : 47/2" value="{{ $patient->address_no ?? old('address_no') }}" required>
                @error('address_no')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-lg-3">
                <label for="inputAddress">Street Name</label>
                <input type="text" name="street_name" id="street_name" class="form-control @error('street_name') is-invalid @enderror" placeholder="Ex : Morawattha Road" value="{{ $patient->street_name ?? old('street_name') }}" required>
                @error('street_name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-lg-3">
                <label for="inputAddress">City</label>
                <input type="text" name="city" id="city" class="form-control @error('city') is-invalid @enderror" placeholder="Ex : Kandana" value="{{ $patient->city ?? old('city') }}" required>
                @error('city')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-lg-3">
                <label for="inputAddress">District</label>
                <select id="district" class="custom-select @error('district') is-invalid @enderror" name="district" value="{{ $patient->district ?? old('district') }}" required>
                    <option value="" selected>Choose District</option>
                    <option value="Jaffna" {{ $patient->district == 'Jaffna' ? 'selected' : ''}}>
                        Jaffna
                    </option>
                    <option value="Kilinochchi" {{ $patient->district == 'Kilinochchi' ? 'selected' : ''}}>
                        Kilinochchi
                    </option>
                    <option value="Mannar" {{ $patient->district == 'Mannar' ? 'selected' : ''}}>
                        Mannar
                    </option>
                    <option value="Mullaitivu" {{ $patient->district == 'Mullaitivu' ? 'selected' : ''}}>
                        Mullaitivu
                    </option>
                    <option value="Vavuniya" {{ $patient->district == 'Vavuniya' ? 'selected' : ''}}>
                        Vavuniya
                    </option>
                    <option value="Puttalam" {{ $patient->district == 'Puttalam' ? 'selected' : ''}}>
                        Puttalam
                    </option>
                    <option value="Kurunegala" {{ $patient->district == 'Kurunegala' ? 'selected' : ''}}>
                        Kurunegala
                    </option>
                    <option value="Gampaha" {{ $patient->district == 'Gampaha' ? 'selected' : ''}}>
                        Gampaha
                    </option>
                    <option value="Colombo" {{ $patient->district == 'Colombo' ? 'selected' : ''}}>
                        Colombo
                    </option>
                    <option value="Kalutara" {{ $patient->district == 'Kalutara' ? 'selected' : ''}}>
                        Kalutara
                    </option>
                    <option value="Anuradhapura" {{ $patient->district == 'Anuradhapura' ? 'selected' : ''}}>
                        Anuradhapura
                    </option>
                    <option value="Polonnaruwa" {{ $patient->district == 'Polonnaruwa' ? 'selected' : ''}}>
                        Polonnaruwa
                    </option>
                    <option value="Matale" {{ $patient->district == 'Matale' ? 'selected' : ''}}>
                        Matale
                    </option>
                    <option value="Kandy" {{ $patient->district == 'Kandy' ? 'selected' : ''}}>
                        Kandy
                    </option>
                    <option value="Nuwara Eliya" {{ $patient->district == 'Nuwara Eliya' ? 'selected' : ''}}>
                        Nuwara Eliya
                    </option>
                    <option value="Kegalle" {{ $patient->district == 'Kegalle' ? 'selected' : ''}}>
                        Kegalle
                    </option>
                    <option value="Ratnapura" {{ $patient->district == 'Ratnapura' ? 'selected' : ''}}>
                        Ratnapura
                    </option>
                    <option value="Trincomalee" {{ $patient->district == 'Trincomalee' ? 'selected' : ''}}>
                        Trincomalee
                    </option>
                    <option value="Batticaloa" {{ $patient->district == 'Batticaloa' ? 'selected' : ''}}>
                        Batticaloa
                    </option>
                    <option value="Ampara" {{ $patient->district == 'Ampara' ? 'selected' : ''}}>
                        Ampara
                    </option>
                    <option value="Badulla" {{ $patient->district == 'Badulla' ? 'selected' : ''}}>
                        Badulla
                    </option>
                    <option value="Monaragala" {{ $patient->district == 'Monaragala' ? 'selected' : ''}}>
                        Monaragala
                    </option>
                    <option value="Hambantota" {{ $patient->district == 'Hambantota' ? 'selected' : ''}}>
                        Hambantota
                    </option>
                    <option value="Matara" {{ $patient->district == 'Matara' ? 'selected' : ''}}>
                        Matara
                    </option>
                    <option value="Galle" {{ $patient->district == 'Galle' ? 'selected' : ''}}>
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
                <input type="date" id="dob" class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ $patient->date_of_birth ?? old('dob') }}" required>
                @error('dob')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-3 float-right">
                <label for="gender">Gender</label>
                <select id="gender" class="custom-select @error('gender') is-invalid @enderror" name="gender" value="{{ $patient->gender ?? old('gender') }}" required>
                    <option value="" selected>Select Gender</option>
                    <option value="Male" {{ $patient->gender == 'Male' ? 'selected' : ''}}>
                        Male
                    </option>

                    <option value="Female" {{ $patient->gender == 'Female' ? 'selected' : ''}}>
                        Female
                    </option>
                </select>
                @error('gender')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-lg-3">
                <label for="active">Active</label>
                <input type="number" name="active" id="active" class="form-control @error('active') is-invalid @enderror" value="1" readonly>
                @error('active')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">National Identity Card Number</label>
                <input type="text" name="nic" id="nic" class="form-control @error('nic') is-invalid @enderror" value="{{ $patient->nic ?? old('nic') }}" required>
                @error('nic')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">E-mail</label>
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ $patient->email ?? old('email') }}" required>
                @error('email')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group col-md-2">
                <label for="mobile_number">Mobile Number</label>
                <input type="text" id="mobile_number" class="form-control @error('email') is-invalid @enderror" name="mobile_number" value="{{ $patient->mobile_no ?? old('mobile_number') }}" required>
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
        <button type="submit" class="btn btn-primary">Update</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
    </form>

</div>
@endsection