<?php
    session_start();

    if (!isset($_SESSION["token"])) {
      header("Location: ./admin_log.php");   
    }
?>

<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css"> <!-- Additional styles if needed -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>ADMIN</title>
    <link rel="icon" href="el_github.jpg" type="image/icon type">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#beranda">KSDVR (admin)</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                      <a href="admin_out.php">admin out</a>
                    </li>
                    <!-- Add other navigation links as needed -->
                </ul>
            </div>
        </div>
    </nav>
    <form action='delet.php' method='post'>
        <div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
        <div class='modal-dialog'>
          <div class='modal-content'>
            <div class='modal-header'>
              <h5 class='modal-title' id='exampleModalLabel'>warning</h5>
              <span>&#9888;</span> 
              <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
            </div>
            <div class='modal-body'>
              Apakah anda ingin menghapus?
              <input type='hidden' name='id' id='user_id'>
            </div>
            <div class='modal-footer'>
              <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
              <button type='submit' name='hapus' class='btn btn-danger'>Hapus</button>
            </div>
          </div>
        </div>
      </div>
    </form>

    <div class="container">
    <div class="table-responsive">
      <table class="table table-bordered table-striped">
        <thead class="table-dark">


        <tr>
          <th>NO</th>
          <th>Nama</th>
          <th>email</th>
          <th>Pesan</th>
          <th>Waktu</th>
          <th>Action</th>
 
        </tr>
      </thead>
      <tbody id="table-body">
        <?php
        $sql = "SELECT * FROM feed";
        $result = $conn->query($sql);
        $nomor_urut = 1;

        while ($feed = $result->fetch_array()) {
          echo "<tr>";
          echo "<th scope='row'>" . $nomor_urut . "</th>";
          echo "<td>" . $feed['name'] . "</td>";
          echo "<td>" . $feed['email'] . "</td>";
          echo "<td>" . $feed['message'] ."</td>";
          echo "<td>" . $feed['waktu'] . "</td>";
          echo "<td>
          <button type='button' class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#exampleModal' onclick='hapus($feed[id]);'>
          Hapus
          </button>
                        </td>";
                        echo "</tr>";
                        $nomor_urut += 1;
                      }
                      ?>


    <!-- Your content goes here -->
    <div class="container">
        <h1>Welcome to the Admin Page</h1>
        <!-- Add your admin-specific content here -->
    </div>

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
      
    function hapus(id) {
      const user_id = document.getElementById('user_id');
      user_id.value = id;
    }
    </script>
</body>
</html>
