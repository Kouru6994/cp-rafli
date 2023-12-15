<?php
    session_start();
    if (isset($_POST["logout"])) {
        session_destroy();
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="el_github.jpg" type="image/icon type">
  <!-- Include Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
  <title>Document</title>
</head>
<body data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
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

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                        <h2 class="card-title text-center">Admin Log out</h2>
                        
                          
                            <form style="text-align:center" ction='admin-out.php' method='post'>
                                  <button type='submit' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#exampleModal' name="logout">Log Out</button>
                                  <a class="btn btn-primary" type="submit" href="admin.php">Kembali</a>
                                </form>
                                
                    
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

</body>

</html>
</body>
</html>