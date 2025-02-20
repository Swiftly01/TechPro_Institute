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
    --primary-color: #2563eb;
    --secondary-color: #1e40af;
    --accent-color: #3b82f6;
    --text-color: #1f2937;
    --text-light: #6b7280;
    --light-bg: #f3f4f6;
    --border-color: #e5e7eb;
    --success-color: #059669;
    --card-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
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
    background-color: var(--light-bg);
}

.page-header {
    background: white;
    padding: 1rem 2rem;
    border-bottom: 1px solid var(--border-color);
    margin-bottom: 2rem;
}

.breadcrumb {
    max-width: 1200px;
    margin: 0 auto;
    font-size: 0.875rem;
}

.breadcrumb a {
    color: var(--text-light);
    text-decoration: none;
    transition: var(--transition);
}

.breadcrumb a:hover {
    color: var(--primary-color);
}

.breadcrumb span {
    color: var(--text-light);
    margin: 0 0.5rem;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem 4rem;
}

.project-details {
    display: grid;
    grid-template-columns: 3fr 1fr;
    gap: 2.5rem;
}

.project-header {
    margin-bottom: 3rem;
}

.project-category {
    display: inline-block;
    background-color: var(--accent-color);
    color: white;
    padding: 0.25rem 1rem;
    border-radius: 1rem;
    font-size: 0.875rem;
    margin-bottom: 1rem;
}

h1 {
    font-size: 2.5rem;
    color: var(--text-color);
    line-height: 1.3;
    margin-bottom: 1.5rem;
    font-weight: 800;
}

.project-meta {
    display: flex;
    gap: 1.5rem;
    color: var(--text-light);
}

.meta-item {
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.section {
    background: white;
    border-radius: 8px;
    padding: 2rem;
    margin-bottom: 2rem;
    box-shadow: var(--card-shadow);
}

h2 {
    font-size: 1.5rem;
    color: var(--text-color);
    margin-bottom: 1.5rem;
    font-weight: 700;
}

.challenges-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 1.5rem;
    margin-top: 1.5rem;
}

.challenge-card {
    background: var(--light-bg);
    padding: 1.5rem;
    border-radius: 8px;
    transition: var(--transition);
}

.challenge-card:hover {
    transform: translateY(-2px);
    box-shadow: var(--card-shadow);
}

.challenge-icon {
    background: white;
    width: 48px;
    height: 48px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1rem;
    color: var(--primary-color);
}

.challenge-card h4 {
    color: var(--text-color);
    font-size: 1.125rem;
    margin-bottom: 0.75rem;
}

.solution-intro {
    font-size: 1.125rem;
    color: var(--text-light);
    margin-bottom: 2rem;
}

.solution-feature {
    margin-bottom: 2rem;
    padding-left: 1rem;
    border-left: 3px solid var(--accent-color);
}

.solution-feature h3 {
    color: var(--text-color);
    font-size: 1.25rem;
    margin-bottom: 1rem;
}

.project-sidebar {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.info-card, .stats-card {
    background: white;
    border-radius: 8px;
    padding: 1.5rem;
    box-shadow: var(--card-shadow);
}

.info-card h3, .stats-card h3 {
    font-size: 1.25rem;
    color: var(--text-color);
    margin-bottom: 1.5rem;
    padding-bottom: 0.75rem;
    border-bottom: 2px solid var(--border-color);
}

.info-item {
    margin-bottom: 1.25rem;
}

.info-item h4 {
    font-size: 0.875rem;
    color: var(--text-light);
    margin-bottom: 0.25rem;
    text-transform: uppercase;
    letter-spacing: 0.05em;
}

.info-item p {
    font-size: 1rem;
    color: var(--text-color);
}

.stat-grid {
    display: grid;
    gap: 1rem;
}

.stat-item {
    text-align: center;
    padding: 1rem;
    background: var(--light-bg);
    border-radius: 6px;
}

.stat-value {
    display: block;
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--success-color);
    margin-bottom: 0.25rem;
}

.stat-label {
    font-size: 0.875rem;
    color: var(--text-light);
}

/* Responsive Design */
@media (max-width: 1024px) {
    .container {
        padding: 0 1.5rem 3rem;
    }
    
    .project-details {
        gap: 2rem;
    }
    
    h1 {
        font-size: 2rem;
    }
}

@media (max-width: 768px) {
    .project-details {
        grid-template-columns: 1fr;
    }
    
    .section {
        padding: 1.5rem;
    }
    
    .challenges-grid {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    }
    
    h1 {
        font-size: 1.75rem;
    }
}

@media (max-width: 480px) {
    .container {
        padding: 0 1rem 2rem;
    }
    
    .page-header {
        padding: 1rem;
    }
    
    h1 {
        font-size: 1.5rem;
    }
    
    .project-meta {
        flex-direction: column;
        gap: 0.75rem;
    }
    
    .section {
        padding: 1.25rem;
    }
    
    .challenge-card {
        padding: 1.25rem;
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

    <header class="page-header">
        <nav class="breadcrumb">
            <a href="/">Home</a>
            <span>/</span>
            <a href="/projects">Projects</a>
            <span>/</span>
            <span>Frika Xchange</span>
        </nav>
    </header>

    <main class="container">
        <article class="project-details">
            <div class="project-content">
                <div class="project-header">
                    <span class="project-category">Case Study</span>
                    <h1>Frika Xchange – Transforming Currency Exchange with TechPro Consulting</h1>
                    <div class="project-meta">
                        <span class="meta-item">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            Completed in 2023
                        </span>
                        <span class="meta-item">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s-8-4.5-8-11.8A8 8 0 0 1 12 2a8 8 0 0 1 8 8.2c0 7.3-8 11.8-8 11.8z"/>
                                <circle cx="12" cy="10" r="3"/>
                            </svg>
                            Lagos, Nigeria
                        </span>
                    </div>
                </div>
                
                <section class="section overview-section">
                    <h2>Project Overview</h2>
                    <div class="section-content">
                        <p>Frika Xchange, a growing currency exchange platform, faced significant challenges with their existing application. Their legacy system struggled with usability, compliance, and regulatory requirements, such as restrictions over regulations, leading to user dissatisfaction and operational inefficiencies. To solve these issues, Frika Xchange partnered with TechPro Consulting to develop a new, user-friendly, and compliant application designed to enhance customer satisfaction, streamline processes, and ensure full regulatory adherence.</p>
                    </div>
                </section>

                <section class="section problems-section">
                    <h2>Initial Business Problems</h2>
                    <div class="challenges-grid">
                        <div class="challenge-card">
                            <div class="challenge-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" y1="8" x2="12" y2="12"></line>
                                    <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                </svg>
                            </div>
                            <h4>Outdated Technology</h4>
                            <p>Legacy systems that lacked modern features, impacting performance and scalability.</p>
                        </div>
                        <div class="challenge-card">
                            <div class="challenge-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                            </div>
                            <h4>Poor User Experience</h4>
                            <p>Users experienced difficulty navigating the platform, leading to low engagement.</p>
                        </div>
                        <div class="challenge-card">
                            <div class="challenge-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                </svg>
                            </div>
                            <h4>Regulatory Compliance</h4>
                            <p>Failed to meet key regulatory requirements, risking legal complications.</p>
                        </div>
                        <div class="challenge-card">
                            <div class="challenge-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                            </div>
                            <h4>Manual Processes</h4>
                            <p>Time-consuming manual updates and tracking led to operational delays.</p>
                        </div>
                    </div>
                </section>

                <section class="section solution-section">
                    <h2>Solution Provided by TechPro Consulting</h2>
                    <div class="solution-details">
                        <p class="solution-intro">TechPro Consulting worked closely with Frika Xchange to develop a robust, scalable, and fully compliant digital solution that addressed their specific challenges:</p>
                        
                        <div class="solution-feature">
                            <h3>User-friendly Application Design</h3>
                            <p>TechPro Consulting designed a modern, intuitive interface with a focus on improved user experience. The new platform features responsive design across devices, and an optimized transaction flow that minimized friction and improved engagement.</p>
                        </div>

                        <div class="solution-feature">
                            <h3>Regulatory Compliance Integration</h3>
                            <p>We implemented comprehensive regulatory compliance solutions, including AML (Anti-Money Laundering) and KYC (Know Your Customer) requirements. We incorporated secure identity verification, transaction monitoring, and audit trails to safeguard our data and maintain compliance.</p>
                        </div>
                    </div>
                </section>
            </div>

            <aside class="project-sidebar">
                <div class="info-card">
                    <h3>Project Information</h3>
                    <div class="info-content">
                        <div class="info-item">
                            <h4>Client</h4>
                            <p>Frika Xchange</p>
                        </div>
                        <div class="info-item">
                            <h4>Industry</h4>
                            <p>Financial Services/Currency Exchange and Remittances</p>
                        </div>
                        <div class="info-item">
                            <h4>Project Type</h4>
                            <p>Application Development and Compliance</p>
                        </div>
                        <div class="info-item">
                            <h4>Timeline</h4>
                            <p>6 months</p>
                        </div>
                    </div>
                </div>

                <div class="stats-card">
                    <h3>Key Achievements</h3>
                    <div class="stat-grid">
                        <div class="stat-item">
                            <span class="stat-value">50%</span>
                            <span class="stat-label">Increase in User Engagement</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-value">99.9%</span>
                            <span class="stat-label">Uptime</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-value">30%</span>
                            <span class="stat-label">Reduction in Processing Time</span>
                        </div>
                    </div>
                </div>
            </aside>
        </article>

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