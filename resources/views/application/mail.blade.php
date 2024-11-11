<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Application :: Mail</title>
</head>
<body>


  <div class="container">
    <div class="card mt-2">
        <div class="card-header bg-success text-white">Application :: Details </div>
        <div class="card-body">

        <p>Hi {{ucfirst(strtolower($firstName))}}  </p>
        <p>Your application has been completed Successfully.</p>
        <p>The following are your application details:</p>
        <h6>Applcation No :  {{$app_no}}</h6>
        <h6>Name: {{ucfirst(strtolower($firstName))}}  {{ ucfirst(strtolower($lastName))}}</h6>
        <h6>Course applied:  {{$course}} </h6>
        
        <a href="{{ route('payment.show') }}?app_no={{ urlencode($app_no) }}">
          <button type="button" class="btn btn-success">Proceed to make payments</button>
        </a>

            
        </div>
    </div>
  </div>
  
</body>
</html>