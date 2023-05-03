<?php 
$pop = [
['img'=>'img/music/mesinwaktu.jpeg',
'judul'=>'Mesin Waktu',
'penyanyi'=>'Budi Doremi',
],
['img'=>'img/music/sangdewi.jpeg',
'judul'=>'Sang Dewi',
'penyanyi'=>'Lyodra & Andi Rianto',
],
['img'=>'img/music/takinginusai.jpg',
'judul'=>'Tak Ingin Usai',
'penyanyi'=>'Keisya Levronka',
],
['img'=>'img/music/lantas.jpeg',
'judul'=>'Lantas',
'penyanyi'=>'Juicy Juicy',
],
];
$jpop = [
['img'=>'img/music/shinu.jpeg',
'judul'=>'Shinunoga E-Wa',
'penyanyi'=>'Fujii Kaze',
],
['img'=>'img/music/lemon.png',
'judul'=>'Lemon',
'penyanyi'=>'Kenshi Yonezu',
],
['img'=>'img/music/pretender.png',
'judul'=>'Pretender',
'penyanyi'=>'Official Hige Dandism',
],
['img'=>'img/music/yoru.jpg',
'judul'=>'Yoru ni Kakeru',
'penyanyi'=>'YOASOBI',
],
];
$kpop = [
['img'=>'img/music/flower.jpg',
'judul'=>'Flower',
'penyanyi'=>'FLOWER',
],
['img'=>'img/music/shutdown.jpeg',
'judul'=>'Shut Down',
'penyanyi'=>'BLACKPINK',
],
['img'=>'img/music/seven.jpg',
'judul'=>'손오공',
'penyanyi'=>'SEVENTEEN',
],
['img'=>'img/music/hypeboy.jpg',
'judul'=>'Hype Boy',
'penyanyi'=>'NewJeans',
],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Genre | Musik</title>
    <!-- JS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="pause.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/genre.css">
</head>
<body id="home">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm fixed-top"data-bs-theme="dark">
    <div class="container">
      <a class="navbar-brand" href="index.php">Musik</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Library</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#home">Genre</a>
          </li>
        </ul>
        <form class="d-flex position-absolute top-30 start-50 translate-middle-x" role="search">
          <input class="form-control me-2" type="search" placeholder="Cari Musik" aria-label="Search">
          <b utton class="btn btn-outline-success" type="submit">Search</b>
        </form>
        <img class="rounded-circle ms-2" src="img/user.png" style="width:40px;height:40px">
        <li class="nav-item dropdown d-flex">
          <a class="nav-link dropdown-toggle text-white ms-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hi, User
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
<!-- Start Category Area -->
  <!-- Pop -->
<h5 class="song-category container mb-4">Pop <small class="float-end"><a href="#">View More <i class="bi bi-box-arrow-up-right"></i></a></small></h5>
    <section class="pop container  d-flex">
      <?php foreach($pop as $pop){ ?>
        <div class="ms-5" style="width:200px;">
        <div style="position:relative;">
            <img src="<?= $pop['img']; ?>" class="img-musik rounded img-fluid">
            <a href="#">
                <div class="musik-hover rounded" >
                    <i class="playbutton h1 bi bi-play"></i>
                </div>
            </a>
        </div>
            <div>
                <div class="lead text-white"><?= $pop['judul']; ?></div>
                <small class="text-secondary"><?= $pop['penyanyi']; ?></small>
            </div>
        </div>
        <?php } ?>
        <!-- End Pop -->
    </section>
    <!-- JPOP -->
<h5 class="song-cgry container mb-4">J-Pop <small class="float-end"><a href="#">View More <i class="bi bi-box-arrow-up-right"></i></a></small></h5>
    <section class="jazz container  d-flex">
      <?php foreach($jpop as $jpop){ ?>
        <div class="ms-5" style="width:200px;">
        <div style="position:relative;">
            <img src="<?= $jpop['img']; ?>" class="img-musik rounded img-fluid">
            <a href="#">
                <div class="musik-hover rounded" >
                    <i class="playbutton h1 bi bi-play"></i>
                </div>
            </a>
        </div>
            <div>
                <div class="lead text-white"><?= $jpop['judul']; ?></div>
                <small class="text-secondary"><?= $jpop['penyanyi']; ?></small>
            </div>
        </div>
        <?php } ?>
      </section>
      <!-- End JPop -->
    <!-- KPOP -->
<h5 class="song-cgry container mb-4">K-Pop <small class="float-end"><a href="#">View More <i class="bi bi-box-arrow-up-right"></i></a></small></h5>
    <section class="jazz container  d-flex">
      <?php foreach($kpop as $kpop){ ?>
        <div class="ms-5" style="width:200px;">
        <div style="position:relative;">
            <img src="<?= $kpop['img']; ?>" class="img-musik rounded img-fluid">
            <a href="#">
                <div class="musik-hover rounded" >
                    <i class="playbutton h1 bi bi-play"></i>
                </div>
            </a>
        </div>
            <div>
                <div class="lead text-white"><?= $kpop['judul']; ?></div>
                <small class="text-secondary"><?= $kpop['penyanyi']; ?></small>
            </div>
        </div>
        <?php } ?>
      </section>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#000000" fill-opacity="1" d="M0,128L17.1,154.7C34.3,181,69,235,103,218.7C137.1,203,171,117,206,96C240,75,274,117,309,138.7C342.9,160,377,160,411,154.7C445.7,149,480,139,514,165.3C548.6,192,583,256,617,272C651.4,288,686,256,720,229.3C754.3,203,789,181,823,197.3C857.1,213,891,267,926,277.3C960,288,994,256,1029,224C1062.9,192,1097,160,1131,128C1165.7,96,1200,64,1234,74.7C1268.6,85,1303,139,1337,181.3C1371.4,224,1406,256,1423,272L1440,288L1440,320L1422.9,320C1405.7,320,1371,320,1337,320C1302.9,320,1269,320,1234,320C1200,320,1166,320,1131,320C1097.1,320,1063,320,1029,320C994.3,320,960,320,926,320C891.4,320,857,320,823,320C788.6,320,754,320,720,320C685.7,320,651,320,617,320C582.9,320,549,320,514,320C480,320,446,320,411,320C377.1,320,343,320,309,320C274.3,320,240,320,206,320C171.4,320,137,320,103,320C68.6,320,34,320,17,320L0,320Z"></path></svg>
      <!-- End JPop -->
<!-- Footer -->
  
<footer class="p-4 row bg-black text-white" >
    
    <div class="col-3 ms-5">
      <h5>Menu Cepat</h5>
      <ul class="nav flex-column" >
        <li><a href="index.php" style="text-decoration=none">Home</a></li>
        <li><a href="#" style="text-decoration=none">Library</a></li>
        <li><a href="#home" style="text-decoration=none">Genre</a></li>
      </ul>
    </div>
    <div class="col-3">
      <h5>Menu Cepat</h5>
    </div>
    <div class="col-4 d-flex" >
      <h4 class="m-2"><a href="#"><i class="bi bi-facebook"></i></a></h5>
      <h4 class="m-2"><a href="#"><i class="bi bi-twitter"></i></a></h5>
      <h4 class="m-2"><a href="#"><i class="bi bi-instagram"></i></a></h5>
    </div>
    <span class="text-center text-bottom">Copyright &copy Herdy Sya'banul Hakim</span>
</footer>
<!-- Akhir Footer -->





    <!-- Script Bootstrap & AOS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>AOS.init();</script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>