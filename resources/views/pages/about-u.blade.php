<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Techpro Institute Nigeria</title>
  <link rel="icon" href="images/techpro_img.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="styles/about-u.css">
  <link rel="stylesheet" href="styles/nav.css">
  
  
  <style>
  </style>
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



 <div   class="container">
  <div  class="row main">
    <div class="col">
      <!-- <h1  class="text-danger home">Home/Services</h1> -->
      <h1 ><a class=" text-danger home" href="index.html">Home/</a><a class=" text-danger home" href="contact.html">About You</a></h1>
    </div>
  </div>
 </div> 


 <div class="container mt-5">
  <div style="background-color: whitesmoke;" class="row">
    <div class="col-lg-6 col-md-12">
      <form action="payment.html" method="POST">
    <h1 class="about ms-5">Incubation</h1>
    <div class="mb-3">
        <label for="firstName" class="form-label mt-2 ms-5 label-name">FirstName</label>
        <input style="width: 80%;" type="text" class="form-control mt-2 ms-5" id="firstName" name="firstName" placeholder="John" required>
    </div>
    <div class="mb-3">
        <label for="lastName" class="form-label mt-2 ms-5 label-name">LastName</label>
        <input style="width: 80%;" type="text" class="form-control mt-2 ms-5" id="lastName" name="lastName" placeholder="Doe" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label mt-2 ms-5 label-name">Email</label>
        <input style="width: 80%;" type="email" class="form-control mt-2 ms-5" id="email" name="email" placeholder="name@example.com" required>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label mt-2 ms-5 label-name">Phone No</label>
        <input style="width: 80%;" type="number" class="form-control mt-2 ms-5" id="phone" name="phone" placeholder="1234567890" required>
    </div>
    <div class="mb-3">
        <label for="summary" class="form-label mt-2 ms-5 label-name">Summary of your idea</label>
        <textarea style="width: 80%;" class="form-control mt-2 ms-5" id="summary" name="summary" placeholder="Write a brief summary about your idea" rows="3" required></textarea>
    </div>
    <div class="mb-3">
        <label for="pitchDeck" class="form-label mt-2 ms-5 label-name">Upload Pitch Deck</label>
        <input style="width: 80%;" type="file" class="form-control mt-2 ms-5" id="pitchDeck" name="pitchDeck" required>
    </div>
    <button type="submit" class="submit-btn ms-5 mb-5">Submit</button>
</form>


    </div>
    <div class="col-lg-6 col-md-12 p-0">

      <img width="100%" height="100%" src="images/bila.jpg" class="" alt="">

    </div>
  </div>
 </div>




 

  



   
   

 
<footer style="background-color: #0A5098; padding: 40px 0; margin-top: 6%;">
  <div class="container">
    <div class="row gy-4">
      <!-- TechPro and Social Media Section -->
      <div class="col-lg-2 col-md-6 col-sm-12 footer">
        <h1 class="fw-bold"><span style="color: #E21C1C;">Tech</span>Pro</h1>
        <p class="fs-6 fw-light mb-2 follow">Follow Us On</p>
        <div class="d-flex">
          <a href="http://wa.me/2348086478810" class="me-3 " target="_blank"><i class="bi bi-whatsapp fs-4 follow"></i></a>
          <a href="https://www.facebook.com/profile.php?id=61566747027176&mibextid=LQQJ4d" target="blank" class="me-3 "><i class="bi bi-facebook fs-4 follow"></i></a>
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
      
      <!-- Resources Section -->
      <div class="col-lg-2 col-md-6 col-sm-12 footer">
        <h4 class="fw-bold follow">Links</h4>
        <ul class="list-unstyled">
          <li><a class="fs-6 fw-light  text" href="gaming.html"></a>Gaming</li>
          <li><a class="fs-6 fw-light text" href="events.html">Events</a></li>
          <li><a class="fs-6 fw-light  text" href="">Texh-A-Child</a></li>
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
        <h4 class="fw-bold follow">Links</h4>
        <ul class="list-unstyled ">
          <li><a class="fs-6 fw-light  text" href="#">Terms Of Use</a></li>
          <li><a class="fs-6 fw-light text" href="#">Privacy Policy</a></li>
          <li><a class="fs-6 fw-light text" href="#">Legal Notice</a></li>
        </ul>
      </div>
      
      <!-- Contact Section -->
      <div class="col-lg-3 col-md-6 col-sm-12 footer">
        <h4 class="fw-bold follow">Contact</h4>
        <p class="fs-6 fw-light text">103 Gbodofon Street, Ibadan Road, Osogbo.</p>
        <p class="fs-6 fw-light text">Phone: 08086478810</p>
      </div>
    </div>
  </div>
</footer> 



 
  
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
</html>