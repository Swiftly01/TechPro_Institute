<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Techpro Institute Nigeria</title>
  <link rel="icon" href="{{asset('assets/images/techpro_img.png')}}" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
  <style>
    .payment-text {
      font-size: 2rem;
      font-weight: bold;
    }
    .complete-btn {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .complete-btn:hover {
      background-color: #45a049;
    }
    .text-danger {
      color: red;
    }
    .agreement-msg {
      color: #007BFF; /* Changed the color of the agreement message */
    }

    .input-size {
      width: 30%
    }

    @media screen and (max-width:997px) {
      .input-size {
        width: 100%
      }
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="row">
        <div class="col text-center mt-5">
            <h1 class="payment-text">Payment Details</h1>
            {{-- <p class="fs-4">Your Payment reference no <span class="text-danger fs-4">Kabirakinola234567FTD</span></p> --}}
            <p class="fs-5">Make direct payment to the bank details below:</p>
            <p class="fs-5">Bank Name: UBA</p>
            <p class="fs-5">Account Number: 1025989215</p>
            <p class="fs-5">Account Name: Tech-Pro Edutech</p>
            <p class="fs-5"><strong>Client Name:</strong> {{ ucfirst(strtolower($client->firstname)) }} {{ ucfirst(strtolower($client->lastname)) }}</p>
            <p class="fs-5"><strong>Client Email: </strong>{{ $client->email }}</p>
            <p class="fs-5"><strong>Service Requested: </strong>{{ $client->service_type }}</p>

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            @if($schedule->type ==  'Work Station')
                <form action="{{ route('service.upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col text-center">
                          <div class="mb-3">
                            <label for="service-price" class="form-label"><strong>Service Price</strong></label>
                            <input 
                                value="₦0" 
                                class="form-control mx-auto input-size" 
                                id="service-price" 
                                readonly
                            >
                        </div>
                        <div class="mb-3">
                            <label for="no-of-days" class="form-label"><strong>No of Days</strong></label>
                            <input 
                                type="number" 
                                value="" 
                                class="form-control mx-auto input-size"  
                                id="no-of-days" 
                                placeholder="Enter the number of days"
                            >
                        </div>


                            <div class="mb-3">
                                <label for="receipt_url" class="form-label label-name fs-5 text-danger">Upload Payment Receipts</label>
                                <input 
                                    type="file" 
                                    class="form-control mt-2 mx-auto input-size" 
                                    name="receipt_url" 
                                    placeholder="Upload Payment Receipt" 
                                    required
                                >
                                <input name="id" value="{{ $client->id }}" type="hidden">
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
                            <a href="{{ url('/') }}">
                                <button 
                                    style="background-color: #105697;" 
                                    type="button" 
                                    class="btn pt-2 pb-2 ms-3 mb-1 text-white"
                                >
                                    Home
                                </button>
                            </a>
                        </div>
                    </div>
                </form>
            @else
            <div class="container">
              <p class="text-success fs-4">
                Kindly proceed to our office @ 103 Gbogan Ibadan Road, beside Omoluabi building, Osogbo, Osun State for booking and more enquiry.
            </p>

            </div>
               
            @endif
        </div>
    </div>
</div>

<script>
  // JavaScript to handle the price calculation
  document.getElementById('no-of-days').addEventListener('input', function () {
      const dailyPrice = 2000; // Daily price
      const days = parseInt(this.value) || 0; // Get number of days; default to 0 if invalid
      const totalPrice = dailyPrice * days; // Calculate total price
      
      // Update the service price input field
      document.getElementById('service-price').value = `₦${totalPrice.toLocaleString()}`;
  });
</script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
