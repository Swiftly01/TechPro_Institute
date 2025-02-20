<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Techpro Institute Nigeria</title>
  <link rel="icon" href="{{ asset('assets/images/techpro_img.png') }}" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  {{-- <link rel="stylesheet" href="{{ asset('assets/styles/index.css') }}"> --}}
  <link rel="stylesheet" href="{{ asset('assets/styles/nav.css') }}">

  <style>
 * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
    line-height: 1.6;
    color: #333;
    background-color: #f5f5f5;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    width: 100%;
}

/* Hero Section */
.hero {
    background-image: linear-gradient(rgba(30, 58, 138, 0.95), rgba(30, 58, 138, 0.9)),
                      url('https://images.unsplash.com/photo-1542744173-8e7e53415bb0?auto=format&fit=crop&q=80');
    background-size: cover;
    background-position: center;
    color: white;
    padding: 64px 0;
}

.breadcrumb {
    font-size: 0.875rem;
    color: #93c5fd;
    margin-bottom: 16px;
}

.breadcrumb span:not(:last-child) {
    margin-right: 8px;
}

.hero h1 {
    font-size: clamp(1.75rem, 4vw, 2.5rem);
    line-height: 1.2;
    max-width: 800px;
}

/* Main Content */
.main-content {
    padding: 48px 0;
}

.content-grid {
    display: grid;
    grid-template-columns: 1fr 300px;
    gap: 32px;
}

/* Cards */
.card {
    background: white;
    border-radius: 12px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
    padding: clamp(20px, 4vw, 32px);
    margin-bottom: 24px;
}

.card h2 {
    color: #1e3a8a;
    font-size: clamp(1.25rem, 3vw, 1.75rem);
    margin-bottom: 20px;
    border-bottom: 2px solid #e5e7eb;
    padding-bottom: 12px;
}

/* Challenges */
.challenges-list {
    display: flex;
    flex-direction: column;
    gap: 24px;
}

.challenge-item h3 {
    color: #1e3a8a;
    font-size: clamp(1rem, 2vw, 1.25rem);
    margin-bottom: 8px;
}

.challenge-item p {
    color: #4b5563;
}

/* Solutions */
.solutions-list {
    display: flex;
    flex-direction: column;
    gap: 32px;
}

.solution-item {
    border-left: 4px solid #2563eb;
    padding-left: 20px;
}

.solution-item h3 {
    color: #1e3a8a;
    font-size: clamp(1rem, 2vw, 1.25rem);
    margin-bottom: 8px;
}

/* Results */
.results-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 24px;
}

.result-card {
    background: #f0f9ff;
    padding: 24px;
    border-radius: 8px;
    border: 1px solid #bfdbfe;
}

.result-header {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 12px;
}

.check-icon {
    color: #059669;
    font-size: 1.25rem;
}

.result-header h3 {
    color: #1e3a8a;
    font-size: clamp(1rem, 2vw, 1.125rem);
}

/* Sidebar */
.sidebar .card {
    position: sticky;
    top: 24px;
}

.project-info {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.info-item h4 {
    color: #6b7280;
    font-size: 0.875rem;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    margin-bottom: 4px;
}

.info-item p {
    color: #111827;
    font-size: 1rem;
}

/* Responsive Design */
@media (max-width: 1024px) {
    .content-grid {
        grid-template-columns: 1fr;
    }

    .sidebar .card {
        position: static;
    }
}

@media (max-width: 768px) {
    .hero {
        padding: 48px 0;
    }

    .results-grid {
        grid-template-columns: 1fr;
    }

    .card {
        padding: 24px;
    }
}

@media (max-width: 480px) {
    .container {
        padding: 0 16px;
    }

    .hero {
        padding: 32px 0;
    }

    .card {
        padding: 20px;
        margin-bottom: 16px;
    }

    .solution-item {
        padding-left: 16px;
    }
}

/* Print Styles */
@media print {
    .hero {
        background: none;
        color: #000;
        padding: 20px 0;
    }

    .card {
        break-inside: avoid;
        box-shadow: none;
        border: 1px solid #ddd;
    }

    .sidebar .card {
        position: static;
    }
}

  </style>
</head>

<body>

  <!-- Navigation Bar -->
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
  <body>
    <!-- Hero Section -->
    <header class="hero">
        <div class="container">
            <nav class="breadcrumb">
                <span>Home</span>
                <span>/</span>
                <span>NGO</span>
            </nav>
            <h1>Securing a $50,000 Community Grant for an NGO</h1>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container main-content">
        <div class="content-grid">
            <!-- Main Content Area -->
            <div class="main-area">
                <!-- Project Overview -->
                <section class="card">
                    <h2>Project Overview</h2>
                    <p>A nonprofit organization dedicated to serving underserved communities through various programs, including education and community outreach, struggled to navigate the grant application process. The NGO sought to secure a $50,000 community grant. TechPro Consulting partnered with the NGO to develop a compelling grant proposal that effectively communicated the organization's mission, project impact, and funding needs.</p>
                </section>

                <!-- Initial Challenges -->
                <section class="card">
                    <h2>Initial Challenges</h2>
                    <div class="challenges-list">
                        <div class="challenge-item">
                            <h3>Limited Grant Writing Experience</h3>
                            <p>The NGO's team lacked expertise in crafting persuasive grant proposals that meet specific funding requirements and highlight their impact.</p>
                        </div>
                        <div class="challenge-item">
                            <h3>Need for Comprehensive Data</h3>
                            <p>The organization needed assistance in gathering relevant data and statistics to support their funding request and demonstrate the community need.</p>
                        </div>
                        <div class="challenge-item">
                            <h3>Inadequate Project Planning</h3>
                            <p>The NGO required help in defining clear project objectives, timelines, and expected outcomes to strengthen their proposal.</p>
                        </div>
                    </div>
                </section>

                <!-- Solutions -->
                <section class="card">
                    <h2>TechPro Consulting's Solutions</h2>
                    <div class="solutions-list">
                        <div class="solution-item">
                            <h3>Grant Proposal Development</h3>
                            <p>Our team collaborated with the NGO to create a detailed grant proposal, focusing on the organization's mission, target population, and the specific project that would be funded via the community grant.</p>
                        </div>
                        <div class="solution-item">
                            <h3>Data Collection and Analysis</h3>
                            <p>We assisted the NGO in gathering quantitative and qualitative data to support the grant application. This included community surveys, demographic information, and case studies demonstrating the need for funding.</p>
                        </div>
                        <div class="solution-item">
                            <h3>Project Planning and Timeline Creation</h3>
                            <p>TechPro Consulting helped outline clear project objectives, activities, and measurable outcomes. We developed a comprehensive timeline to show the grantors how the funds would be utilized effectively.</p>
                        </div>
                    </div>
                </section>

                <!-- Results -->
                <section class="card">
                    <h2>Results</h2>
                    <div class="results-grid">
                        <div class="result-card">
                            <div class="result-header">
                                <span class="check-icon">✓</span>
                                <h3>Successful Grant Award</h3>
                            </div>
                            <p>The grant proposal secured the $50,000 community grant.</p>
                        </div>
                        <div class="result-card">
                            <div class="result-header">
                                <span class="check-icon">✓</span>
                                <h3>Enhanced Capacity</h3>
                            </div>
                            <p>The NGO gained valuable insights and experience in grant writing.</p>
                        </div>
                        <div class="result-card">
                            <div class="result-header">
                                <span class="check-icon">✓</span>
                                <h3>Increased Community Impact</h3>
                            </div>
                            <p>The funding allowed the client to expand its programs and reach more community members.</p>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Sidebar -->
            <aside class="sidebar">
                <div class="card">
                    <h3>Project Information</h3>
                    <div class="project-info">
                        <div class="info-item">
                            <h4>Client</h4>
                            <p>NGO</p>
                        </div>
                        <div class="info-item">
                            <h4>Industry</h4>
                            <p>Nonprofit / Community Services</p>
                        </div>
                        <div class="info-item">
                            <h4>Project Type</h4>
                            <p>Grant Writing and Application Support</p>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </main>





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