<?php 
$userId = $_SESSION['user_id'];
$hasil = mysqli_query($conn, "SELECT * FROM user WHERE user_id = $userId");
$kolom = mysqli_fetch_assoc($hasil);
$name = $kolom['nama'];

?>

<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm fixed-top"data-bs-theme="dark">
    <div class="container">
      <a class="navbar-brand" href="index.php">Musik</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link <?= ($_SERVER['REQUEST_URI'] === BASE_URL . 'index.php') ? 'active' : '' ; ?>" aria-current="page" href="#home">Home</a>
          </li>
          <li class='nav-item'>
            <a class="nav-link " href='#slider'>Populer</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='#lainnya'>Lainnya</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#genre">Genre</a>
          </li>
        </ul>
        <div class="d-flex position-absolute top-30 start-50 translate-middle-x">
            <input class="form-control me-2" type="text" placeholder="Cari Musik" id="pencarian">
            <button class="btn btn-outline-success" onclick="searchAndScroll()">Search</button>
        </div>

        <img class="rounded-circle ms-2" src="img/user.png" style="width:40px;height:40px">
        <li class="nav-item dropdown d-flex">
          <a class="nav-link dropdown-toggle text-white ms-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hi, <?= strtoupper($name); ?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../tubes/profile.php">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../tubes/logout.php">Log Out</a></li>
          </ul>
        </li>
      </div>
    </div>
  </nav>