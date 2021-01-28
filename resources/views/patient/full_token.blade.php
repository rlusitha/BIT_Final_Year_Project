<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Print Token</title>
</head>

<body>
    <p class="text-center font-weight-bold border-0 m-1 p-0" style="font-size: 10px; line-height: 1;">Apple Wound Care (pvt) Ltd</p>
    <p class="text-center border-0 m-1 p-0"" style="font-size: 8px; line-height: 1;">47/A, Adam's Lane,</p>
    <p class="text-center border-0 m-1 p-0"" style="font-size: 8px; line-height: 1;">Raddolugama.</p>
    <p class="text-center font-weight-light border-0 m-1 p-0"" style="font-size: 6px; line-height: 1;">T.P - 0112654785</p>
    <p class="text-center font-weight-bold border-0 mt-3 mb-4 p-0"" style="font-size: 10px;"><u>TOKEN</u></p>
    
    <h1 class="text-center font-weight-bold">0{{$tokens->token_number}}</h1>

    <p class="text-center border-0 mt-4 mb-1 p-0" style="font-size: 8px;">Name : {{$tokens->patient_name}}</p>
    <p class="text-center font-weight-light border-0 m-1 p-0" style="font-size: 5px;">Thank You!</p>
    <p class="float-left font-weight-light border-0 mt-1 pt-1" style="font-size: 5px;">Date : {{date('Y-m-d')}}</p>
    <p class="float-right font-weight-light border-0 m-1 p-0" style="font-size: 5px;">Time : {{$time}}</p>

    <!-- <br>
    <br>
    <h6 class="text-center font-weight-light">Thank You!</h6> -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>