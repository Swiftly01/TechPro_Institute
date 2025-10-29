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
    <link rel="stylesheet" href="{{ asset('assets/styles/index.css') }}">

    <style>
        .contact-us {
            margin-top: 50px;
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
                <ul class="mx-auto mt-2 mb-2 navbar-nav mb-lg-0">
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

    <!-- Header Section with Carousel -->
    <section class="header">
        <!-- Background Carousel -->
        <div id="headerCarousel" class="carousel slide header-carousel" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/images/DSC_4907.jpg') }}" class="d-block w-100 img-fluid"
                        alt="Techpro Training 1">
                    <div class="carousel-caption">

                        <h1 class="carousel-text">TechPro Institute<br> <span style="color:orange">Nigeria</span></h1>


                    </div>
                </div>

                <div class="carousel-item">
                    <img src="{{ asset('assets/images/DSC_4932.jpg') }}" class="d-block w-100 img-fluid"
                        alt="Techpro Training 2">
                    <div class="carousel-caption">
                        <h1 class="carousel-text">TechPro Institute<br> <span style="color: orange">Nigeria</span></h1>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/DSC_4921.jpg') }}" class="d-block w-100 img-fluid"
                        alt="Techpro Training 3">
                    <div class="carousel-caption">
                        <h1 class="carousel-text">TechPro Institute<br> <span style="color: orange">Nigeria</span></h1>
                    </div>
                </div>
            </div>

            <!-- Carousel Controls -->
            <a class="carousel-control-prev" href="#headerCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#headerCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </section>

    <section class="why_techpro_nigeria">
        <div class="container">
            <p class="pt-2 text-center text-danger header_text">Why TechPro
                Nigeria</p>
            <div class="row pb-md-5">
                <div class="mb-3 col-12 col-sm-6 col-lg-3">
                    <div class="shadow-lg card card_custom">
                        <div class="mx-auto why-card">
                            <img src="{{ asset('assets/images/image 2.png') }}" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="text-center card-title fw-bold why-text">State-of-the-Art Facilities</h5>
                        </div>
                    </div>
                </div>
                <div class="mb-3 col-12 col-sm-6 col-lg-3">
                    <div class="shadow-lg card card_custom">
                        <div class="mx-auto why-afford">
                            <img src="{{ asset('assets/images/image 3.png') }}" class="card-img-top "
                                alt="...">
                        </div>
                        <div class="mb-3 card-body">
                            <h5 class="text-center card-title fw-bold why-afford-text">Flexible Payment</h5>
                        </div>
                    </div>
                </div>
                <div class="mb-3 col-12 col-sm-6 col-lg-3">
                    <div class="shadow-lg card card_custom">
                        <div class="mx-auto why-card">
                            <img src="{{ asset('assets/images/image 4.png') }}" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="text-center card-title fw-bold why-text">Practical Experience</h5>
                        </div>
                    </div>
                </div>
                <div class="mb-3 col-12 col-sm-6 col-lg-3">
                    <div class="shadow-lg card card_custom">
                        <div class="mx-auto why-card">
                            <img src="{{ asset('assets/images/image 5.png') }}" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="text-center card-title fw-bold why-text">Internship Opportunities</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>



    <div class="container">
        <div class="row my-md-2">
            <div class="col">
                <h1 class="my-4 text-center text-danger header_text">Our Available Courses</h1>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-5 g-4">
                    <div class="col">
                        <div class="border rounded-lg shadow-lg card card-rad card_custom">
                            <p class="pt-2 text-center title">Front-End Development</p>
                            <div style="margin-top: -10px;" class="container">
                                <img height="180px" src="{{ asset('assets/images/frontend.jpg') }}"
                                    class="card-img-top" alt="...">
                                <div>
                                    <p class="desc">Master the art of building visually engaging and interactive
                                        websites with our
                                        comprehensive Front-End Development Course</p>
                                    <div class="pt-3 price">
                                        <p class="me-2">Price</p>
                                        <p>#170, 000</p>
                                    </div>
                                    <div class="duration">
                                        <p class="ms-1">Duration</p>
                                        <p class="me-2">3 Months</p>
                                    </div>
                                </div>
                                <div class="reg">
                                    <a href="{{ route('application.form') }}"><button class="register-card">Register
                                            Now</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="border rounded-lg shadow-lg card card-rad card_custom">
                            <p class="pt-2 text-center title">Back-End Development</p>
                            <div style="margin-top: -10px;" class="container">
                                <img height="180px" src="{{ asset('assets/images/backend.jpg') }}"
                                    class="card-img-top" alt="...">
                                <div>
                                    <p class="desc">Master backend development by building robust server-side
                                        apps. Manage databases,
                                        APIs, and logic for seamless user experiences.</p>
                                    <div class="pt-3 price">
                                        <p class="me-2">Price</p>
                                        <p>#250, 000</p>
                                    </div>
                                    <div class="duration">
                                        <p class="ms-1">Duration</p>
                                        <p class="me-2">3 Months</p>
                                    </div>
                                </div>
                                <div class="reg">
                                    <a href="{{ route('application.form') }}"> <button class="register-card">Register
                                            Now</button></a>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="border rounded-lg shadow-lg card card-rad card_custom">
                            <p class="pt-2 text-center title">UI/UX Design</p>
                            <div style="margin-top: -10px;" class="container">
                                <img style="height: 180px" src="{{ asset('assets/images/DSC_5001.jpg') }}"
                                    class="card-img-top" alt="...">
                                <div>
                                    <p class="desc">Design user-friendly interfaces with Figma and Adobe XD.
                                        Create intuitive, visually
                                        appealing designs that enhance user experience.</p>
                                    <div class="pt-3 price">
                                        <p class="me-2">Price</p>
                                        <p>#150, 000</p>
                                    </div>
                                    <div class="duration">
                                        <p class="ms-1">Duration</p>
                                        <p class="me-2">3 Months</p>
                                    </div>
                                </div>
                                <div class="reg">
                                    <a href="{{ route('application.form') }}"> <button class="register-card">Register
                                            Now</button></a>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="border rounded-lg shadow-lg card card-rad card_custom">
                            <p class="pt-2 text-center title">Cyber Security</p>
                            <div style="margin-top: -10px;" class="container">
                                <img style="height: 180px" src="{{ asset('assets/images/DSC_5002.jpg') }}"
                                    class="card-img-top" alt="...">
                                <div>
                                    <p class="desc">Secure your digital assets with our cybersecurity program.
                                        Learn to spot
                                        vulnerabilities, prevent threats, and protect systems effectively.</p>
                                    <div class="pt-3 price">
                                        <p class="me-2">Price</p>
                                        <p>#130, 000</p>
                                    </div>
                                    <div class="duration">
                                        <p class="ms-1">Duration</p>
                                        <p class="me-2">3 Months</p>
                                    </div>
                                </div>
                                <div class="reg">
                                    <a href="{{ route('application.form') }}"><button class="register-card">Register
                                            Now</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="border rounded-lg shadow-lg card card-rad card_custom">
                            <p class="pt-2 text-center title">Full Stack Development</p>
                            <div style="margin-top: -5px;" class="container">
                                <img height="180px" src="{{ asset('assets/images/fullstack.jpg') }}"
                                    class="card-img-top" alt="...">
                                <div>
                                    <p class="desc">Build web apps with our full-stack program. Master both
                                        front-end and back-end
                                        technologies for dynamic, responsive solutions.</p>
                                    <div class="pt-3 price">
                                        <p class="me-2">Price</p>
                                        <p>#340, 000</p>
                                    </div>
                                    <div class="duration">
                                        <p class="ms-1">Duration</p>
                                        <p class="me-2">6 Months</p>
                                    </div>
                                </div>
                                <div class="reg">
                                    <a href="{{ route('application.form') }}"> <button class="register-card">Register
                                            Now</button></a>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="border rounded-lg shadow-lg card card-rad card_custom">
                            <p class="pt-2 text-center title">Data Analytics</p>
                            <div style="margin-top: -10px;" class="container">
                                <img style="height: 180px" src="{{ asset('assets/images/DSC_5000.jpg') }}"
                                    class="card-img-top" alt="...">
                                <div>
                                    <p class="desc">Unlock the power of data with our analytics program. Master
                                        tools to analyze,
                                        interpret, and turn data into actionable insights.</p>
                                    <div class="pt-3 price">
                                        <p class="me-2">Price</p>
                                        <p>#130, 000</p>
                                    </div>
                                    <div class="duration">
                                        <p class="ms-1">Duration</p>
                                        <p class="me-2">3 Months</p>
                                    </div>
                                </div>
                                <div class="reg">
                                    <a href="{{ route('application.form') }}"> <button class="register-card">Register
                                            Now</button></a>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col">
                <h1 class="my-3 text-center text-danger my-md-4 header_text">Our Services</h1>

                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-5 g-4">
                    <div class="col">
                        <div class="border rounded-lg shadow-lg card card-rad card_custom">
                            <p class="pt-2 text-center title">Tech-A-Teen</p>
                            <div style="margin-top: -10px;" class="container">
                                <img height="180px" src="{{ asset('assets/images/DSC_4998.jpg') }}"
                                    class="card-img-top" alt="...">
                                <div>
                                    <p class="desc">Empower teenagers with practical tech skills, preparing them
                                        for future careers in a
                                        supportive learning environment.</p>
                                    <div class="pt-3 price">
                                        <p class="me-2">Price</p>
                                        <p>#20, 000</p>
                                    </div>
                                    <div class="duration">
                                        <p class="ms-1">Duration</p>
                                        <p class="me-2">Monthly</p>
                                    </div>
                                </div>
                                <div class="reg">
                                    <a href="{{ route('tech-a-teen') }}"><button class="register-card">Register
                                            Now</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="border rounded-lg shadow-lg card card-rad card_custom">
                            <p class="pt-2 text-center title">Work Space</p>
                            <div style="margin-top: -12px;" class="container">
                                <img height="180px" src="{{ asset('assets/images/DSC_4919.jpg') }}"
                                    class="card-img-top" alt="...">
                                <div>
                                    <p class="desc">Our workspace offers a productive environment for
                                        professionals and learners,
                                        equipped with high-speed internet.</p>
                                    <div class="pt-3 price">
                                        <p class="me-2">Price</p>
                                        <p>#2, 000</p>
                                    </div>
                                    <div class="duration">
                                        <p class="ms-1">Duration</p>
                                        <p class="me-2">Daily</p>
                                    </div>
                                </div>
                                <div class="reg">
                                    <a href="{{ route('view.more') }}"> <button class="register-card">View
                                            More</button></a>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="border rounded-lg shadow-lg card card-rad card_custom">
                            <p class="pt-2 text-center title">Conference Room</p>
                            <div style="margin-top: -10px;" class="container">
                                <img height="180px" src="{{ asset('assets/images/DSC_4921.jpg') }}"
                                    class="card-img-top" alt="...">
                                <div>
                                    <p class="desc">
                                        The seminar room at TechPro Institute is a modern, fully-equipped space for
                                        workshops and events,
                                        featuring state-of-the-art tech and a comfortable setup.
                                    </p>

                                </div>
                                <div class="reg">
                                    <a href="{{ url('/contact') }}"> <button class="register-card contact-us">Contact
                                            Us</button></a>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="border rounded-lg shadow-lg card card-rad card_custom">
                            <p class="pt-2 text-center title">Barbing</p>
                            <div style="margin-top: -10px;" class="container">
                                <img style="height:180px" src="{{ asset('assets/images/barbing2.jpg') }}"
                                    class="card-img-top" alt="...">
                                <div>
                                    <p class="desc">
                                        Our barbering services offer expert grooming, tailored to your style. We use
                                        premium products and
                                        provide a comfortable, relaxing environment for a refined, polished look.
                                    </p>

                                </div>
                                <div class="reg">
                                    <a href="{{ url('/barbing') }}"> <button class="register-card contact-us">View
                                            More</button></a>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="border rounded-lg shadow-lg card card-rad card_custom">
                            <p class="pt-2 text-center title">Hostel</p>
                            <div style="margin-top: -10px;" class="container">
                                <img height="180px" src="{{ asset('assets/images/DSC_4925.jpg') }}"
                                    class="card-img-top" alt="...">
                                <div>
                                    <p class="desc">
                                        Our hostels at TechPro Institute are secure affordable, and designed for
                                        students and
                                        professionals, offering modern facilities and a productive, comfortable
                                        stay.
                                    </p>

                                </div>
                                <div class="reg">
                                    <a href="{{ url('/hostel') }}"> <button class="register-card contact-us">View
                                            More</button></a>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="border rounded-lg shadow-lg card card-rad card_custom">
                            <p class="pt-2 text-center title">IT Consultancy</p>
                            <div style="margin-top: -10px;" class="container">
                                <img height="180px" src="{{ asset('assets/images/image 22.png') }}"
                                    class="card-img-top" alt="...">
                                <div>
                                    <p class="desc">
                                        Our IT consultancy services provide expert solutions for achieving business
                                        success, optimizing
                                        operations, enhancing productivity, and leveraging advanced technology.
                                    </p>

                                </div>
                                <div class="reg">
                                    <a href="{{ url('/contact') }}"> <button class="register-card contact-us">Contact
                                            Us</button></a>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <div class="mt-4 row">
            <div class="col">
                <div class="container">
                    <p class="text-center text-danger header_text">How We
                        Support Start-ups and Entrepreneurs</p>
                    <p class="text-center fw-light fs-5">Our Goal is to drive social
                        innovation and empower
                        local talents to create sustainable tech solutions through mentorship, access to cutting
                        edge tools
                        and a collaborative environment, we aim to nurture the next generation of innovators and
                        position Osun
                        state as a leading tech state.
                    </p>
                </div>
            </div>
        </div>

        <div class="mt-3 row">
            <div class="col-lg-6">
                <div class="text-center">
                    <h6 style="font-size: 22px;">Access to Workspace</h6>
                    <p class="mt-3 fw-light fs-5">Enjoy fully equiped,modern workspace that offer the perfect setting
                        for
                        productivity, collaboration, and a proffessional mailling address-providing your
                        your startup with all the physical resources needed to thrive.
                    </p>

                </div>

            </div>
            <div class="col-lg-6">
                <img src="{{ asset('assets/images/DSC_4914.jpg') }}" class="img-fluid" alt="">

            </div>
        </div>

        <div class="mt-5">
            <div class="mb-4 text-center">
                <p class="text-muted">Browse and Read The Latest News</p>
                <h1 class="fw-bold">Latest Stories</h1>
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-5">
                @forelse ($blogs as $blog)
                    @php
                        $images = $blog->getFeaturedImages('featured_image');
                        $firstImage = $images->first(); 
                    @endphp

                    <div class="col">
                        <div class="border-0 shadow-sm card h-100">
                            @if ($firstImage)
                                <img src="{{ $firstImage }}" height="250px" class="card-img-top" alt="{{ $blog->title }}">
                            @else
                                
                                <img src="{{ asset('images/default-placeholder.jpg') }}" class="card-img-top"
                                    alt="Default image">
                            @endif

                            <div class="bg-white card-body">
                                <h6 class="fw-semibold">{{ $blog->title }}</h6>

                                <p class="mb-2 text-muted small">
                                    {{ $blog->created_at->format('F j, Y') }} · FEATURED · 4
                                </p>

                                <p class="text-secondary">
                                    {{ Str::limit($blog->content, 100) }}...
                                </p>

                                <a class="read_more_link"
                                    href="{{ route('blog.details', ['blog' => $blog->slug]) }}">
                                    Read more <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No blog posts available!</p>
                @endforelse
            </div>

          <div class="d-flex justify-content-center my-5">
            {{ $blogs->onEachSide(5)->links() }}

          </div>


        </div>

    </div>


    <div class="my-5 container-fluid">
        <div style="background-color: #0A5098;" class="row">
            <div class="col-lg-6">
                <div class="mt-5">
                    <h1 class="incubate-header">Development Team</h1>
                    <p class="empowering">Our development team builds innovative and reliable solutions</p>
                    <p class="foster">Skilled in the latest tools, Tech Pro Nigeria works with top professional
                        software engineers
                        to create impactful technology, driven by passion and agility, we turn ideas into reality.</p>
                    <a href="{{ url('/incubation') }}" class="explore-btn-new">Explore Our Programs</a>
                </div>

            </div>


            <div class="text-center col-lg-6 ">

                <img src="{{ asset('assets/images/DSC_4932.jpg') }}" class="mt-5 mb-5 img-fluid" alt="">

            </div>

        </div>
    </div>

    <div class="container">
        <div class="gallery-layout">
            <img class="gallery-img" src="{{ asset('assets/images/DSC_4906.jpg') }}" alt="">
            <div style="background-color: #0A5098; width: 30%;">
                <div class="gallery-btn-layout">
                    <a href="{{ url('/gallery') }}" class="gallery-btn">View Our Gallery</a>
                </div>

            </div>
        </div>
    </div>

    <div class="container my-4">
        <div class="row">
            <div class="col">
                <h1 class="text-center text-danger header_text">Tech-For-Teen Program</h1>
                <p class="fs-5 fw-light">The Tech-For-Teen Program is an engaging, introductory tech initiative
                    designed to
                    inspire and develop a tech-savy mindset in secondary school students and those awaiting higher
                    education.Through hands-on workshops, coding sessions, and creative problem-solving
                    activities,participants
                    gain foundational knowledge in emerging technologies,such as coding, Ai, and robotics.The program
                    empowers
                    teens to explore their passion for technology, enhance critical thinking skills, and prepare for
                    future
                    oppurtunities in the digital word </p>
            </div>
        </div>
    </div>

    <div class="container">
        <h1 class="text-center text-danger header_text">Benefits</h1>

        <div class="row">
            <div class="text-center col-md-6 col-lg-4">
                <h1 style="font-size: 18px;" class="">Monthly Payment</h1>
                <img class="mt-2 img-fluid" src="{{ asset('assets/images/unsplash_Q59HmzK38eQ (1).png') }}"
                    alt="">
                <p class="fs-5 fw-light">Monthly Payment, similar to a regular tutoring program</p>
            </div>

            <div class="text-center col-md-6 col-lg-4">
                <h1 style="font-size: 18px;" class="mt-2">Laptop Access</h1>
                <img class="img-fluid" src="{{ asset('assets/images/unsplash_WB3ujiKLJwQ.png') }}" alt="">
                <p class="fs-5 fw-light">No need to worry about extra costs- we provide your child with a laptop and
                    internet
                    access to practice at the end of each class </p>
            </div>

            <!-- Force break after this column on medium screens -->
            <div class="w-100 d-md-none"></div>

            <div class="text-center col-md-12 col-lg-4">
                <h1 style="font-size: 18px;" class="">Weekend Classes</h1>
                <img class="img-fluid" width="250px" src="{{ asset('assets/images/unsplash_HMJIGc8iIKs.png') }}"
                    alt="">
                <p class="mt-2 fs-5 fw-light">The program is offered on weekends at your
                    convenience-morning,
                    afternoon, or evening- for a duration of three months</p>
            </div>
        </div>

        <div class="my-2 row">
            <div class="text-center col">
                <a class="register-btn" href="{{ route('application.form') }}">Register Now</a>
            </div>
        </div>

    </div>

    <section class="py-4 my-5" style="background-color: #0A5098; height: auto;">
        <div class="container-fluid">
            <h1 class="py-2 text-center" style="font-size: 36px; color: #E4C939;">Our Partners</h1>

            <div class="row justify-content-center">
                <!-- Partner logos -->
                <div class="mb-3 text-center col-6 col-md-4 col-lg-2">
                    <img class="img-fluid" src="{{ asset('assets/images/image 15.png') }}" alt="Partner 1">
                </div>
                <div class="mb-3 text-center col-6 col-md-4 col-lg-2">
                    <img class="img-fluid" src="{{ asset('assets/images/image 19.png') }}" alt="Partner 2">
                </div>
                <div class="mb-3 text-center col-6 col-md-4 col-lg-2">
                    <img class="img-fluid" src="{{ asset('assets/images/image 16.png') }}" alt="Partner 3">
                </div>
                {{-- <div class="mb-3 text-center col-6 col-md-4 col-lg-2">
                    <img class="img-fluid" src="{{ asset('assets/images/image 21.png') }}" alt="Partner 4">
      </div> --}}
                <div class="mb-3 text-center col-6 col-md-4 col-lg-2">
                    <img class="img-fluid" src="{{ asset('assets/images/image 17.png') }}" alt="Partner 5">
                </div>
                <div class="mb-3 text-center col-6 col-md-4 col-lg-2">
                    <img class="img-fluid" src="{{ asset('assets/images/image 20.png') }}" alt="Partner 6">
                </div>
                <div class="mb-3 text-center col-6 col-md-4 col-lg-2">
                    <img class="img-fluid" src="{{ asset('assets/images/image 18.png') }}" alt="Partner 7">
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div style="margin-top: 6%;" class="text-center row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <img src="{{ asset('assets/images/mdi_users.png') }}" alt="">
                    <h1 style="font-size: 20px; font-weight: bold;">300+</h1>
                    <p style="font-size: 20px;">Students</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <img src="{{ asset('assets/images/arcticons_bookshelf.png') }}" alt="">
                    <h1 style="font-size: 20px; font-weight: bold;">10+</h1>
                    <p style="font-size: 20px;">Courses</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <img src="{{ asset('assets/images/mdi_locations.png') }}" alt="">
                    <h1 style="font-size: 20px; font-weight: bold;">3+</h1>
                    <p style="font-size: 20px;">Countries</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <img src="{{ asset('assets/images/icon-park_health-products.png') }}" alt="">
                    <h1 style="font-size: 20px; font-weight: bold;">3+</h1>
                    <p style="font-size: 20px;">Products</p>
                </div>
            </div>
        </div>


    </section>


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
                        <li><a class="fs-6 fw-light text" href="{{ route('tech-a-teen') }}">Tech A Teen</a></li>
                    </ul>
                </div>

                <!-- Resources Section -->
                <div class="col-lg-2 col-md-6 col-sm-12 footer">
                    <h4 class="fw-bold follow">Links</h4>
                    <ul class="list-unstyled">
                        <li><a class="fs-6 fw-light text" href="{{ url('/gaming') }}">Gaming</a></li>
                        <li><a class="fs-6 fw-light text" href="{{ url('/events') }}">Events</a></li>
                        <li><a class="fs-6 fw-light text" href="">Tech-A-Child</a></li>
                        <li><a class="fs-6 fw-light text" href="#">Meetups</a></li>
                        <li><a class="fs-6 fw-light text" href="{{ url('/internship') }}">Internship</a></li>
                        <li><a class="fs-6 fw-light text" href="{{ url('/hostel') }}">Hostel Facilities</a></li>
                        <li><a class="fs-6 fw-light text" href="{{ url('/barbing') }}">Barbing</a></li>


                        <!-- <li><a class="fs-6 fw-light text" href="#">TechPro Consultancy</a></li>
            <li><a class="fs-6 fw-light text" href="#">Frika Xchange</a></li>
            <li><a class="fs-6 fw-light text" href="#">Osun State Government</a></li> -->
                    </ul>
                </div>

                <!-- Legal Section -->
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

    <body>


        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const cards = document.querySelectorAll(".card");

                const observer = new IntersectionObserver(
                    (entries) => {
                        entries.forEach((entry) => {
                            if (entry.isIntersecting) {
                                entry.target.classList.add("animate"); // Add animation class
                            }
                        });
                    }, {
                        threshold: 0.2
                    } // Trigger when 20% of the card is visible
                );

                cards.forEach((card) => {
                    observer.observe(card);
                });
            });
        </script>
    </body>

</html>
