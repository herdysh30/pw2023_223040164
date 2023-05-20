<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/login.css">
    <title>Login | Musik</title>
</head>
<body>
    <!-- Login -->
    <div class="login">
        <form>
            <h1 class="text-center">LOG IN</h1>
        <div class="form-group">
            <label class="form-label" for="email">Email :</label>
            <input class="form-control" type="email" id="email" required>
        </div>
        <div class="form-group">
            <label class="form-label" for="password">Password :</label>
            <input class="form-control" type="password" id="password" required>
        </div>
        <div class="form-group">
            <input class="form-check-input" type="checkbox" id="check">
            <label class="form-check-label" for="check">Remember Me</label>
        </div>
        <p>Belum Punya Akun ? <a href="signup.php">Daftar Sekarang!</a></p>

        <input class="btn btn-success w-100" type="submit" value="SIGN IN">
        </form>
    </div>




<!-- Script Bootstrap & AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>AOS.init();</script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>