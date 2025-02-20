<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechPro Consulting Case Study</title>
    <link rel="stylesheet" href="styles.css">
    <title>Techpro Institute Nigeria</title>
  <link rel="icon" href="{{ asset('assets/images/techpro_img.png') }}" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- <link rel="stylesheet" href="{{ asset('assets/styles/courses.css') }}"> -->
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
    overflow-x: hidden;
}

.container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

/* Hero Section */
.hero {
    background-image: linear-gradient(rgba(17, 24, 39, 0.9), rgba(17, 24, 39, 0.9)),
                      url('https://images.unsplash.com/photo-1497366216548-37526070297c?auto=format&fit=crop&q=80');
    background-size: cover;
    background-position: center;
    color: white;
    padding: 48px 0;
    width: 100%;
}

.hero-content {
    max-width: 800px;
    padding: 0 15px;
}

.company-name {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 16px;
}

.company-name h2 {
    font-size: clamp(1rem, 2vw, 1.25rem);
}

.hero h1 {
    font-size: clamp(1.5rem, 4vw, 2.5rem);
    line-height: 1.2;
    margin-bottom: 24px;
    word-wrap: break-word;
}

.breadcrumb {
    color: #93c5fd;
    font-size: 0.875rem;
}

.breadcrumb span:not(:last-child) {
    margin-right: 8px;
}

/* Main Content */
.main-content {
    padding: 32px 0;
    width: 100%;
}

.content-grid {
    display: grid;
    grid-template-columns: minmax(0, 1fr) minmax(250px, 300px);
    gap: 32px;
    width: 100%;
}

/* Cards */
.card {
    background: white;
    border-radius: 8px;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    padding: clamp(16px, 4vw, 32px);
    margin-bottom: 24px;
    width: 100%;
}

.card h2 {
    color: #1e3a8a;
    font-size: clamp(1.25rem, 3vw, 1.5rem);
    margin-bottom: 24px;
}

/* Problem Items */
.problem-list {
    display: flex;
    flex-direction: column;
    gap: 24px;
    width: 100%;
}

.problem-item {
    display: flex;
    gap: 16px;
    width: 100%;
}

.icon-box {
    background: #dbeafe;
    color: #2563eb;
    padding: 12px;
    border-radius: 8px;
    font-size: 1.5rem;
    height: fit-content;
    flex-shrink: 0;
}

.problem-content {
    flex: 1;
}

.problem-content h3 {
    font-size: clamp(1rem, 2vw, 1.125rem);
    margin-bottom: 8px;
}

.problem-content p {
    font-size: clamp(0.875rem, 1.5vw, 1rem);
}

/* Solutions */
.solutions-list {
    display: flex;
    flex-direction: column;
    gap: 32px;
    width: 100%;
}

.solution-item {
    border-left: 4px solid #2563eb;
    padding-left: 24px;
}

.solution-item h3 {
    font-size: clamp(1rem, 2vw, 1.125rem);
    margin-bottom: 8px;
}

.solution-item p {
    font-size: clamp(0.875rem, 1.5vw, 1rem);
}

/* Results */
.results-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: clamp(16px, 3vw, 24px);
    width: 100%;
}

.result-card {
    background: #eff6ff;
    padding: clamp(16px, 3vw, 24px);
    border-radius: 8px;
    height: 100%;
}

.result-header {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 16px;
}

.result-header h3 {
    font-size: clamp(1rem, 2vw, 1.125rem);
}

.check-icon {
    color: #059669;
    font-size: 1.5rem;
    flex-shrink: 0;
}

/* Sidebar */
.sidebar .card {
    position: sticky;
    top: 16px;
}

.project-info {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.info-item h4 {
    color: #6b7280;
    font-size: 0.875rem;
    margin-bottom: 4px;
}

.info-item p {
    font-size: clamp(0.875rem, 1.5vw, 1rem);
}

.info-item ul {
    list-style-position: inside;
    margin-top: 8px;
}

.info-item li {
    margin-bottom: 8px;
    font-size: clamp(0.875rem, 1.5vw, 1rem);
}

/* Enhanced Responsive Design */
@media (max-width: 1200px) {
    .container {
        padding: 0 16px;
    }
}

@media (max-width: 1024px) {
    .content-grid {
        grid-template-columns: 1fr;
    }

    .sidebar .card {
        position: static;
    }

    .hero-content {
        padding: 0;
    }
}

@media (max-width: 768px) {
    .hero {
        padding: 32px 0;
    }

    .problem-item {
        flex-direction: column;
    }

    .icon-box {
        width: fit-content;
    }

    .results-grid {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 480px) {
    .container {
        padding: 0 12px;
    }

    .card {
        padding: 16px;
        margin-bottom: 16px;
    }

    .hero h1 {
        margin-bottom: 16px;
    }

    .problem-list,
    .solutions-list {
        gap: 16px;
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
    <!-- Hero Section -->
    <header class="hero">
        <div class="container">
            <div class="hero-content">
                
                <h1>Case Study: How TechPro Consulting Transformed Digital Marketing Strategies for Clients</h1>
                <nav class="breadcrumb">
                    <span>Home</span>
                    <span>/</span>
                    <span>Various Industries</span>
                </nav>
            </div>
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
                    <p>
                        TechPro Consulting helps businesses optimize their digital marketing efforts to drive growth, enhance brand 
                        visibility, and increase customer engagement. Many clients approached us struggling with underperforming 
                        digital strategies, limited online visibility, and ineffective audience targeting. Our comprehensive case-driven 
                        digital marketing solutions helped them overcome these challenges and achieve measurable success.
                    </p>
                </section>

                <!-- Client's Problems -->
                <section class="card">
                    <h2>Client's Initial Business Problems</h2>
                    <div class="problem-list">
                        <div class="problem-item">
                            <div class="icon-box">🎯</div>
                            <div class="problem-content">
                                <h3>Low Online Visibility</h3>
                                <p>Clients struggled to rank on search engines and lacked a strong digital presence, making it hard for their target audience to discover their products and services.</p>
                            </div>
                        </div>

                        <div class="problem-item">
                            <div class="icon-box">📊</div>
                            <div class="problem-content">
                                <h3>Ineffective Marketing Campaigns</h3>
                                <p>Poor ROI on PPC campaigns and social media advertising, leading to wasted budget and low conversion rates.</p>
                            </div>
                        </div>

                        <div class="problem-item">
                            <div class="icon-box">👥</div>
                            <div class="problem-content">
                                <h3>Weak Social Media Engagement</h3>
                                <p>Clients lacked a coherent social media strategy, resulting in low follower engagement and minimal brand awareness across platforms.</p>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Solutions Section -->
                <section class="card">
                    <h2>TechPro Consulting's Digital Marketing Solutions</h2>
                    <div class="solutions-list">
                        <div class="solution-item">
                            <h3>SEO and Website Optimization</h3>
                            <p>Implemented comprehensive on-page SEO improvements, technical optimizations, and user experience enhancements to improve search rankings and visibility.</p>
                        </div>

                        <div class="solution-item">
                            <h3>Targeted PPC Campaigns</h3>
                            <p>Created and managed highly-targeted PPC campaigns across Google Ads and social media platforms, optimizing ad copy and implementing A/B testing.</p>
                        </div>

                        <div class="solution-item">
                            <h3>Content Marketing Strategy</h3>
                            <p>Developed comprehensive content strategies with blog posts, infographics, videos, and case studies to nurture leads and build customer loyalty.</p>
                        </div>
                    </div>
                </section>

                <!-- Results Section -->
                <section class="card">
                    <h2>Results Delivered by TechPro Consulting</h2>
                    <div class="results-grid">
                        <div class="result-card">
                            <div class="result-header">
                                <span class="check-icon">✓</span>
                                <h3>Improved Search Rankings</h3>
                            </div>
                            <p>55% increase in organic traffic with enhanced keyword rankings</p>
                        </div>

                        <div class="result-card">
                            <div class="result-header">
                                <span class="check-icon">✓</span>
                                <h3>Higher Conversion Rates</h3>
                            </div>
                            <p>35% improvement in conversion rates across campaigns</p>
                        </div>

                        <div class="result-card">
                            <div class="result-header">
                                <span class="check-icon">✓</span>
                                <h3>Enhanced Social Media</h3>
                            </div>
                            <p>150% increase in social media engagement</p>
                        </div>

                        <div class="result-card">
                            <div class="result-header">
                                <span class="check-icon">✓</span>
                                <h3>Lead Generation</h3>
                            </div>
                            <p>200% boost in qualified lead generation</p>
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
                            <p>Various Industries</p>
                        </div>
                        <div class="info-item">
                            <h4>Industry</h4>
                            <p>Digital Marketing</p>
                        </div>
                        <div class="info-item">
                            <h4>Services Provided</h4>
                            <ul>
                                <li>Digital Marketing Strategy</li>
                                <li>SEO Optimization</li>
                                <li>Social Media Marketing</li>
                                <li>Content Strategy</li>
                                <li>PPC Campaign Management</li>
                            </ul>
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