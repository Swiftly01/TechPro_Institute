<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SportsGanner Case Study</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Techpro Institute Nigeria</title>
  <link rel="icon" href="{{ asset('assets/images/techpro_img.png') }}" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
 
  {{-- <link rel="stylesheet" href="{{ asset('assets/styles/index.css') }}"> --}}
  <link rel="stylesheet" href="{{ asset('assets/styles/nav.css') }}">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Inter', sans-serif;
  line-height: 1.5;
  color: #1a1a1a;
  background-color: #f8fafc;
}

.min-h-screen {
  min-height: 100vh;
}

.container {
  max-width: 1280px;
  margin: 0 auto;
  padding: 0 2rem;
}

/* Navigation */
.nav-bar {
  background-color: #1e3a8a;
  padding: 1rem 0;
}

.nav-content {
  display: flex;
  align-items: center;
  gap: 2rem;
}

.logo {
  color: white;
  font-weight: 700;
  text-decoration: none;
  font-size: 1.25rem;
}

.nav-link {
  color: rgba(255, 255, 255, 0.8);
  text-decoration: none;
  font-weight: 500;
  transition: color 0.2s ease;
}

.nav-link:hover {
  color: white;
}

/* Header */
.header {
  background: linear-gradient(to right, #1e3a8a, #1e40af);
  position: relative;
  overflow: hidden;
}

.header::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><rect fill="%23ffffff" fill-opacity="0.05" width="100" height="100"/><path d="M0 0l100 100M100 0L0 100" stroke="%23ffffff" stroke-opacity="0.1" stroke-width="0.5"/></svg>');
  background-size: 20px 20px;
  opacity: 0.5;
}

.header-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 3rem 0;
  position: relative;
  z-index: 1;
}

.header-title {
  font-size: 2.5rem;
  font-weight: 800;
  color: white;
  text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  letter-spacing: -0.025em;
}

.case-study-badge {
  background-color: rgba(255, 255, 255, 0.9);
  color: #1e3a8a;
  padding: 0.75rem 1.5rem;
  border-radius: 9999px;
  font-size: 0.875rem;
  font-weight: 600;
  letter-spacing: 0.025em;
  text-transform: uppercase;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  transition: transform 0.2s ease;
}

.case-study-badge:hover {
  transform: translateY(-1px);
}

/* Main content */
.main-content {
  padding: 4rem 2rem;
}

.grid {
  display: grid;
  gap: 3rem;
}

@media (min-width: 1024px) {
  .grid {
    grid-template-columns: 2fr 1fr;
  }
}

/* Content area */
.content-area {
  display: flex;
  flex-direction: column;
  gap: 3rem;
}

.section {
  margin-bottom: 2rem;
  animation: fadeIn 0.6s ease-out;
}

@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(10px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.section-title {
  font-size: 2rem;
  font-weight: 800;
  color: #1e293b;
  margin-bottom: 1.5rem;
  letter-spacing: -0.025em;
  line-height: 1.2;
}

.section-subtitle {
  font-size: 1.5rem;
  font-weight: 700;
  color: #1e293b;
  margin-bottom: 1.5rem;
  letter-spacing: -0.025em;
}

.section-text {
  color: #475569;
  line-height: 1.75;
  font-size: 1.125rem;
}

/* Cards */
.card-grid {
  display: grid;
  gap: 1.5rem;
}

.card {
  background-color: white;
  padding: 1.5rem;
  border-radius: 1rem;
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
  display: flex;
  gap: 1.5rem;
  transition: transform 0.2s ease, box-shadow 0.2s ease;
  border: 1px solid rgba(0, 0, 0, 0.05);
}

.card:hover {
  transform: translateY(-2px);
  box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
}

.card-icon {
  flex-shrink: 0;
  background-color: #e0e7ff;
  padding: 1rem;
  border-radius: 0.75rem;
  color: #1e3a8a;
  height: fit-content;
}

.card-icon.success {
  background-color: #ecfdf5;
  color: #059669;
}

.card-content {
  flex: 1;
}

.card-title {
  font-weight: 700;
  color: #1e293b;
  margin-bottom: 0.5rem;
  font-size: 1.25rem;
}

.card-text {
  color: #64748b;
  font-size: 1rem;
  line-height: 1.625;
}

/* Sidebar */
.sidebar {
  position: relative;
}

@media (min-width: 1024px) {
  .sidebar-content {
    position: sticky;
    top: 2rem;
  }
}

.sidebar-content {
  background-color: white;
  padding: 2rem;
  border-radius: 1rem;
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
  border: 1px solid rgba(0, 0, 0, 0.05);
}

.sidebar-title {
  font-size: 1.25rem;
  font-weight: 700;
  color: #1e293b;
  margin-bottom: 1.5rem;
  letter-spacing: -0.025em;
}

.info-group {
  display: flex;
  flex-direction: column;
  gap: 1.5rem;
}

.info-item {
  display: flex;
  flex-direction: column;
  gap: 0.375rem;
  padding-bottom: 1.5rem;
  border-bottom: 1px solid #e2e8f0;
}

.info-item:last-child {
  border-bottom: none;
  padding-bottom: 0;
}

.info-label {
  font-size: 0.875rem;
  font-weight: 600;
  color: #64748b;
  text-transform: uppercase;
  letter-spacing: 0.05em;
}

.info-value {
  color: #1e293b;
  font-size: 1.125rem;
  font-weight: 500;
}

.view-project {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  color: white;
  text-decoration: none;
  font-weight: 600;
  margin-top: 1.5rem;
  background-color: #1e3a8a;
  padding: 0.75rem 1.5rem;
  border-radius: 0.75rem;
  transition: all 0.2s ease;
  box-shadow: 0 2px 4px rgba(30, 58, 138, 0.2);
}

.view-project:hover {
  background-color: #1e40af;
  transform: translateY(-1px);
  box-shadow: 0 4px 6px rgba(30, 58, 138, 0.3);
}

.view-project svg {
  transition: transform 0.2s ease;
}

.view-project:hover svg {
  transform: translate(2px, -2px);
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .container {
    padding: 0 1rem;
  }

  .header-content {
    padding: 2rem 0;
  }

  .header-title {
    font-size: 2rem;
  }

  .main-content {
    padding: 2rem 1rem;
  }

  .section-title {
    font-size: 1.75rem;
  }

  .section-subtitle {
    font-size: 1.25rem;
  }

  .card {
    flex-direction: column;
    gap: 1rem;
  }

  .card-icon {
    width: fit-content;
  }
}

/* Print styles */
@media print {
  .header {
    background: none;
    color: #000;
  }

  .nav-bar {
    display: none;
  }

  .header-title {
    color: #000;
  }

  .card,
  .sidebar-content {
    box-shadow: none;
    border: 1px solid #e2e8f0;
  }

  .view-project {
    display: none;
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
  <div class="min-h-screen">
    <!-- Header -->
    <header class="header">
      <nav class="nav-bar">
        <div class="container">
          <div class="nav-content">
            <a href="/" class="logo">SportsGanner</a>
            <a href="/" class="nav-link">Home</a>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="header-content">
          <h1 class="header-title">SportsGanner</h1>
          <div class="case-study-badge">Case Study</div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <main class="container main-content">
      <div class="grid">
        <!-- Main Content Area -->
        <div class="content-area">
          <section class="section">
            <h2 class="section-title">Revolutionizing the Sports Equipment E-commerce Experience</h2>
            <p class="section-text">
              SportsGanner, an innovative online platform specializing in sports equipment, sought to enhance its digital presence and optimize the online shopping experience for athletes and sports enthusiasts. The platform initially faced challenges with poor user interface design, inventory management, and customer engagement, which affected sales and customer satisfaction.
            </p>
          </section>

          <!-- Initial Problems -->
          <section class="section">
            <h3 class="section-subtitle">Initial Business Problems</h3>
            <div class="card-grid">
              <div class="card">
                <div class="card-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9h18v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V9Z"/><path d="M3 9V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v4"/><path d="M12 11v8"/><path d="M8 11v8"/><path d="M16 11v8"/></svg>
                </div>
                <div class="card-content">
                  <h4 class="card-title">Cluttered User Interface</h4>
                  <p class="card-text">The existing platform had a cluttered and unintuitive interface that made it difficult for users to find and purchase products.</p>
                </div>
              </div>

              <div class="card">
                <div class="card-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 12V8H6a2 2 0 0 1-2-2c0-1.1.9-2 2-2h12v4"/><path d="M4 6v12c0 1.1.9 2 2 2h14v-4"/><path d="M18 12a2 2 0 0 0-2 2c0 1.1.9 2 2 2h4v-4h-4z"/></svg>
                </div>
                <div class="card-content">
                  <h4 class="card-title">Inventory Management Issues</h4>
                  <p class="card-text">Managing stock levels and updating product listings manually led to inaccuracies and frequent stockouts, causing missed sales opportunities.</p>
                </div>
              </div>

              <div class="card">
                <div class="card-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                </div>
                <div class="card-content">
                  <h4 class="card-title">Low Customer Engagement</h4>
                  <p class="card-text">Limited features related to user engagement affected sales, recommendations, and overall customer satisfaction.</p>
                </div>
              </div>
            </div>
          </section>

          <!-- Results -->
          <section class="section">
            <h3 class="section-subtitle">Results After Project Delivery</h3>
            <div class="card-grid">
              <div class="card">
                <div class="card-icon success">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20V10"/><path d="M18 20V4"/><path d="M6 20v-4"/></svg>
                </div>
                <div class="card-content">
                  <h4 class="card-title">42% Increase in Sales</h4>
                  <p class="card-text">The improved user interface and streamlined shopping experience led to a significant increase in sales conversion rates.</p>
                </div>
              </div>

              <div class="card">
                <div class="card-icon success">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.38 3.46 16 2a4 4 0 0 1-8 0L3.62 3.46a2 2 0 0 0-1.34 2.23l.58 3.47a1 1 0 0 0 .99.84H6v10c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2V10h2.15a1 1 0 0 0 .99-.84l.58-3.47a2 2 0 0 0-1.34-2.23z"/></svg>
                </div>
                <div class="card-content">
                  <h4 class="card-title">60% Reduction in Stockouts</h4>
                  <p class="card-text">Automated inventory updates ensured stock levels were accurately reflected on the website.</p>
                </div>
              </div>

              <div class="card">
                <div class="card-icon success">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"/></svg>
                </div>
                <div class="card-content">
                  <h4 class="card-title">25% Increase in Engagement</h4>
                  <p class="card-text">Enhanced features and personalized recommendations resulted in higher user engagement.</p>
                </div>
              </div>
            </div>
          </section>
        </div>

        <!-- Sidebar -->
        <aside class="sidebar">
          <div class="sidebar-content">
            <h3 class="sidebar-title">Project Information</h3>
            <div class="info-group">
              <div class="info-item">
                <h4 class="info-label">Client</h4>
                <p class="info-value">SportsGanner</p>
              </div>
              <div class="info-item">
                <h4 class="info-label">Industry</h4>
                <p class="info-value">E-commerce (Sports Equipment)</p>
              </div>
              <div class="info-item">
                <h4 class="info-label">Project Type</h4>
                <p class="info-value">E-commerce Platform Development</p>
              </div>
              <a href="#" class="view-project">
                View Live Project
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="7" y1="17" x2="17" y2="7"></line><polyline points="7 7 17 7 17 17"></polyline></svg>
              </a>
            </div>
          </div>
        </aside>
      </div>
    </main>
  </div>
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