<x-layout>
  <x-slot:title>
    Application :: Form
  </x-slot:title>

  <div class="container">
    <div class="row main">
      <div class="col">
        <h1>
          <a class="text-danger home" href="{{ url('/') }}">Home/</a>
          <a class="text-danger home">Application</a>
          <a class="text-danger home" href="">/Workstation</a>
        </h1>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div style="background-color: whitesmoke;" class="row">
      <div class="container">
        <div class="gallery-layout">
          <!-- Carousel Implementation -->
          <div id="carouselExample" class="carousel slide gallery-img" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('assets/images/DSC_4919.jpg') }}" class="d-block w-100" alt="Image 1">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('assets/images/DSC_4914.jpg') }}" class="d-block w-100" alt="Image 2">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('assets/images/DSC_4906.jpg') }}" class="d-block w-100" alt="Image 3">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('assets/images/DSC_4932.jpg') }}" class="d-block w-100" alt="Image 3">
              </div>
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
          <div style="background-color: #0A5098; width: 30%;">
            <div class="gallery-btn-layout">
              <a href="{{ route('services.register') }}" class="gallery-btn">Book Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-layout>
