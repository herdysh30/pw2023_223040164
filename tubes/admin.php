<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Musik</title>
    <!-- JS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="pause.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/admin.css">

  </head>
<body id="home">
    <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm fixed-top"data-bs-theme="dark">
    <div class="container">
      <a class="navbar-brand" href="#home">Musik</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Library</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="genre.php">Genre</a>
          </li>
        </ul>
        <form class="d-flex position-absolute top-30 start-50 translate-middle-x" role="search">
          <input class="form-control me-2" type="search" placeholder="Cari Musik" aria-label="Search">
          <b utton class="btn btn-outline-success" type="submit">Search</b>
        </form>

        <img class="rounded-circle ms-2" src="img/user.png" style="width:40px;height:40px">
        <li class="nav-item dropdown d-flex">
          <a class="nav-link dropdown-toggle text-white ms-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hi, Admin
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><a class="dropdown-item" href="#">Account Setting</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Log Out</a></li>
          </ul>
        </li>
      </div>
    </div>
  </nav>
<!-- Akhir Navbar -->
<!-- Header -->
<header>
<section class="jumbotron p-5 mt-2">
    <h1 class="display-5">ADMIN AREA</h1>
    <div class="main-nav d-flex ">
        <div class="menu">
            <div class="nav-item-active mx-2"><a href="">Home</a></div>
            <div class="nav-item mx-2"><a href="">Music</a></div>
        </div>
    </div>
</section>
<header>

<!-- Header -->
</body>
</html>