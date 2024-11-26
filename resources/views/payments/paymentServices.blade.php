<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Techpro Institute Nigeria</title>
  <link rel="icon" href="{{asset('assets/images/techpro_img.png')}}" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
      color: #007BFF;
      /* Changed the color of the agreement message */
    }

    .input-size {
      width: 60%
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
      <div class="col-lg-6 text-center mt-5">
        <h1 class="payment-text">Payment Details</h1>
        {{-- <p class="fs-4">Your Payment reference no <span class="text-danger fs-4">Kabirakinola234567FTD</span></p>
        --}}
        <p class="fs-5">Make direct payment to the bank details below:</p>
        <p class="fs-5">Bank Name: UBA</p>
        <p class="fs-5 text-danger">Account Number: 1025989215</p>
        <p class="fs-5">Account Name: Tech-Pro Edutech</p>
        <p class="fs-5"><strong>Client Name:</strong> {{ ucfirst(strtolower($client->firstname)) }} {{
          ucfirst(strtolower($client->lastname)) }}</p>
        <p class="fs-5"><strong>Client Email: </strong>{{ $client->email }}</p>
        <p class="fs-5"><strong>Service Requested: </strong>{{ $client->service_type }}</p>
      </div>
      <div class="col-lg-6">

        @if(session('error'))
        <div class="alert alert-danger">
          {{ session('error') }}
        </div>
        @endif

        <form action="{{ route('service.upload') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col  mt-5">
              <!-- Date Selection -->
              <div class="mb-3" id="date-section">
                <label for="start-date" class="form-label"><strong>Select Start Date</strong></label>
                <input type="date" id="start-date" class="form-control input-size" name="start_date"
                  value="{{ old('start_date') }}" required>
                <span class="text-danger">
                  @error('start_date')
                  {{ $message }}
                  @enderror
                </span>
                <label for="end-date" class="form-label mt-3"><strong>Select End Date</strong></label>
                <input type="date" id="end-date" class="form-control  input-size" name="end_date"
                  value="{{ old('end_date') }}" required>
                <span class="text-danger">
                  @error('end_date')
                  {{ $message }}
                  @enderror
                </span>

              </div>

              <!-- Number of People -->
              <div class="mb-3" id="people-section">
                <label for="people" class="form-label"><strong>Number of People</strong></label>
                <input type="number" id="people" class="form-control  input-size" name="number_of_people"
                  placeholder="Enter number of people" min="1" value="{{ old('number_of_people') }}" required>
                <span class="text-danger">
                  @error('number_of_people')
                  {{ $message }}
                  @enderror
                </span>
              </div>

              <!-- Upload Payment Receipt -->
              <div class="mb-3">
                <label for="receipt_url" class="form-label label-name fs-5 text-danger">Upload Payment Receipts</label>
                <input type="file" class="form-control mt-2  input-size" name="receipt_url"
                  placeholder="Upload Payment Receipt" value="{{ old('receipt_url') }}" required>
                <input name="id" value="{{ $client->id }}" type="hidden">
                <span class="text-danger">
                  @error('receipt_url')
                  {{ $message }}
                  @enderror
                </span>
              </div>

               <!-- Service Price Display -->
               <div class="mb-3">
                <label for="service-price-display" class="form-label"><strong>Service Price</strong></label>
                <input value="₦0" class="form-control input-size" id="service-price-display" readonly>
                <input type="hidden" id="service-price" name="amount_due" value="0" />
                <span class="text-danger">
                  @error('amount_due')
                  {{ $message }}
                  @enderror
                </span>
              </div>
              <button type="submit" class="complete-btn">Complete Registration</button>
              <a href="{{ url('/') }}">
                <button style="background-color: #105697;" type="button" class="btn pt-2 pb-2 ms-3 mb-1 text-white">
                  Home
                </button>
              </a>
            </div>
          </div>



        </form>


      </div>
    </div>

  </div>



  <script>
    // JavaScript for dynamic service price calculation
   const servicePriceDisplay = document.getElementById('service-price-display');
   const servicePriceInput = document.getElementById('service-price');
    const startDateInput = document.getElementById('start-date');
    const endDateInput = document.getElementById('end-date');
    const peopleInput = document.getElementById('people');

    const dailyRate = 2000; // Define the daily price per person

    // Calculate the total price
    function calculateTotal() {
        const startDate = new Date(startDateInput.value);
        const endDate = new Date(endDateInput.value);
        const numberOfPeople = parseInt(peopleInput.value) || 0;

        // Calculate number of days
        const diffTime = endDate - startDate;
        const numberOfDays = diffTime > 0 ? Math.ceil(diffTime / (1000 * 60 * 60 * 24)) : 0;

        // Calculate total price
        const totalPrice = dailyRate * numberOfDays * numberOfPeople;

        // Update the display with a formatted string
        servicePriceDisplay.value = `₦${totalPrice.toLocaleString()}`;

        // Update the hidden input with the raw numeric value
        servicePriceInput.value = totalPrice;
    }

    // Attach event listeners to inputs
    startDateInput.addEventListener('change', calculateTotal);
    endDateInput.addEventListener('change', calculateTotal);
    peopleInput.addEventListener('input', calculateTotal);
  </script>



  </script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
  </script>
</body>

</html>