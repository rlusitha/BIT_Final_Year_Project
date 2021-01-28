@extends('layouts.app_patient')

@section('title', 'Registered Patients Report')

@section('breadcrumbs')
<ol class="breadcrumb" style="margin-top: 15px;">
    <li class="breadcrumb-item"><a href="/patient">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Registered Patients</li>
</ol>
@endsection

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-2 text-gray-800">Registered Patients - District Wise</h1>
        <a href="/all_patients/pdf" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- District -->
    <div class="form-group col-md-3">
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

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Registered Patients (District Wise)</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>City</th>
                            <th>District</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>NIC</th>
                            <th>Contact Number</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>City</th>
                            <th>District</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>NIC</th>
                            <th>Contact Number</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($patients as $patient)
                        <tr>
                            <td>{{$patient->name}}</td>
                            <td>{{$patient->city}}</td>
                            <td>{{$patient->district}}</td>
                            <td>{{$patient->age}}</td>
                            <td>{{$patient->gender}}</td>
                            <td>{{$patient->nic}}</td>
                            <td>{{$patient->mobile_no}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection