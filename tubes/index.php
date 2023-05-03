<?php 
$musik = [
  ['img'=> 'img/music/cupid.png',
  'judul'=>'Cupid',
  'penyanyi'=>'FIFTY FIFTY',
  'lagu'=>'music/cupid.mp3'],
  ['img'=> 'img/music/angelly.jpeg',
  'judul'=>'Angel Like You',
  'penyanyi'=>'Miley Cyrus',
  'lagu'=>'music/angellikeyou.mp3'],
  ['img'=> 'img/music/thoseeyes.jpeg',
  'judul'=>'Those Eyes',
  'penyanyi'=>'New West',
  'lagu'=>'music/thoseeyes.mp3'],
  ['img'=> 'img/music/rightnow.jpg',
  'judul'=>'Right Now',
  'penyanyi'=>'One Direction',
  'lagu'=>'music/rightnow.mp3'],
  ['img'=> 'img/music/sial.jpg',
  'judul'=>'Sial',
  'penyanyi'=>'Mahalini',
  'lagu'=>'music/sial.mp3'],
  ['img'=> 'img/music/taksegampangitu.jpeg',
  'judul'=>'Tak Segampang Itu',
  'penyanyi'=>'Anggi Marito',
  'lagu'=>'music/taksegampangitu.mp3'],
  ['img'=> 'img/music/flower.jpg',
  'judul'=>'FLOWER',
  'penyanyi'=>'JISOO',
  'lagu'=>'music/flower.mp3'],
];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Musik</title>
    <!-- JS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="script/pause.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

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
<!-- Jumbotron -->
  <section class="jumbotron text-center">
    <h1 class="display-4">Hello, world!</h1>
    <p class="lead">Dengarkan Musik Secara Gratis</p>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,256L14.1,261.3C28.2,267,56,277,85,256C112.9,235,141,181,169,154.7C197.6,128,226,128,254,144C282.4,160,311,192,339,181.3C367.1,171,395,117,424,96C451.8,75,480,85,508,96C536.5,107,565,117,593,133.3C621.2,149,649,171,678,197.3C705.9,224,734,256,762,240C790.6,224,819,160,847,160C875.3,160,904,224,932,240C960,256,988,224,1016,186.7C1044.7,149,1073,107,1101,106.7C1129.4,107,1158,149,1186,181.3C1214.1,213,1242,235,1271,250.7C1298.8,267,1327,277,1355,240C1383.5,203,1412,117,1426,74.7L1440,32L1440,320L1425.9,320C1411.8,320,1384,320,1355,320C1327.1,320,1299,320,1271,320C1242.4,320,1214,320,1186,320C1157.6,320,1129,320,1101,320C1072.9,320,1045,320,1016,320C988.2,320,960,320,932,320C903.5,320,875,320,847,320C818.8,320,791,320,762,320C734.1,320,706,320,678,320C649.4,320,621,320,593,320C564.7,320,536,320,508,320C480,320,452,320,424,320C395.3,320,367,320,339,320C310.6,320,282,320,254,320C225.9,320,198,320,169,320C141.2,320,113,320,85,320C56.5,320,28,320,14,320L0,320Z"></path></svg>
  </section>
<!-- Akhir Jumbotron -->
<!-- Slider -->
  <section  class="slider" class="bg-white">
    <div id="most-played"></div>
    <h2 data-aos="fade-up" >Most Played Music</h2>
    <div id="carouselExampleControls" class="carousel slide bg-white" data-ride="carousel" >
      <div class="carousel-inner container ">
      <!-- Awal Slider -->
        <div class="carousel-item active bg-white">
          <div class="cards-wrapper"data-aos="fade-up">
            <div class="card">
              <img src="img/music/komang.jpeg" class="card-img" alt="img">
                <div class="card-body card-img-overlay"></div>
                <h5 class="card-title">Komang</h5>
                <p class="card-text">Raim Laode</p>
                <audio controls class="audio-ctrl">
                    <source src="music/komang.mp3" type="audio/mpeg">
                  </audio>
            </div>
          </div>
        </div>
    <!-- Variabel Slider - Musik -->
          <?php foreach ($musik as $msk) :?>
            <div class="carousel-item">
              <div class="cards-wrapper">
                <div class="card">
                  <img src= <?=$msk['img']; ?> class="card-img" alt="img">
                  <div class="card-body card-img-overlay"></div>
                  <h5 class="card-title"><?= $msk['judul']; ?></h5>
                  <p class="card-text"><?= $msk['penyanyi']; ?></p>
                  <audio controls class="audio-ctrl bg-white">
                    <source src="<?= $msk['lagu']; ?>" type="audio/mpeg">
                  </audio>
                </div>
              </div>
            </div>
          <?php endforeach ?>
      </div>
    <!-- Button Slider -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <!-- Akhir Slider -->
  <!-- Dengarkan Musik Lainnya -->
  <section id="lainnya" class="lainnya">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,224L15,192C30,160,60,96,90,106.7C120,117,150,203,180,234.7C210,267,240,245,270,218.7C300,192,330,160,360,154.7C390,149,420,171,450,160C480,149,510,107,540,117.3C570,128,600,192,630,202.7C660,213,690,171,720,138.7C750,107,780,85,810,101.3C840,117,870,171,900,213.3C930,256,960,288,990,298.7C1020,309,1050,299,1080,266.7C1110,235,1140,181,1170,154.7C1200,128,1230,128,1260,149.3C1290,171,1320,213,1350,197.3C1380,181,1410,107,1425,69.3L1440,32L1440,0L1425,0C1410,0,1380,0,1350,0C1320,0,1290,0,1260,0C1230,0,1200,0,1170,0C1140,0,1110,0,1080,0C1050,0,1020,0,990,0C960,0,930,0,900,0C870,0,840,0,810,0C780,0,750,0,720,0C690,0,660,0,630,0C600,0,570,0,540,0C510,0,480,0,450,0C420,0,390,0,360,0C330,0,300,0,270,0C240,0,210,0,180,0C150,0,120,0,90,0C60,0,30,0,15,0L0,0Z"></path></svg>
    <div class="container">
      <div class="row" data-aos="fade-right">
        <div class="col" >
          <h2 >Dengarkan Musik Lainnya</h2>
        </div>
      </div>
  <!-- List Musik Kecil -->
      <?php foreach($musik as $msk): ?>
      <div class="small-song  ms-4 col-md-8 row align-items-center">
        <div class="col-1 h3"></div>
        <div class="col d-flex">
          <img class="rounded m-1" src="<?=$msk['img']; ?>" style="width:50px;height:50px;object-fit:cover;">
          <div class="ms-1 mt-1">
            <div><?= $msk['judul']; ?></div>
            <small class="text-secondary"><?= $msk['penyanyi']; ?></small>
          </div>
        </div>
          <div class="col mt-1">
            <audio controls class="audio-ctrl">
              <source src="<?= $msk['lagu']; ?>" type="audio/mpeg">
            </audio>
          </div>
      </div>
      <?php endforeach ?>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#000000" fill-opacity="1" d="M0,128L17.1,154.7C34.3,181,69,235,103,218.7C137.1,203,171,117,206,96C240,75,274,117,309,138.7C342.9,160,377,160,411,154.7C445.7,149,480,139,514,165.3C548.6,192,583,256,617,272C651.4,288,686,256,720,229.3C754.3,203,789,181,823,197.3C857.1,213,891,267,926,277.3C960,288,994,256,1029,224C1062.9,192,1097,160,1131,128C1165.7,96,1200,64,1234,74.7C1268.6,85,1303,139,1337,181.3C1371.4,224,1406,256,1423,272L1440,288L1440,320L1422.9,320C1405.7,320,1371,320,1337,320C1302.9,320,1269,320,1234,320C1200,320,1166,320,1131,320C1097.1,320,1063,320,1029,320C994.3,320,960,320,926,320C891.4,320,857,320,823,320C788.6,320,754,320,720,320C685.7,320,651,320,617,320C582.9,320,549,320,514,320C480,320,446,320,411,320C377.1,320,343,320,309,320C274.3,320,240,320,206,320C171.4,320,137,320,103,320C68.6,320,34,320,17,320L0,320Z"></path></svg>
  </section>
  <!-- AKhir Musik Kecil -->

  <!-- Footer -->
  
  <footer class="p-4 row bg-black text-white" >
    
      <div class="col-3 ms-5">
        <h5>Menu Cepat</h5>
        <ul class="nav flex-column" >
          <li><a href="#home" style="text-decoration=none">Home</a></li>
          <li><a href="#" style="text-decoration=none">Library</a></li>
          <li><a href="genre.php" style="text-decoration=none">Genre</a></li>
          <li><a href="#most-played" style="text-decoration=none">Most Played Music</a></li>
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