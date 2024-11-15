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
        <div class="card-header bg-danger text-white">Application :: Rejection </div>
        <div class="card-body">
        <p> We regret to inform you that your application to TechPro institute has been rejected  by our admin team</p>
        <p>The following are your application details:</p>
        <h6>Name: {{ucfirst(strtolower($firstName))}}  {{ ucfirst(strtolower($lastName))}}</h6>
        <h6>Email Address: {{ $email }}</h6>
        <h6>Course applied:  {{$course}} </h6>
        <h6>Phone Number: {{ $phone }}</h6>
        <h6>Rejection Reason: {{ $reason }}</h6>
            
        </div>
    </div>
  </div>
  
</body>
</html>