<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Patients Report</title>
</head>

<body>
    <h2 class="text-center">Apple Wound Care (pvt) Ltd</h2>
    <h5 class="text-center">47/A, Adam's Lane, Raddolugama</h5>
    <h6 class="text-center">T.P - 0112654785 | Email - wound_care@gmail.com</h6>
    <br>
    <h3 class="text-center">Patients Report</h3>
    <p>Date: {{date('Y-m-d')}}</p>
    <table class="table table-sm table-bordered">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">City</th>
                <th scope="col">District</th>
                <th scope="col">Age</th>
                <th scope="col">Gender</th>
                <th scope="col">NIC</th>
                <th scope="col">Email</th>
                <th scope="col">Contact Number</th>
                <th scope="col">Registered Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($patients as $patient)
            <tr>
                <td>{{$patient->name}}</td>
                <td>{{$patient->city}}</td>
                <td>{{$patient->district}}</td>
                <td>{{$patient->age}}</td>
                <td>{{$patient->gender}}</td>
                <td>{{$patient->nic}}</td>
                <td>{{$patient->email}}</td>
                <td>{{$patient->mobile_no}}</td>
                <td>{{$patient->created_at}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>