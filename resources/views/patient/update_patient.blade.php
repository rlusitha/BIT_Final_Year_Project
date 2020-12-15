@extends('layouts.app_patient')

@section('title', 'Update Patient')

@section('breadcrumbs')
<ol class="breadcrumb" style="margin-top: 15px;">
    <li class="breadcrumb-item"><a href="{{ url('/reception') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Update Patient</li>
</ol>
@endsection

@section('content')
<div class="container-fluid">

    <!-- Update Patient Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            <b>Update Patient</b>
        </h1>
    </div>

    <!--Input field to enter NIC number-->
    <form class="form-inline">
        @csrf
        <label for="nic" class="mr-sm-2">National Identity Card Number</label>
        <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Enter text here" id="nic">
        <button type="button" class="btn btn-primary mb-2" onclick="myFunction()">View</button>
    </form>

    <hr>

    <div id="myDiv" style="display: none;">

    </div>

</div>

<script>
    function myFunction() {

        var x = document.getElementById("myDiv");

        if (x.style.display === "none") {
            x.style.display = "block";

            var xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("myDiv").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "{{ route('update_view_with_data') }}", true);
            xhttp.send();
        }
        else {
            x.style.display == "none";
        }

    }
</script>
@endsection