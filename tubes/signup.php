<?php 
require("functions.php");
if(isset($_POST["register"])){
    if(registrasi($_POST) > 0){
        echo "<script>alert ('User baru berhasil ditambahkan!')</script>";
    }else
    echo mysqli_error($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/login.css">
    <title>Sign Up | Musik</title>
</head>
<body>
    <!-- Login -->
    <div class="login">
        <form action="" method="post" autocomplete="off">
        <h1 class="text-center">DAFTAR SEKARANG</h1>
        <div class="form-group">
            <label class="form-label" for="email">Nama :</label>
            <input class="form-control" type="name" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label class="form-label" for="email">Email :</label>
            <input class="form-control" type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label class="form-label" for="password">Password :</label>
            <input class="form-control" type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label class="form-label" for="password2">Ulangi Password :</label>
            <input class="form-control form-control-lg" type="password" id="password2" name="password2" required>
        </div>

        <p>Sudah Punya Akun ? <a href="login.php">Login Disini</a></p>

        <input class="btn btn-success w-100" type="submit" value="SIGN UP" name="register">
        </form>
    </div>




<!-- Script Bootstrap & AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>AOS.init();</script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>