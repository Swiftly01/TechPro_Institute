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
    <meta property="og:title" content="{{ $blog->title }}">
    <meta property="og:description" content="{{ $blog->excerpt }}">
    @php
        $images = $blog->getFeaturedImages('featured_image');
        $firstImage = $images->first();

        // Ensure the image URL is absolute (not relative)
        $ogImage = $firstImage ? asset($firstImage) : asset('default-preview.jpg');

       // dd($ogImage);
    @endphp

    <!-- Open Graph (for Facebook, WhatsApp, LinkedIn) -->
    <meta property="og:title" content="{{ $blog->title }}">
    <meta property="og:description" content="{{ Str::limit(strip_tags($blog->excerpt), 150) }}">
    <meta property="og:image" content="{{ $ogImage }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="article">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $blog->title }}">
    <meta name="twitter:description" content="{{ Str::limit(strip_tags($blog->excerpt), 150) }}">
    <meta name="twitter:image" content="{{ $ogImage }}">


    <style>
        :root {
            --primary-color: #1e3a8a;
            --text-color: #333;
            --light-blue: #e5edff;
            --transition: all 0.3s ease;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
                "Helvetica Neue", Arial, sans-serif;
            line-height: 1.6;
            color: var(--text-color);
            overflow-x: hidden;
        }

        .hero {
            background: linear-gradient(rgba(30, 58, 138, 0.9), rgba(30, 58, 138, 0.9)),
                url("https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80");
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

        .carousel-caption {
            transition: all 0.4s ease;
        }

        .carousel-item img {
            filter: brightness(0.9);
            transition: transform 0.4s ease;
        }

        .carousel-item:hover img {
            transform: scale(1.02);
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




        @media (max-width: 768px) {


            footer .row {
                text-align: center;
            }

            footer .d-flex {
                justify-content: center;
            }
        }

        @media (max-width: 480px) {


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
                <ul class="mx-auto mt-2 mb-2 navbar-nav mb-lg-0">
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
    <header class="py-5 text-center hero bg-light border-bottom">

        <h1 class="mt-5 text-white fw-bold display-5">Latest Insights & Stories</h1>
        <p class="text-muted">Explore our thoughts on tech education, innovation, and career growth</p>
    </header>

    <div class="container my-5">
        <div class="row align-items-start g-4">

            {{-- Left Side: Blog Image Carousel --}}
            <div class="col-lg-6">
                @php
                    $images = $blog->getFeaturedImages('featured_image');
                @endphp

                <div id="blogCarousel" class="overflow-hidden rounded shadow-sm carousel slide" data-bs-ride="carousel">
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
                                {{-- <div class="p-3 bg-opacity-50 rounded carousel-caption bg-dark">
                                    <h5 class="text-white">{{ Str::limit($blog->excerpt, 60) }}</h5>
                                    <p class="small text-white-50">{{ Str::limit($blog->subtitle, 60) }}</p>
                                </div> --}}
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
                <h2 class="mb-3 fw-bold text-dark">{{ $blog->title }}</h2>

                @if ($blog->subtitle)
                    <h5 class="mb-3 text-muted">{{ $blog->subtitle }}</h5>
                @endif

                <p class="mb-2 text-secondary small">
                    {{ $blog->created_at->format('F j, Y') }} · {{ strtoupper($blog->category ?? 'GENERAL') }}
                </p>

                <p class="mb-4 text-secondary">
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

                <a href="{{ route('index') }}" class="px-4 mt-3 btn btn-primary">
                    Read More Articles <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </div>



    <footer style="background-color: #0A5098; padding: 40px 0; margin-top: 6%;">
        <div class="container">
            <div class="row gy-4">
                <!-- TechPro and Social Media Section -->
                <div class="col-lg-2 col-md-6 col-sm-12 footer">
                    <h1 class="fw-bold"><span style="color: #E21C1C;">Tech</span>Pro</h1>
                    <p class="mb-2 fs-6 fw-light follow">Follow Us On</p>
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
                        <li><a class="fs-6 fw-light text" href="{{ url('/gaming') }}">Gaming</a></li>
                        <li><a class="fs-6 fw-light text" href="{{ url('/events') }}">Events</a></li>
                        <li><a class="fs-6 fw-light text" href="{{ route('tech-a-teen') }}">Tech-A-Teen</a></li>
                        <li><a class="fs-6 fw-light text" href="#">Meetups</a></li>
                        <li><a class="fs-6 fw-light text" href="{{ url('/internship') }}">Internship</a></li>
                        <li><a class="fs-6 fw-light text" href="{{ url('/hostel') }}">Hostel Facilities</a></li>

                    </ul>
                </div>


                <div class="col-lg-3 col-md-6 col-sm-12 footer">
                    <h4 class="fw-bold follow">Legal</h4>
                    <ul class="list-unstyled ">
                        <li><a class="fs-6 fw-light text" href="{{ route('terms') }}">Terms Of Use</a></li>
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
