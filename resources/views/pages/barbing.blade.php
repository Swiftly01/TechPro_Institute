<x-layout>
  <x-slot:title>
    Barbing :: Services
  </x-slot:title>

  <div class="container">
    <div class="row main">
      <div class="col">
        @if(session('error'))

        <div class="alert alert-danger">
          {{ session('error') }}
        </div>

        @endif

        @if(session('success'))

        <div class="alert alert-danger">
          {{ session('success') }}
        </div>

        @endif

        

        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        <h1>
          <a class="text-danger home" href="index.html">Home/</a><a class="text-danger home"
            href="services.html">Services/</a><a class="text-danger home" href="mentoring.html">Barbing</a>
        </h1>
      </div>
    </div>
    <div class="row mt-1">
      <div class="col">
        <p class="consultancy-text">
          At our barbing salon, we pride ourselves on delivering top-notch
          grooming services tailored to your unique style and preferences. Our
          highly skilled barbers specialize in precision cuts, stylish trends,
          and classic grooming techniques, ensuring you always leave looking
          and feeling your best.
        </p>
      </div>
    </div>
  </div>

  <div class="container mt-4">
    <div style="background-color: whitesmoke" class="row">
      <div class="container">
        <div class="gallery-layout">
          <!-- Carousel Implementation -->
          <div id="carouselExample" class="carousel slide gallery-img" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('assets/images/barbing.jpg')}}" class="d-block w-100" alt="Image 1" />
              </div>
              <div class="carousel-item">
                <img src="{{asset('assets/images/barbing2.jpg')}}" class="d-block w-100" alt="Image 2" />
              </div>
              {{-- <div class="carousel-item">
                <img src="{{asset('assets/images/DSC_4906.jpg')}}" class="d-block w-100" alt="Image 3" />
              </div>
              <div class="carousel-item">
                <img src="{{asset('assets/images/DSC_4932.jpg')}}" class="d-block w-100" alt="Image 3" />
              </div> --}}
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

          <!-- Booking Section -->
          <div style="background-color: #0a5098; width: 30%">
            <div class="gallery-btn-layout">
              <a class="gallery-btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Schedule Now</a>
              <a class="make-payment-btn" data-bs-toggle="modal" data-bs-target="#payment" href="">Make Payment</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mt-5">
      <h4 class="text-center">
        We go beyond just haircuts—our services include:
      </h4>
      <ul>
        <li>
          <strong>Haircuts and Styling : </strong>From modern fades to
          timeless classics, we cater to all hair types and styles.
        </li>
        <li>
          <strong>Beard Grooming : </strong> Expert trimming, shaping, and
          maintenance to give you a sharp, polished look.
        </li>
        <li>
          <strong>Hot Towel Shaves : </strong> Relax and enjoy the luxury of a
          close, soothing shave.
        </li>
        <li>
          <strong>Scalp Treatments :</strong> Nourish your scalp and promote
          healthy hair growth with our premium products.
        </li>
      </ul>
      <p class="consultancy-text mt-2">
        Your experience matters to us. Our salon features a welcoming and
        hygienic environment, and we use high-quality tools and products to
        ensure the best results. Step into our salon and let us elevate your
        grooming game. Whether it's a quick refresh or a complete
        transformation, we deliver a service that exceeds expectations.
      </p>
    </div>

    <div class="row">
      <div class="col text-center mt-0 mt-md-3">
        <a href="" class="schedule-btn">Tailored Cuts, Just for You</a>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Kindly fill Your Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="{{ route('services.barbing.create') }}" method="POST">
            @csrf

            <div class="modal-body">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input value="{{ old('email') }}" name="email" type="email" class="form-control" id="exampleInputEmail1"
                  aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                @error('email')
                <span class="text-danger">
                  {{ $message }}
                </span>

                @enderror

              </div>
              <div class="mb-3">
                <label for="phone_number" class="form-label">Phone Number</label>
                <input value="{{ old('phone') }}" name="phone" type="number" class="form-control" id="phone_number"
                  aria-describedby="phone_number">
                @error('phone')
                <span class="text-danger">
                  {{ $message }}
                </span>

                @enderror
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="date" class="form-label">Appointment Date</label>
                <input value="{{ old('appointment_date') }}" name="appointment_date" type="date" class="form-control"
                  id="date">
                @error('appointment_date')
                <span class="text-danger">
                  {{ $message }}
                </span>

                @enderror
              </div>

              <div class="mb-3">
                <label for="timeInput" class="form-label">Select Time</label>
                <input value="{{ old('appointment_time') }}" type="time" id="timeInput" name="appointment_time"
                  class="form-control" min="09:00" max="17:00">
                @error('appointment_time')
                <span class="text-danger">
                  {{ $message }}
                </span>

                @enderror
              </div>


            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="payment" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Barbing Service :: Payment</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          
          <!-- Modal Body -->
          <form action="{{ route('service.barbing.upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
              <!-- Step 1 -->
              <div id="step-1" class="step">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email Address</label>
                  <input value="{{ old('email') }}" name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="phone_number" class="form-label">Phone Number</label>
                  <input value="{{ old('phone') }}" name="phone" type="number" class="form-control" id="phone_number" aria-describedby="phone_number">
                </div>
                <button type="button" class="btn btn-secondary float-end mb-3" id="next-step">Next</button>
              </div>
              
              <!-- Step 2 -->
              <div id="step-2" class="step d-none">
                <h6>Kindly make payment to the account details below and upload payment evidence</h6>
                <h6 class="text-muted">Account Name: Tech-Pro Edutech Consulting LTD</h6>
                <h6 class="text-muted">Bank Name: Unity Bank</h6>
                <h6 class="text-muted">Account Number: 0061481312</h6>
                <div class="mb-3">
                  <label for="payment_receipt" class="form-label">Upload Payment Evidence</label>
                  <input  type="file" class="form-control" name="receipt_url">
                </div>
                <button type="button" class="btn btn-secondary" id="prev-step">Back</button>
                <button type="submit" class="btn btn-success">Submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    
  </div>


  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const nextButton = document.getElementById('next-step');
      const prevButton = document.getElementById('prev-step');
      const step1 = document.getElementById('step-1');
      const step2 = document.getElementById('step-2');
  
      nextButton.addEventListener('click', function () {
        step1.classList.add('d-none');
        step2.classList.remove('d-none');
      });
  
      prevButton.addEventListener('click', function () {
        step2.classList.add('d-none');
        step1.classList.remove('d-none');
      });
    });
  </script>
  


</x-layout>