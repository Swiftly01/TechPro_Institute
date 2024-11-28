<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Techpro Institute Nigeria</title>
  <link rel="icon" href="{{ asset('assets/images/techpro_img.png') }}" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="{{ asset('assets/styles/services.css') }}">
  
  
  <style>
    
@media screen and (max-width:483px) {

.text-danger a {
  font-size: 20px;
}
}

  </style>
</head>
<body>

  <!-- Navigation Bar -->
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



 <div  class="container">
  <div  class="row main">
    <div class="col">
      <h1 class="text-danger"><a class=" text-danger " href="{{ url('/') }}">Home/</a><a class=" text-danger " href="{{ url('/services') }}">Services</a></h1>
    </div>
  </div>
 </div> 


 <div  class="container mt-1">
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-5">
    
    <div class="col">
      <div class="card shadow-lg rounded-lg border card-rad">
        <div class="container text-center mt-5">
          <img width="65%" src="{{ asset('assets/images/image 22.png') }}" class="" alt="...">
          <div>
            <p style="font-size: 25px; color: #355B7D; font-weight: bold;">IT Consultancy</p>
            <p style="font-size: 17px;">Our IT Consultancy Services provide expert guidance to help business optimize their technology infrastructure and digital strategies.</p>
          </div>
          <div class="mb-3">
            <a href="{{ url('/consultancy') }}" class="learn-more">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  
    <div class="col">
      <div class="card shadow-lg rounded-lg border card-rad">
        <div class="container text-center">
          <img width="60%" src="{{ asset('assets/images/image 23.png') }}" class="" alt="...">
          <div>
            <p style="font-size: 25px; color: #355B7D; font-weight: bold;">Incubation</p>
            <p style="font-size: 17px;">Our IT Consultancy Services provide expert guidance to help business optimize their technology infrastructure and digital strategies.</p>
          </div>
          <div class="mb-3">
            <a href="{{ url('/incubation') }}" class="learn-more">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  
    <div class="col">
      <div class="card shadow-lg rounded-lg border card-rad">
        <div class="container text-center mt-4">
          <img width="55%" src="{{ asset('assets/images/image 24.png') }}" class="" alt="...">
          <div>
            <p style="font-size: 25px; color: #355B7D; font-weight: bold;">Mentorship</p>
            <p style="font-size: 17px;">Our IT Consultancy Services provide expert guidance to help business optimize their technology infrastructure and digital strategies.</p>
          </div>
          <div class="mb-3">
            <a href="{{ url('mentor') }}" class="learn-more">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  
    <div class="col">
      <div class="card shadow-lg rounded-lg border card-rad">
        <div class="container text-center mt-5">
          <img width="45%" src="{{ asset('assets/images/image.png') }}" class="" alt="...">
          <div>
            <p style="font-size: 25px; color: #355B7D; font-weight: bold;">Internship</p>
            <p style="font-size: 17px;">Our IT Consultancy Services provide expert guidance to help business optimize their technology infrastructure and digital strategies.</p>
          </div>
          <div class="mb-3">
            <a href="{{ url('/internship') }}" class="learn-more">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  
    <div class="col">
      <div class="card shadow-lg rounded-lg border card-rad">
        <div class="container text-center mt-5">
          <img width="58%" src="{{ asset('assets/images/image (2).png') }}" class="" alt="...">
          <div>
            <p style="font-size: 25px; color: #355B7D; font-weight: bold;">Hostel Facilities</p>
            <p style="font-size: 17px;">Our IT Consultancy Services provide expert guidance to help business optimize their technology infrastructure and digital strategies.</p>
          </div>
          <div class="mb-3">
            <a href="{{ url('/hostel') }}" class="learn-more">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  
    <div class="col">
      <div class="card shadow-lg rounded-lg border card-rad">
        <div class="container text-center mt-5">
          <img width="49%" src="{{ asset('assets/images/image (3).png') }}" class="" alt="...">
          <div>
            <p style="font-size: 25px; color: #355B7D; font-weight: bold;">Workspace</p>
            <p style="font-size: 17px;">Our IT Consultancy Services provide expert guidance to help business optimize their technology infrastructure and digital strategies.</p>
          </div>
          <div class="mb-3">
            <a href="{{ url('/working') }}" class="learn-more">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
 </div>

  



   
   


 <footer style="background-color: #0A5098; padding: 40px 0; margin-top: 6%;">
  <div class="container">
    <div class="row gy-4">
      <!-- TechPro and Social Media Section -->
      <div class="col-lg-2 col-md-6 col-sm-12 footer">
        <h1 class="fw-bold"><span style="color: #E21C1C;">Tech</span>Pro</h1>
        <p class="fs-6 fw-light mb-2 follow">Follow Us On</p>
        <div class="d-flex">
          <a href="http://wa.me/2348086478810" class="me-3 " target="_blank"><i class="bi bi-whatsapp fs-4 follow"></i></a>
          <a href="https://www.facebook.com/profile.php?id=61566747027176&mibextid=LQQJ4d" target="blank" class="me-3 "><i class="bi bi-facebook fs-4 follow"></i></a>
          <a href="https://x.com/techprongr?s=21" target="_blank"><i class="bi bi-twitter fs-4 follow"></i></a>
        </div>

      </div>
      
      <!-- Courses Section -->
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
      
      <!-- Resources Section -->
      <div class="col-lg-2 col-md-6 col-sm-12 footer">
        <h4 class="fw-bold follow">Links</h4>
        <ul class="list-unstyled">
          <li><a class="fs-6 fw-light  text" href="{{ url('/gaming') }}">Gaming</a></li>
          <li><a class="fs-6 fw-light text" href="{{ url('/events') }}">Events</a></li>
          <li><a class="fs-6 fw-light  text" href="{{ route('tech-a-teen') }}">Tech-A-Teen</a></li>
          <li><a class="fs-6 fw-light text" href="#">Meetups</a></li>
          <li><a class="fs-6 fw-light  text" href="{{ url('/internship') }}">Internship</a></li>
          <li><a class="fs-6 fw-light text" href="{{ url('/hostel') }}">Hostel Facilities</a></li>
          
          <!-- <li><a class="fs-6 fw-light text" href="#">TechPro Consultancy</a></li>
          <li><a class="fs-6 fw-light text" href="#">Frika Xchange</a></li>
          <li><a class="fs-6 fw-light text" href="#">Osun State Government</a></li> -->
        </ul>
      </div>
      
      <!-- Legal Section -->
      <div class="col-lg-3 col-md-6 col-sm-12 footer">
        <h4 class="fw-bold follow">Legal</h4>
        <ul class="list-unstyled ">
          <li><a class="fs-6 fw-light  text" href="{{ route('terms') }}">Terms Of Use</a></li>
          <li><a class="fs-6 fw-light text" href="{{ route('privacy') }}">Privacy Policy</a></li>
          <li><a class="fs-6 fw-light text" href="{{ route('legal') }}">Legal Notice</a></li>
        </ul>
      </div>
      
      <!-- Contact Section -->
      <div class="col-lg-3 col-md-6 col-sm-12 footer">
        <h4 class="fw-bold follow">Contact</h4>
        <p class="fs-6 fw-light text">103 Gbodofon Street, Ibadan Road, Osogbo.</p>
        <p class="fs-6 fw-light text">Phone: +2348086478810</p>
        <p class="fs-6 fw-light text">E-mail: contact@techprong.com</p>
      </div>
    </div>
  </div>
</footer>



 
  
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script src="{{ asset('assets/scripts/animation.js') }}"></script>

</body>
</html>