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
                <li class="nav-item me-5">
                    <a class="nav-link" href="{{ url('/projects') }}">Projects</a>
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