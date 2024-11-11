 <!-- Navigation Bar -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
      <a class="navbar-brand ps-4" href="{{ url('/') }}">
          <img width="80px" height="50px" class="img-fluid" src="{{asset('assets/images/techpro_img.png')}}" alt="Techpro Logo">
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
                <a class="nav-link" href="services.html">Services</a>
            </li>
             
              <li class="nav-item me-5">
                  <a class="nav-link" href="courses.html">Courses</a>
              </li>
              <li class="nav-item me-5">
                  <a class="nav-link" href="contact.html">Contact</a>
              </li>
              <li class="nav-item d-lg-none">
                  <a href="about-u.html" class="nav-link">
                      <button class="register">Register Now</button>
                  </a>
              </li>
          </ul>
      </div>

      <a href="about-u.html" class="me-4 d-none d-lg-block">
          <button class="register">Register Now</button>
      </a>
  </div>
</nav>