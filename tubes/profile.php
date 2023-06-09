<?php 
session_start();

if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
$userId = $_SESSION['user_id'];
require("functions.php");
$query ="SELECT * FROM user WHERE user_id = $userId";
$result = mysqli_query($conn,$query);

$title = "Profile";
$style = "profile.css";
require('views/partials/header.php'); 
require('views/partials/nav.php');
?>
<?php 
// Memeriksa apakah ada hasil
if (mysqli_num_rows($result) > 0) {
  // Mendapatkan data profil pengguna
  $row = mysqli_fetch_assoc($result);
  
  // Mendapatkan nama, email, dan password
  $nama = $row['nama'];
  $email = $row['email'];
  $password = $row['password'];

  // Menampilkan data profil
  ?>
  <div class="container">
      <div class="row">
          <div class="col-md-6 offset-md-3 mt-4">
              <div class="card mt-5 mb-2">
                  <img src="img/user.png" class="card-img-top mt-4" alt="Foto Profil">
                  <div class="card-body">
                      <h5 class="card-title text-center"><?php echo strtoupper($nama); ?></h5>
                  </div>
                  <ul class="list-group list-group-flush">
                      <li class="list-group-item">Email: <?php echo $email; ?></li>
                      <li class="list-group-item">Password: <?php echo $password; ?></li>
                  </ul>
                  <div class="card-body">
                      <a href="#" class="card-link">Edit Profil</a>
                      <a href="#" class="card-link">Ubah Kata Sandi</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <?php
}
?>
<?php require("views/partials/footer.php"); ?>