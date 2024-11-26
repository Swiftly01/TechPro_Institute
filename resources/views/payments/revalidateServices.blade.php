<x-layout>
  <x-slot:title>
    Booking :: Form
  </x-slot:title>

  <div class="container">
    <div class="row main">
      <div class="col text-center">
        <h1><a class=" text-danger home" href="{{ url('/') }}">Home/</a><a class=" text-danger home" href="">Revalidate
            Booking</a></h1>
      </div>

    </div>
  </div>
  <div class="container mt-5">
    <div class="row">
      <div style="background-color: whitesmoke;" class="col">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 text-center mt-5">
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
              <h1 class="payment-text">Payment Details</h1>
              {{-- <p class="fs-4">Your Payment reference no <span class="text-danger fs-4">Kabirakinola234567FTD</span>
              </p> --}}
              <p class="fs-5">Make direct payment to the below bank details</p>
              <p class="fs-5">Bank Name: UBA</p>
              <p class="fs-5 text-danger">Account Number: 1025989215</p>
              <p class="fs-5">Account Name: Tech-Pro Edutech</p>
              <p class="fs-5">Upload Payment Evidence</p>


            </div>
            <div class="col">
              <form action="{{ route('submit.revalidateBooking') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-lg-6">
                    <div class="mb-3">
                      <label for="app_no" class="form-label mt-2 label-name">Invoice Number </label>
                      <input style="width: 100%" type="text" class="form-control  " value="{{ old('input') }}"
                        name="inv" required>
                      <span class="text-danger">
                        @error('inv')
                        {{ $message }}

                        @enderror
                      </span>
                    </div>
                    <div class="mb-3" id="date-section">
                      <label for="start-date" class="form-label"><strong>Select Start Date</strong></label>
                      <input type="date" id="start-date" class="form-control input-size" name="start_date"
                        style="width: 100%" value="{{ old('start_date') }}" required>
                      <span class="text-danger">
                        @error('start_date')
                        {{ $message }}
                        @enderror
                      </span>
                      <label for="end-date" class="form-label mt-3"><strong>Select End Date</strong></label>
                      <input type="date" id="end-date" class="form-control  input-size" name="end_date"
                        style="width: 100%" value="{{ old('end_date') }}" required>
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
                        placeholder="Enter number of people" min="1" style="width: 100%"
                        value="{{ old('number_of_people') }}" required>
                      <span class="text-danger">
                        @error('number_of_people')
                        {{ $message }}
                        @enderror
                      </span>
                    </div>
                    <div class="mb-3">
                      <label for="service-price-display" class="form-label"><strong>Service Price</strong></label>
                      <input value="₦0" class="form-control  input-size" id="service-price-display" style="width: 100%"
                        readonly>
                      <input type="hidden" id="service-price" name="amount_due" style="width: 100%" value="0" />
                      <span class="text-danger">
                        @error('amount_due')
                        {{ $message }}
                        @enderror
                      </span>
                    </div>
                    <div class="mb-3">
                      <label for="receipt_url" class="form-label label-name">Upload Payment Receipts</label>
                      <input style="width: 100%;" type="file" class="form-control mt-2" name="receipt_url" required>
                      <span class="text-danger">
                        @error('receipt_url')
                        {{ $message }}

                        @enderror
                      </span>
                    </div>

                  </div>
                </div>

                <div class="row">
                  <div class="col  mt-2 mb-4">
                    <button type="submit" class="complete-btn">Upload</button>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>




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




</x-layout>