<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Approval :: Mail</title>
</head>
<body>


  <div class="container">
    <div class="card mt-2">
        <div class="card-header bg-danger text-white">Service :: Rejection </div>
        <div class="card-body">
        <p> We regret to inform you that your payment could not be approved</p>
        <p>The following are your application details:</p>
        <h6>Name: {{ucfirst(strtolower($firstName))}}  {{ ucfirst(strtolower($lastName))}}</h6>
        <h6>Email Address: {{ $email }}</h6>
        <h6>Service Requested:  {{ str_replace( '_', ' ',$service)}} </h6>
        <h6>Phone Number: {{ $phone }}</h6>
        <h6>Reason Payment was not approved: {{ $reason }}</h6>
            
        </div>
    </div>
  </div>
  
</body>
</html>