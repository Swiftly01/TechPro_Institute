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
        <p class="fs-5">Bank Name: Unity Bank</p>
        <p class="fs-5">Account Number: 0061481312</p> 
        <p class="fs-5">Account Name: Tech-Pro Edutech Consulting LTD</p>
        <p class="fs-5"><strong>Student Name:</strong> {{ ucfirst(strtolower($student->firstname))}} {{ ucfirst(strtolower($student->lastname)) }}</p>
        <p class="fs-5"><strong>Email: </strong>{{ $student->email }}</p>
        <p class="fs-5"><strong>Course: </strong>{{$student->course->name  }}</p>
         
      
        
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

        <form action="{{ route('payment.upload')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
              <div class="col text-center">
                  <div class="mb-3">
                      <label for="amount-due" class="form-label"><strong>Course Price</strong></label>
                      <input  value="&#8358;{{number_format($amount_due) }}" class="form-control mx-auto input-size" id="amount-due" readonly>
                  </div>
                 
                  @if($student->course->id !== 8)  

                   <label for="amount-due" class="form-label text-danger"><strong>* compulsory</strong></label>  
                  <select  name="payment_option"  class="form-select mx-auto input-size" id="payment-option" aria-label="Default select example">
                      <option value="" >Payment Option</option>
                      <option value="one_time">Full Payment</option>
                      <option value="installments">Installments</option>
                  </select>
                  <span class="text-danger">
                    @error('payment_option')
                    {{ $message }}
                      
                    @enderror

                  </span>
                  
                  <span class="text-danger">
                    @error('terms')
                    {{ $message }}
                      
                    @enderror

                  </span>
                  <div id="installment-details" class="mt-3" style="display: none;">
                      <p class="fs-5 text-success">60% of the course price: <span id="sixty-percent"></span></p>
                  </div>

                   @endif 
                   
                  <div class="mb-3">
                      <label for="receipt_url" class="form-label label-name fs-5 text-danger mt-3">Upload Payment Receipts</label>
                      <input  type="file" class="form-control mt-2 mx-auto input-size" name="receipt_url" placeholder="Upload Payment Receipt" required>
                      <input name="id" value="{{ $id }}" type="text" hidden>
                      <span class="text-danger">
                        @error('receipt_url')
                        {{ $message }}
                        @enderror
                      </span>
                  </div>
              </div>
          </div>
      
          <div class="row">
              <div class="col text-center">
                  <div id="agreement-section" class="form-check mt-3" style="display: none;">
                      <input class="form-check-input" type="checkbox" id="agreement" name="terms" >
                      <label class="form-check-label fs-5 agreement-msg" for="agreement">
                          I acknowledge that only 60% of the payment will be approved by the admin, and I agree to complete the remaining balance within one month of resumption.
                      </label>
                     
                  </div>
              </div>
          </div>
      
          <div class="row">
              <div class="col mx-auto mt-4">
                  <button type="submit" class="complete-btn">Complete Registration</button>
                  <a href="{{ url('/') }}"><button style="background-color: #105697;" type="button" class="btn  pt-2 pb-2 ms-3 mb-1 text-white">Home</button></a> 
              </div>
          </div>
      </form>
      
      </div>
    </div>
  </div>


  <script>

document.getElementById('payment-option').addEventListener('change', function () {
    const paymentOption = this.value;
    const amountDue = parseFloat(document.getElementById('amount-due').value.replace(/[^\d.-]/g, ''));
    const agreementSection = document.getElementById('agreement-section');
    const installmentDetails = document.getElementById('installment-details');
    const sixtyPercentDisplay = document.getElementById('sixty-percent');

    if (paymentOption === 'installments') {
        const sixtyPercent = (amountDue * 0.6).toFixed(2);
        sixtyPercentDisplay.textContent = `₦${new Intl.NumberFormat().format(sixtyPercent)}`;
        agreementSection.style.display = 'block';
        installmentDetails.style.display = 'block';
    } else {
        agreementSection.style.display = 'none';
        installmentDetails.style.display = 'none';
    }
});

  </script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
