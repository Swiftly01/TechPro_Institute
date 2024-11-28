<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Techpro Institute Nigeria</title>
  <link rel="icon" href="{{ asset('assets/images/techpro_img.png') }}" type="image/x-icon">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="{{ asset('assets/styles/gallery.css') }}">
</head>
<body>

  
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand ps-4" href="{{ url('/') }}">
            <img width="80px" height="50px" class="img-fluid" src="{{ asset('assets/images/techpro_img.png') }}" alt="Techpro Logo">
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 mt-2">
                <li class="nav-item me-5">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item me-5">
                  <a class="nav-link" href="{{ url('/services') }}">Services</a>
              </li>
               
                <li class="nav-item me-5">
                    <a class="nav-link" href="{{ url('/courses') }}">Courses</a>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                </li>
                 <li class="nav-item d-lg-none">
                    <a href="{{ url('/verify/details') }}" class="nav-link">
                        <button class="register">Login</button>
                    </a>
                </li> 
            </ul>
        </div>

        <a href="{{ url('/verify/details') }}" class="me-4 d-none d-lg-block">
            <button class="register">Login</button>
        </a> 
    </div>
</nav>


  <div class="container">
    <div class="row main">
      <div class="col">
        <h1><a class="text-danger home" href="{{ url('/') }}">Home/</a><a class="text-danger home" href="{{ url('/gallery') }}">Gallery</a></h1>
      </div>
    </div>
  </div> 

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-12">
        <div class="links">
          <ul>
            <li><a href=""><h1 class="our">Our Spaces</h1></a></li>
            <li><img class="mb-1" src="{{ asset('assets/images/mdi-light_arrow-right (1).png') }}" alt=""> <a href="{{ url('/gaming') }}">Gaming</a></li>
            <li><img class="mb-1" src="{{ asset('assets/images/mdi-light_arrow-right (1).png') }}" alt=""> <a href="{{ url('/hostel') }}">Hostel Facilities</a></li>
            <li><img class="mb-1" src="{{ asset('assets/images/mdi-light_arrow-right (1).png') }}" alt=""> <a href="{{ url('/working') }}">Co-Working Space</a></li>
          </ul>
        </div>
      </div>

      
      <div class="col-lg-8 col-md-12">
        <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('assets/images/DSC_4896.jpg') }}" class="d-block w-100 img-fluid" alt="Image 1">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('assets/images/DSC_4914.jpg') }}" class="d-block w-100 img-fluid" alt="Image 2">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('assets/images/DSC_4906.jpg') }}" class="d-block w-100 img-fluid" alt="Image 3">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('assets/images/DSC_4927.jpg') }}" class="d-block w-100 img-fluid" alt="Image 4">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('assets/images/DSC_4906.jpg') }}" class="d-block w-100 img-fluid" alt="Image 4">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('assets/images/DSC_4907.jpg') }}" class="d-block w-100 img-fluid" alt="Image 4">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('assets/images/DSC_4932.jpg') }}" class="d-block w-100 img-fluid" alt="Image 4">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('assets/images/DSC_4918.jpg') }}" class="d-block w-100 img-fluid" alt="Image 4">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('assets/images/DSC_4925.jpg') }}" class="d-block w-100 img-fluid" alt="Image 4">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('assets/images/DSC_4921.jpg') }}" class="d-block w-100 img-fluid" alt="Image 4">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('assets/images/DSC_4999.jpg') }}" class="d-block w-100 img-fluid" alt="Image 4">
              </div>
          </div>

      
          <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  
  <footer style="background-color: #0A5098; padding: 40px 0; margin-top: 6%;">
    <div class="container">
      <div class="row gy-4">
        
        <div class="col-lg-2 col-md-6 col-sm-12 footer">
          <h1 class="fw-bold"><span style="color: #E21C1C;">Tech</span>Pro</h1>
          <p class="fs-6 fw-light mb-2 follow">Follow Us On</p>
          <div class="d-flex">
            <a href="http://wa.me/2348086478810" class="me-3 " target="_blank"><i class="bi bi-whatsapp fs-4 follow"></i></a>
            <a href="https://www.facebook.com/profile.php?id=61566747027176&mibextid=LQQJ4d" target="blank" class="me-3 "><i class="bi bi-facebook fs-4 follow"></i></a>
            <a href="https://x.com/techprongr?s=21" target="_blank"><i class="bi bi-twitter fs-4 follow"></i></a>
          </div>
  
        </div>
        
        
        <div class="col-lg-2 col-md-6 col-sm-12 footer">
          <h4 class="fw-bold follow">Courses</h4> 
          <ul class="list-unstyled">
            <li><a class="fs-6 fw-light text" href="{{ route('application.form') }}" >Web Development</a></li>
            <li><a class="fs-6 fw-light text" href="{{ route('application.form') }}">Data analysis</a></li>
            <li><a class="fs-6 fw-light text" href="{{ route('application.form') }}">Cyber Security</a></li>
            <li><a class="fs-6 fw-light text" href="{{ route('application.form') }}">UI/UX Design</a></li>
            <li><a class="fs-6 fw-light text" href="{{ route('application.form') }}">Graphic Design</a></li>
            <li><a class="fs-6 fw-light text" href="{{ route('application.form') }}">Full Stack Development</a></li>
          </ul>
        </div>
        
  
        <div class="col-lg-2 col-md-6 col-sm-12 footer">
          <h4 class="fw-bold follow">Links</h4>
          <ul class="list-unstyled">
            <li><a class="fs-6 fw-light  text" href="{{ url('/gaming') }}">Gaming</a></li>
            <li><a class="fs-6 fw-light text" href="{{ url('/events') }}">Events</a></li>
            <li><a class="fs-6 fw-light  text" href="{{ route('tech-a-teen') }}">Tech-A-Teen</a></li>
            <li><a class="fs-6 fw-light text" href="#">Meetups</a></li>
            <li><a class="fs-6 fw-light  text" href="{{ url('/internship') }}">Internship</a></li>
            <li><a class="fs-6 fw-light text" href="{{ url('/hostel') }}">Hostel Facilities</a></li>
            
          </ul>
        </div>
        
        <div class="col-lg-3 col-md-6 col-sm-12 footer">
          <h4 class="fw-bold follow">Legal</h4>
          <ul class="list-unstyled ">
            <li><a class="fs-6 fw-light  text" href="{{ route('terms') }}">Terms Of Use</a></li>
            <li><a class="fs-6 fw-light text" href="{{ route('privacy') }}">Privacy Policy</a></li>
            <li><a class="fs-6 fw-light text" href="{{ route('legal') }}">Legal Notice</a></li>
          </ul>
        </div>
        

        <div class="col-lg-3 col-md-6 col-sm-12 footer">
          <h4 class="fw-bold follow">Contact</h4>
          <p class="fs-6 fw-light text">103 Gbodofon Street, Ibadan Road, Osogbo.</p>
          <p class="fs-6 fw-light text">Phone: +2348086478810</p>
          <p class="fs-6 fw-light text">E-mail: contact@techprong.com</p>
        </div>
      </div>
    </div>
  </footer> 

 
  
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

<script>
  var myCarousel = new bootstrap.Carousel(document.getElementById('galleryCarousel'), {
    interval: 4000, 
    ride: 'carousel'
  });

  </script>

</body>
</html>
