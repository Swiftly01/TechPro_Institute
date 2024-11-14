<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Techpro Institute Nigeria</title>
  <link rel="icon" href="{{asset('assets/images/techpro_img.png')}}" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="{{asset('assets/styles/payment.css')}}">
  <style>
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col text-center mt-5">
        <h1 class="payment-text">Payment Details</h1>
        <p class="fs-4">Your Payment reference no <span class="text-danger fs-4">Kabirakinola234567FTD</span></p>
        <p class="fs-5">Make direct payment to the below bank details</p>
        <p class="fs-5">Bank Name: UBA</p>
        <p class="fs-5">Account Number: 123456789</p>
        <p class="fs-5">Account Name: Tech Pro Institute</p>
        <p class="fs-5">Upload Payment Evidence</p>
        
        @if(session('error'))
        <div class="alert alert-danger">
          {{ session('error') }}
        </div>
      
        @endif 

        @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>   
        @endif
        <form action="{{ route('payment.upload') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col text-center">
              <div class="mb-3">
                <label for="image_url" class="form-label label-name"></label>
                <input style="width: 30%;" type="file" class="form-control mt-2 mx-auto" name="receipt_url">
                <input name="app_no" value="{{ $app_no }}" type="text" hidden>
                <span class="text-danger">
                  @error('receipt_url')
                  {{ $message }}
                    
                  @enderror

                </span>
              </div>
            </div>
          </div>
    
          <div class="row">
            <div class="col mx-auto mt-4">
              <button type="submit" class="complete-btn">Complete Registration</button>
            </div>
          </div>
      </form>
      </div>
    </div>
  </div>
  

  



   
   

 


 
  
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>