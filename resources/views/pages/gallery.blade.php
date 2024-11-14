<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Techpro Institute Nigeria</title>
  <link rel="icon" href="images/techpro_img.png" type="image/x-icon">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="styles/gallery.css">
</head>
<body>

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand ps-4" href="index.html">
            <img width="80px" height="50px" class="img-fluid" src="images/techpro_img.png" alt="Techpro Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 mt-2">
                <li class="nav-item me-5">
                    <a class="nav-link active" aria-current="page" href="index.html">Home</a>
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
                    <a href="form.html" class="nav-link">
                        <button class="register">Register Now</button>
                    </a>
                </li>
            </ul>
        </div>
        <a href="form.html" class="me-4 d-none d-lg-block">
            <button class="register">Register Now</button>
        </a>
    </div>
  </nav>

  <!-- Page Breadcrumb -->
  <div class="container">
    <div class="row main">
      <div class="col">
        <h1><a class="text-danger home" href="index.html">Home/</a><a class="text-danger home" href="gallery.html">Gallery</a></h1>
      </div>
    </div>
  </div> 

  <!-- Gallery and Sidebar -->
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-12">
        <div class="links">
          <ul>
            <li><a href=""><h1 class="our">Our Spaces</h1></a></li>
            <li><img class="mb-1" src="images/mdi-light_arrow-right (1).png" alt=""> <a href="gaming.html">Gaming</a></li>
            <li><img class="mb-1" src="images/mdi-light_arrow-right (1).png" alt=""> <a href="hostel.html">Hostel Facilities</a></li>
            <li><img class="mb-1" src="images/mdi-light_arrow-right (1).png" alt=""> <a href="working.html">Co-Working Space</a></li>
          </ul>
        </div>
      </div>

      <!-- Carousel Section -->
      <div class="col-lg-8 col-md-12">
        <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/DSC_4896.jpg" class="d-block w-100 img-fluid" alt="Image 1">
            </div>
            <div class="carousel-item">
              <img src="images/DSC_4914.jpg" class="d-block w-100 img-fluid" alt="Image 2">
            </div>
            <div class="carousel-item">
              <img src="images/DSC_4906.jpg" class="d-block w-100 img-fluid" alt="Image 3">
            </div>
            <div class="carousel-item">
              <img src="images/DSC_4927.jpg" class="d-block w-100 img-fluid" alt="Image 4">
            </div>
            <div class="carousel-item">
              <img src="images/DSC_4906.jpg" class="d-block w-100 img-fluid" alt="Image 4">
            </div>
            <div class="carousel-item">
              <img src="images/DSC_4907.jpg" class="d-block w-100 img-fluid" alt="Image 4">
            </div>
            <div class="carousel-item">
              <img src="images/DSC_4932.jpg" class="d-block w-100 img-fluid" alt="Image 4">
            </div>
            <div class="carousel-item">
              <img src="images/DSC_4918.jpg" class="d-block w-100 img-fluid" alt="Image 4">
            </div>
            <div class="carousel-item">
              <img src="images/WhatsApp Image 2024-11-14 at 04.03.46_b0185637.jpg" class="d-block w-100 img-fluid" alt="Image 4">
            </div>
            <div class="carousel-item">
              <img src="images/WhatsApp Image 2024-11-14 at 04.04.03_526ec5be.jpg" class="d-block w-100 img-fluid" alt="Image 4">
              </div>
              <div class="carousel-item">
                <img src="images/WhatsApp Image 2024-11-14 at 04.04.16_75f2d318.jpg" class="d-block w-100 img-fluid" alt="Image 4">
              </div>
          </div>

          <!-- Carousel Controls -->
          <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer Section -->
  <footer style="background-color: #0A5098; padding: 40px 0; margin-top: 6%;">
    <div class="container">
      <div class="row gy-4">
        <!-- TechPro and Social Media Section -->
        <div class="col-lg-2 col-md-6 col-sm-12 footer">
          <h1 class="fw-bold"><span style="color: #E21C1C;">Tech</span>Pro</h1>
          <p class="fs-6 fw-light mb-2 follow">Follow Us On</p>
          <div class="d-flex">
            <a href="http://wa.me/2348086478810" class="me-3" target="_blank"><i class="bi bi-whatsapp fs-4 follow"></i></a>
            <a href="https://www.facebook.com/profile.php?id=61566747027176&mibextid=LQQJ4d" target="blank" class="me-3"><i class="bi bi-facebook fs-4 follow"></i></a>
            <a href="https://x.com/techprongr?s=21" target="_blank"><i class="bi bi-twitter fs-4 follow"></i></a>
          </div>
        </div>

        <!-- Courses Section -->
        <div class="col-lg-2 col-md-6 col-sm-12 footer">
          <h4 class="fw-bold follow">Courses</h4> 
          <ul class="list-unstyled">
            <li><a class="fs-6 fw-light text" href="courses.html" >Web Development</a></li>
            <li><a class="fs-6 fw-light text" href="courses.html">Data analysis</a></li>
            <li><a class="fs-6 fw-light text" href="courses.html">Cyber Security</a></li>
            <li><a class="fs-6 fw-light text" href="courses.html">UI/UX Design</a></li>
            <li><a class="fs-6 fw-light text" href="courses.html">Graphic Design</a></li>
            <li><a class="fs-6 fw-light text" href="courses.html">Full Stack Development</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-6 col-sm-12 footer">
        <h4 class="fw-bold follow">Links</h4>
        <ul class="list-unstyled">
          <li><a class="fs-6 fw-light  text" href="gaming.html"></a>Gaming</li>
          <li><a class="fs-6 fw-light text" href="events.html">Events</a></li>
          <li><a class="fs-6 fw-light  text" href="">Tech-A-Child</a></li>
          <li><a class="fs-6 fw-light text" href="#">Meetups</a></li>
          <li><a class="fs-6 fw-light  text" href="internship.html">Internship</a></li>
          <li><a class="fs-6 fw-light text" href="hostel.html">Hostel Facilities</a></li>
          
          <!-- <li><a class="fs-6 fw-light text" href="#">TechPro Consultancy</a></li>
          <li><a class="fs-6 fw-light text" href="#">Frika Xchange</a></li>
          <li><a class="fs-6 fw-light text" href="#">Osun State Government</a></li> -->
        </ul>
      </div>
      
      <!-- Legal Section -->
      <div class="col-lg-3 col-md-6 col-sm-12 footer">
        <h4 class="fw-bold follow">Legal</h4>
        <ul class="list-unstyled ">
          <li><a class="fs-6 fw-light  text" href="#">Terms Of Use</a></li>
          <li><a class="fs-6 fw-light text" href="#">Privacy Policy</a></li>
          <li><a class="fs-6 fw-light text" href="#">Legal Notice</a></li>
        </ul>
      </div>

        <!-- Contact Info Section -->
        <div class="col-lg-4 col-md-6 col-sm-12 footer">
          <h4 class="fw-bold follow">Contact Info</h4>
          <ul class="list-unstyled">
            <li><i class="bi bi-house-door me-2 fs-4 text" style="color: white;"></i>Ogunlana Drive, Surulere, Lagos</li>
            <li><i class="bi bi-telephone me-2 fs-4 text" style="color: white;"></i>+2348086478810</li>
            <li><i class="bi bi-envelope me-2 fs-4 text" style="color: white;"></i>info@techproinstitute.com</li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

 
  
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

<script>
  var myCarousel = new bootstrap.Carousel(document.getElementById('galleryCarousel'), {
    interval: 4000, // 2 seconds for automatic slide
    ride: 'carousel'
  });

  </script>

</body>
</html>
