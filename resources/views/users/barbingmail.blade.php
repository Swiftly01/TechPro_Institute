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
        <div style="background-color: #105697;" class="card-header  text-white">Barbing Service :: Notification </div>
        <div class="card-body">

        <p>Hi {{ucfirst(strtolower($email))}}  </p>
        <p>Your barbing appointment has been scheduled successfully</p>
  
        <a href="{{ route('client.dashboard') }}">
          <button style="background-color: #105697;" type="button" class="btn text-white">Proceed to view appointment Details</button>
        </a>
          
        </div>
    </div>
  </div>
  
</body>
</html>