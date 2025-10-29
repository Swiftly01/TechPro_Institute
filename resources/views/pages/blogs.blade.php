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
    <link rel="stylesheet" href="{{ asset('assets/styles/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/styles/blogs.css') }}">



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
                        <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
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
    <header class="hero bg-light py-5 text-center border-bottom">

        <h1 class="fw-bold display-5 text-white mt-5">Latest Insights & Stories</h1>
        <p class="text-muted">Explore our thoughts on tech education, innovation, and career growth</p>
    </header>

    <div class="container my-5">
        <div class="row align-items-center g-4">

            {{-- Left Side: Blog Image Carousel --}}
            <div class="col-lg-6">
                @php
                    $images = $blog->getFeaturedImages('featured_image');
                @endphp

                <div id="blogCarousel" class="carousel slide shadow-sm rounded overflow-hidden" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        @foreach ($images as $index => $image)
                            <button type="button" data-bs-target="#blogCarousel"
                                data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"
                                aria-current="{{ $index === 0 ? 'true' : 'false' }}">
                            </button>
                        @endforeach
                    </div>

                    <div class="carousel-inner">
                        @forelse ($images as $index => $image)
                            <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                                <img src="{{ $image }}" class="d-block w-100" alt="{{ $blog->title }}">
                                <div class="carousel-caption bg-dark bg-opacity-50 rounded p-3">
                                    <h5 class="text-white">{{ Str::limit($blog->excerpt, 60) }}</h5>
                                    <p class="small text-white-50">{{ Str::limit($blog->subtitle, 60) }}</p>
                                </div>
                            </div>
                        @empty
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/images/default-blog.jpg') }}" class="d-block w-100"
                                    alt="Default Blog Image">
                            </div>
                        @endforelse
                    </div>

                    @if (count($images) > 1)
                        <button class="carousel-control-prev" type="button" data-bs-target="#blogCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#blogCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    @endif
                </div>
            </div>

            {{-- Right Side: Blog Content --}}
            <div class="col-lg-6">
                <h2 class="fw-bold mb-3 text-dark">{{ $blog->title }}</h2>

                @if ($blog->subtitle)
                    <h5 class="text-muted mb-3">{{ $blog->subtitle }}</h5>
                @endif

                <p class="text-secondary small mb-2">
                    {{ $blog->created_at->format('F j, Y') }} · {{ strtoupper($blog->category ?? 'GENERAL') }}
                </p>

                <p class="text-secondary mb-4">
                    {{-- {{ Str::limit(strip_tags($blog->content), 300) }} --}}
                    {!! nl2br(e($blog->content)) !!}
                </p>

                {{-- Highlights --}}
                @php
                    $blogHighlights = json_decode($blog->blog_highlight, true);
                @endphp

                @if (!empty($blogHighlights))
                    <ul class="list-unstyled">
                        @foreach ($blogHighlights as $highlight)
                            <li class="mb-3 d-flex align-items-start">
                                <i class="bi bi-check-circle-fill text-success me-2"></i>
                                <span>{{ $highlight }}</span>
                            </li>
                        @endforeach
                    </ul>
                @endif

                <a href="{{ route('index') }}" class="btn btn-primary px-4 mt-3">
                    Read More Articles <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>


    {{-- <div class="container my-5">
    <div class="row align-items-center g-4">

      <div class="col-lg-6">
        <div id="blogCarousel" class="carousel slide shadow-sm rounded overflow-hidden" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#blogCarousel" data-bs-slide-to="0" class="active"
              aria-current="true"></button>
            <button type="button" data-bs-target="#blogCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#blogCarousel" data-bs-slide-to="2"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('assets/images/unsplash_p0qKsW3uqA4 (7).png') }}" class="d-block w-100"
  alt="Cybersecurity Training">
  <div class="carousel-caption bg-dark bg-opacity-50 rounded p-3">
    <h5 class="text-white">The Future of Cybersecurity</h5>
    <p class="small text-white-50">How AI is changing digital defense strategies</p>
  </div>
  </div>
  <div class="carousel-item">
    <img src="{{ asset('assets/images/unsplash_p0qKsW3uqA4 (internship).png') }}" class="d-block w-100" alt="Internship Program">
    <div class="carousel-caption bg-dark bg-opacity-50 rounded p-3">
      <h5 class="text-white">Empowering Students Through Internships</h5>
      <p class="small text-white-50">Real-world experience meets classroom learning</p>
    </div>
  </div>
  <div class="carousel-item">
    <img src="{{ asset('assets/images/unsplash_p0qKsW3uqA4-consult.png') }}" class="d-block w-100" alt="Consulting Image">
    <div class="carousel-caption bg-dark bg-opacity-50 rounded p-3">
      <h5 class="text-white">Building a Career in Tech Consulting</h5>
      <p class="small text-white-50">Insights from industry professionals</p>
    </div>
  </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#blogCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#blogCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
  </div>
  </div>

  <!-- Blog Content -->
  <div class="col-lg-6">
    <h2 class="fw-bold mb-3 text-dark">Bridging Education and Real-World Experience</h2>
    <p class="text-secondary mb-4">
      At <strong>TechPro Institute</strong>, we believe learning goes beyond classrooms.
      Our training programs are designed to prepare students for the evolving digital workforce —
      from cybersecurity and software development to business analysis and project management.
    </p>

    <ul class="list-unstyled">
      <li class="mb-3 d-flex align-items-start">
        <i class="bi bi-check-circle-fill text-success me-2"></i>
        <span>Hands-on projects guided by industry experts.</span>
      </li>
      <li class="mb-3 d-flex align-items-start">
        <i class="bi bi-check-circle-fill text-success me-2"></i>
        <span>Internship opportunities that turn theory into practice.</span>
      </li>
      <li class="mb-3 d-flex align-items-start">
        <i class="bi bi-check-circle-fill text-success me-2"></i>
        <span>Global learning community with personalized mentorship.</span>
      </li>
    </ul>

    <a href="#" class="btn btn-primary px-4 mt-3">
      Read More Articles <i class="bi bi-arrow-right ms-2"></i>
    </a>
  </div>
  </div>
  </div> --}}







    <footer style="background-color: #0A5098; padding: 40px 0; margin-top: 6%;">
        <div class="container">
            <div class="row gy-4">

                <div class="col-lg-2 col-md-6 col-sm-12 footer">
                    <h1 class="fw-bold"><span style="color: #E21C1C;">Tech</span>Pro</h1>
                    <p class="fs-6 fw-light mb-2 follow">Follow Us On</p>
                    <div class="d-flex">
                        <a href="http://wa.me/2348086478810" class="me-3 " target="_blank"><i
                                class="bi bi-whatsapp fs-4 follow"></i></a>
                        <a href="https://www.facebook.com/profile.php?id=61566747027176&mibextid=LQQJ4d"
                            target="blank" class="me-3 "><i class="bi bi-facebook fs-4 follow"></i></a>
                        <a href="https://x.com/techprongr?s=21" target="_blank"><i
                                class="bi bi-twitter fs-4 follow"></i></a>
                    </div>

                </div>

                <!-- Courses Section -->
                <div class="col-lg-2 col-md-6 col-sm-12 footer">
                    <h4 class="fw-bold follow">Courses</h4>
                    <ul class="list-unstyled">
                        <li><a class="fs-6 fw-light text" href="{{ route('application.form') }}">Web Development</a>
                        </li>
                        <li><a class="fs-6 fw-light text" href="{{ route('application.form') }}">Data analysis</a>
                        </li>
                        <li><a class="fs-6 fw-light text" href="{{ route('application.form') }}">Cyber Security</a>
                        </li>
                        <li><a class="fs-6 fw-light text" href="{{ route('application.form') }}">UI/UX Design</a>
                        </li>
                        <li><a class="fs-6 fw-light text" href="{{ route('application.form') }}">Graphic Design</a>
                        </li>
                        <li><a class="fs-6 fw-light text" href="{{ route('application.form') }}">Full Stack
                                Development</a></li>
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
