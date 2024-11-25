<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Contact Us :: Mail</title>
</head>
<body>


  <div class="container">
    <div class="card mt-2">
        <div style="background-color: #105697;" class="card-header  text-white">Contact :: Mail </div>
        <div class="card-body">

        <p>Dear {{ucfirst(strtolower($adminName))}} </p>
        <p>You have a contact  us message with the following details </p>

        <h6><strong>Contact Email:</strong>{{ $contactEmail }}</h6>
        <h6><strong>Contact Desc:</strong>{{ $contactDesc }}</h6>
        
        </div>
    </div>
  </div>
  
</body>
</html>