<?php
	
	include 'config.php'; // test

	if (isset($_POST['post_coment'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO feed (name, message, email) VALUES ('$name', '$message', '$email')";


    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
   <!-- Gaya tambahan yang diperlukan -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>KSDVR</title>
    <link rel="icon" href="el_github.jpg" type="image/icon type">
</head>
<body>
<script>
    document.addEventListener("DOMContentLoaded", function () {
      const navLinks = document.querySelectorAll(".navbar-nav .nav-link");
      navLinks.forEach(function (link) {
        link.addEventListener("click", function () {
          navLinks.forEach(function (link) {
            link.classList.remove("active");
          });
          this.classList.add("active");
        });
      });
    });
</script>
    <!-- <nav  class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark ">

        <div class="container">
    
          <a class="navbar-brand" href="#">
    
            KSDVR
    
          </a>
    
          <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
    
            <span class="navbar-toggler-icon"></span>
    
          </button>
    
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    
            <div class="offcanvas-header bg-dark">
    
              <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">MENU</h5>
    
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    
            </div>
    
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown link
                    </a>
          </div>
        </div>
      </nav> -->

      
      
      <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> -->
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light  fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand text-lg fs-2" href="#beranda">KSDVR</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse  justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="#about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="#location">Location</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="#feedback">Feedback</a>
                        </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
            
        <section id="beranda">
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="gedung.jpg" class="d-block w-100" alt="Slide 1">
                    </div>
                    <div class="carousel-item">
                        <img src="https://asset-a.grid.id/crop/0x0:0x0/945x630/photo/2022/09/23/coverjpg-20220923015242.jpg" class="d-block w-100" alt="Slide 2">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- Hero Section -->
            <header class="bg-light text-dark text-center py-5">
                <div class="container">
                    <h1 class="display-5" >Welcome to Company KSDVR</h1>
                    <p class="lead">Providing Quality Services Since 2022</p>
                </div>
            </header>
        </section>
        <!-- About Section -->
        <section id="about" class="py-5 text-center bg-dark text-light" style="height: 100vh; display: flex; flex-direction: column; align-items: center; justify-content: center;">
            <div class="container">
                <h2 class="mb-4">ABOUT US</h2>
                <p>
                    In the dynamic realm of the digital landscape, where every click matters and every impression leaves a lasting mark, there's a company that stands out in the world of web development—KSDVR. Born from the vision of delivering not just websites but digital experiences tailored to the unique needs of each client, KSDVR has become synonymous with innovation, affordability, and unparalleled service.

                    In the vast world of the internet, where every business needs a solid online presence, KSDVR is here to make your website dreams come true without breaking the bank.

                    Our mission at KSDVR is simple: we want to build the website you've always wanted. We believe your website should reflect your brand and help you reach your goals online.

                    What makes us stand out? We're all about keeping things affordable, especially for small and medium-sized businesses (UMKM). We understand that everyone deserves a great website, no matter the size of their business. So, we offer top-notch web development solutions that won't drain your budget.

                    At KSDVR, our team of skilled web developers is ready to turn your ideas into a fantastic website. Whether you're just starting or want to give your current site a makeover, we're here for you.

                    Choosing KSDVR means more than just getting a website. It means having a dedicated partner invested in your success. We work closely with you to create a website that not only looks great but also works well.

                    Your digital journey starts with KSDVR, where we blend innovation with affordability to bring your vision to life. Let's build your digital future together!
                </p>
            </div>
        </section>
        <svg style="background-color: #F8F9FA;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#212529" fill-opacity="1" d="M0,160L48,176C96,192,192,224,288,197.3C384,171,480,85,576,74.7C672,64,768,128,864,160C960,192,1056,192,1152,176C1248,160,1344,128,1392,112L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
        
        <!-- Services Section -->
        <section id="services" class="bg-light py-5" style="height: 100vh; display: flex; flex-direction: column; align-items: center; justify-content: center;">
            <h2 class="mb-4">SERVICES</h2>
            <div class="container">`
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="pertamina.png" href="https://www.pertamina.com/" class="card-img-top" alt="Service 1">
                            <div class="card-body">
                                <h5 class="card-title">Service 1</h5>
                                <p class="card-text">ini adalah jasa kami dalam pembuatan website pertamina.</p>
                             <a class="badge bg-dark text-wrap" href="https://www.pertamina.com/"> go to website</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="kci.png" class="card-img-top" alt="Service 2">
                            <div class="card-body">
                                <h5 class="card-title">Service 2</h5>
                                <p class="card-text">ini adalah jasa kami dalam pembuatan website komuter line.</p>
                                <a class="badge bg-dark text-wrap" href="https://commuterline.id/"> go to website</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="bri.png" class="card-img-top" alt="Service 3">
                            <div class="card-body">
                                <h5 class="card-title">Service 3</h5>
                                <p class="card-text">ini adalah jasa kami dalam pembuatan website bank rakyat indonesia.</p>
                                <a class="badge bg-dark text-wrap" href="https://bri.co.id/"> go to website</a>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </section>
        
        <svg style="background-color: #F8F9FA;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#212529" fill-opacity="1" d="M0,160L48,176C96,192,192,224,288,197.3C384,171,480,85,576,74.7C672,64,768,128,864,160C960,192,1056,192,1152,176C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        <section id="location" class="bg-dark text-light" style="height: 100vh; display: flex; flex-direction: column; align-items: center; justify-content: center;">
            <h2 class="mb-5">LOCATION</h2>
            <div style="width: 100%; height: 20rem;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d744183.6777721461!2d107.11973500178436!3d-6.671790049956943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6edb0fbe322169%3A0xc5e2f96ebe93eb06!2sMarkas%20Besar%20Adudu!5e0!3m2!1sen!2sid!4v1702348560938!5m2!1sen!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    </section>
        </div>
        <svg style="background-color: #F8F9FA;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#212529" fill-opacity="1" d="M0,160L48,176C96,192,192,224,288,197.3C384,171,480,85,576,74.7C672,64,768,128,864,160C960,192,1056,192,1152,176C1248,160,1344,128,1392,112L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
        
         <form  method="post" class="form">
        <section id="feedback" class="py-5" style="background-color: #F8F9FA;">
            <div class="container"> 
                <h2 class="mb-4 text-center">FEEDBACK</h2>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control"   id="name" name="name" placeholder="Your Name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">your Email</label>
                        <input class="form-control" id="email" name="email" rows="3" placeholder="Your email"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" name="message" id="message" rows="3" placeholder="Your Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="post_coment">Submit</button>
                </div>
            </section>
        </form>
        
        <!-- Footer Section -->
        <svg style="background-color: #F8F9FA;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#212529" fill-opacity="1" d="M0,160L48,176C96,192,192,224,288,197.3C384,171,480,85,576,74.7C672,64,768,128,864,160C960,192,1056,192,1152,176C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        <footer class="bg-dark text-white text-center py-4">
            &copy; 2022 Company KSDVR | Email: KemalSDVR@gmail.com | Phone: +62851-7437-2848
            <p>this my social media: </p>
        </footer>

        <!-- Admin Login Modal
        <div class="modal fade" id="adminLoginModal" tabindex="-1" aria-labelledby="adminLoginModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="adminLoginModalLabel">Admin Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body"> -->
                <!-- Admin Login Form
                <form>
                    <div class="mb-3">
                    <label for="adminUsername" class="form-label">Username</label>
                    <input type="text" class="form-control" id="adminUsername" placeholder="Enter your username">
                    </div>
                    <div class="mb-3">
                    <label for="adminPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="adminPassword" placeholder="Enter your password">
                    </div>
                    <button type="submit" class="btn" a href="admin.html">Login</button>
                </form>
                </div>
            </div>
            </div>
        </div> -->
 
    </body>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let isAdminLoggedIn = false;

            document.getElementById('adminLoginForm').addEventListener('submit', function (event) {
                event.preventDefault();

                // Perform client-side validation
                let adminUsername = document.getElementById('adminUsername').value;
                let adminPassword = document.getElementById('adminPassword').value;

                // For simplicity, you can hardcode a username and password for demonstration purposes
                if (adminUsername === 'admin' && adminPassword === 'password') {
                    isAdminLoggedIn = true;
                    // Additional logic for a successful login
                    console.log('Admin logged in');
                    // Hide the login modal
                    $('#adminLoginModal').modal('hide');
                    // Show the logout button
                    document.getElementById('adminLogoutBtn').style.display = 'inline-block';
                } else {
                    alert('Invalid username or password');
                }
            });

            document.getElementById('adminLogoutBtn').addEventListener('click', function () {
                isAdminLoggedIn = false;
                // Additional logic for logging out, clearing cookies, etc.
                console.log('Admin logged out');
                // Show the login modal
                $('#adminLoginModal').modal('show');
                // Hide the logout button
                document.getElementById('adminLogoutBtn').style.display = 'none';
            });
        });
    </script>
    </html>
