<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link rel="icon" href="{{ asset('assets/images/techpro_img.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- <link rel="stylesheet" href="{{ asset('assets/styles/courses.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('assets/styles/nav.css') }}">
    <style>
      :root {
    --primary-color: #1e3a8a;
    --text-color: #333;
    --light-blue: #e5edff;
    --transition: all 0.3s ease;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    line-height: 1.6;
    color: var(--text-color);
    overflow-x: hidden;
}

.hero {
    background: linear-gradient(rgba(30, 58, 138, 0.9), rgba(30, 58, 138, 0.9)),
                url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80');
    background-size: cover;
    background-position: center;
    color: white;
    padding: clamp(2rem, 5vw, 4rem) clamp(1rem, 3vw, 2rem);
    position: relative;
    width: 100%;
}

.breadcrumb {
    margin-bottom: 2rem;
}

.breadcrumb a {
    color: white;
    text-decoration: none;
    opacity: 0.8;
    transition: var(--transition);
}

.breadcrumb a:hover {
    opacity: 1;
}

.breadcrumb span {
    margin: 0 0.5rem;
    opacity: 0.8;
}

.hero h1 {
    font-size: clamp(2rem, 5vw, 3rem);
    font-weight: 700;
}

.projects-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: clamp(1rem, 3vw, 2rem);
    padding: clamp(2rem, 5vw, 4rem) clamp(1rem, 3vw, 2rem);
    max-width: 1400px;
    margin: 0 auto;
    width: 100%;
}

.project-card {
    background: white;
    border-radius: 8px;
    padding: clamp(1.5rem, 3vw, 2rem);
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: var(--transition);
    position: relative;
    overflow: hidden;
    width: 100%;
    display: flex;
    flex-direction: column;
}

.project-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.15);
}

.project-number {
    font-size: clamp(2.5rem, 5vw, 4rem);
    font-weight: 700;
    color: var(--light-blue);
    position: absolute;
    top: 1rem;
    right: 1rem;
    opacity: 0.5;
    z-index: 0;
}

.project-card h2 {
    font-size: clamp(1.25rem, 2vw, 1.5rem);
    margin-bottom: 1rem;
    position: relative;
    z-index: 1;
}

.project-card p {
    color: #666;
    margin-bottom: 1.5rem;
    position: relative;
    z-index: 1;
    font-size: clamp(0.9rem, 1.2vw, 1rem);
}

.read-more {
    display: inline-flex;
    align-items: center;
    color: var(--primary-color);
    text-decoration: none;
    font-weight: 600;
    transition: var(--transition);
    position: relative;
    z-index: 1;
    margin-top: auto;
}

.read-more:hover {
    color: #2563eb;
}

.arrow {
    margin-left: 0.5rem;
    transition: var(--transition);
}

.read-more:hover .arrow {
    transform: translateX(5px);
}

/* Footer responsive styles */
footer {
    width: 100%;
}

footer .row {
    justify-content: space-between;
}

footer .col-lg-2,
footer .col-lg-3 {
    margin-bottom: 1rem;
}

footer h4,
footer h1 {
    margin-bottom: 1rem;
}

footer .follow {
    /* color: white; */
}

footer .text {
    /* color: rgba(255, 255, 255, 0.8); */
    text-decoration: none;
    transition: var(--transition);
    display: block;
    margin-bottom: 0.5rem;
}

footer .text:hover {
    color: white;
    
}

/* Navbar responsive styles */
.navbar-brand img {
    max-width: 100%;
    height: auto; 
}

/* .register {
    background-color: var(--primary-color);
    color: white;
    border: none;
    padding: 0.5rem 1.5rem;
    border-radius: 4px;
    font-weight: 600;
    transition: var(--transition);
} */

.register:hover {
    background-color: #2563eb;
}

/* Media Queries */
@media (max-width: 991px) {
    /* .navbar-nav {
        margin-top: 1rem;
    } */
    
    /* .nav-item {
        margin-bottom: 0.5rem;
    } */
}

@media (max-width: 768px) {
    .projects-grid {
        grid-template-columns: 1fr;
    }
    
    footer .row {
        text-align: center;
    }
    
    footer .d-flex {
        justify-content: center;
    }
}

@media (max-width: 480px) {
    .project-card {
        padding: 1.25rem;
    }
    
    .project-number {
        font-size: 2.5rem;
        top: 0.5rem;
        right: 0.5rem;
    }
    
    footer {
        padding: 30px 0;
    }
}

 
    </style>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand ps-4" href="{{ url('/') }}">
        <img width="80px" height="50px" class="img-fluid" src="{{ asset('assets/images/techpro_img.png') }}"
          alt="Techpro Logo">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
    <header class="hero">
        <nav class="breadcrumb">
            
        </nav>
        <h1>Projects</h1>
    </header>

    <main class="projects-grid">
        <article class="project-card">
            <div class="project-number">01</div>
            <h2>FRIKA XCHANGE</h2>
            <p>Frika Xchange, a growing currency exchange platform, faced significant challenges with their existing application....</p>
            <a href="{{url('/frika')}}" class="read-more">
                READ MORE
                <svg class="arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
            </a>
        </article>

        <article class="project-card">
            <div class="project-number">02</div>
            <h2>DIGITAL SHORTLET</h2>
            <p>Digital Shortlet, a provider of premium short-term rental apartments, wanted to improve their booking platform to offer a more...</p>
            <a href="{{url('/digital')}}" class="read-more">
                READ MORE
                <svg class="arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
            </a>
        </article>

        <article class="project-card">
            <div class="project-number">03</div>
            <h2>SPORTSGANNER</h2>
            <p>SportsGanner, an emerging online platform specializing in sports equipment, sought to enhance its digital presence and optimize...</p>
            <a href="{{url('/sportsganner')}}" class="read-more">
                READ MORE
                <svg class="arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
            </a>
        </article>

        <article class="project-card">
            <div class="project-number">04</div>
            <h2>VARIOUS INDUSTRIES</h2>
            <p>TechPro Consulting helps businesses optimize their digital marketing efforts to drive growth, enhance brand visibility...</p>
            <a href="{{url('/various')}}" class="read-more">
                READ MORE
                <svg class="arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
            </a>
        </article>

        <article class="project-card">
            <div class="project-number">05</div>
            <h2>NGO</h2>
            <p>A nonprofit organization dedicated to serving underserved communities through various programs, including...</p>
            <a href="{{url('/ngo')}}" class="read-more">
                READ MORE
                <svg class="arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
            </a>
        </article>
    </main>

    <script type="module" src="/script.js"></script>


    <footer style="background-color: #0A5098; padding: 40px 0; margin-top: 6%;">
    <div class="container">
      <div class="row gy-4">
        <!-- TechPro and Social Media Section -->
        <div class="col-lg-2 col-md-6 col-sm-12 footer">
          <h1 class="fw-bold"><span style="color: #E21C1C;">Tech</span>Pro</h1>
          <p class="fs-6 fw-light mb-2 follow">Follow Us On</p>
          <div class="d-flex">
            <a href="http://wa.me/2348086478810" class="me-3 " target="_blank"><i
                class="bi bi-whatsapp fs-4 follow"></i></a>
            <a href="https://www.facebook.com/profile.php?id=61566747027176&mibextid=LQQJ4d" target="blank"
              class="me-3 "><i class="bi bi-facebook fs-4 follow"></i></a>
            <a href="https://x.com/techprongr?s=21" target="_blank"><i class="bi bi-twitter fs-4 follow"></i></a>
          </div>

        </div>

        <!-- Courses Section -->
        <div class="col-lg-2 col-md-6 col-sm-12 footer">
          <h4 class="fw-bold follow">Courses</h4>
          <ul class="list-unstyled">
            <li><a class="fs-6 fw-light text" href="{{ route('application.form') }}">Web Development</a></li>
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

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
  </script>
</body>
</html>
