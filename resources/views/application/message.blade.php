<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Application :: Completed</title>
</head>
<body>


  <div class="container">
    <div class="card mt-2">
        <div class="card-header bg-success text-white">Application :: Details </div>
        <div class="card-body">

           <p>Hi {{ ucfirst(strtolower($student->firstname))}} {{ $student->surname }} you have registered succesfully</p>
          <p>Your application details have been sent to your email</p>

          <a href="{{ url('/') }}">
            <button type="button" class="btn btn-success">home</button>
          </a>

    
        </div>
    </div>
  </div>
  
</body>
</html>