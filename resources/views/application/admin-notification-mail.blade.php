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
        <div class="card-header bg-success text-white">Student :: Application </div>
        <div class="card-body">

        <p>Dear {{ucfirst(strtolower($adminName))}}  </p>
        <p>A student has registered which is now awaiting your approval</p>
        <p>Please review and apporve at your earliest convinience</p>

        <a href="{{ route('dashboard') }}">
          <button type="button" class="btn btn-success">Proceed to admin dashboard</button>
        </a>
          
        </div>
    </div>
  </div>
  
</body>
</html>