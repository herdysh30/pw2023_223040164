<?php
session_start();
if(!isset($_SESSION["login"])){
  header("Location: login.php");
  exit;
}
require 'functions.php';


//pagination
  //konfigurasi
  $jumlahDataPerHalaman = 5;
  $jumlahData = count(query("SELECT * FROM song"));
  $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
  $halamanAktif = ( isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
  $awalData = ( $jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;


//tombol cari ditekan
if(isset($_GET["cari_user"])){
  $keyword = $_GET['keyword_user'];
  $query = "SELECT * FROM user WHERE nama LIKE '%$keyword%' OR password LIKE '%$keyword%' OR email LIKE '%$keyword%' OR role LIKE '%$keyword%'";
  $user = query($query);
}else{
  $user = query("SELECT * FROM user");
}
if(isset($GET["cari_musik"])){
  $key = $_GET['keyword_musik'];
  $quer = "SELECT * FROM song WHERE judul LIKE '%$keyw%' OR penyanyi LIKE '%$key%'";
  $song = query($quer);
}else{
  $song = query("SELECT * FROM song NATURAL JOIN nama_category LIMIT $awalData, $jumlahDataPerHalaman");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Musik</title>
    <!-- JS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/admin.css">
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
        <ul class="nav nav-pills container align-item-center d-flex" id="pills-tab" role="tablist">
			    <li class="nav-item" role="presentation">
		        <button class="text-white nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Dashboard</button>
			   </li>
			    <li class="nav-item" role="presentation">
			      <button class="text-white nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Users</button>
			    </li>
			    <li class="nav-item" role="presentation">
			      <button class="text-white nav-link" id="pills-musik-tab" data-bs-toggle="pill" data-bs-target="#pills-musik" type="button" role="tab" aria-controls="pills-musik" aria-selected="false">Musik</button>
			    </li>
		    </ul>
        <img class="rounded-circle ms-2" src="img/user.png" style="width:40px;height:40px">
        <li class="nav-item dropdown d-flex">
          <a class="nav-link dropdown-toggle text-white ms-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hi, Admin
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><a class="dropdown-item" href="#">Account Setting</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
          </ul>
        </li>
      </div>
    </div>
  </nav>
<!-- Akhir Navbar -->
<!-- List Menu -->
<div class="hero-area text-black pt-5 mt-5">
	<div class="nav-spacer"></div>
		
        <!-- Menu Dashboard -->
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active container" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
            <div class="m-1 ms-4 col-md-6 row align-items-center">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis vitae adipisci placeat odit harum dolorem, fugiat esse omnis atque quas neque deserunt error nulla, dolor consectetur explicabo voluptas iste incidunt cupiditate! Veritatis ratione delectus cupiditate ab nihil rerum at rem iste harum facere blanditiis, dicta, vel, nemo similique. Doloribus, molestiae?</p>
            </div>
          </div>
        <!-- Menu Admin -->
          <div class="tab-pane fade container" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
            <h1 class="text-center">Daftar User</h1>
            <div class="">
              <button class="tambah btn mb-1 justify-content-center" >
              <h4><a href="admin/tambah.user.php"><i class="bi bi-person-fill-add"></i></a></h4>
              </button>
              
              <form class="d-flex col-4" role="search" action="" method="get" autocomplete="off">
                <input class="form-control form-control-sm me-2" type="search" placeholder="Masukan Keyword Pencarian" aria-label="Search" name="keyword_user" id="keyword_user" size="10">
                <button class="btn btn-outline-success" type="submit" name="cari_user">Cari</button>
              </form>


              
              <br>

              <div id="search-container">
                <?php if($user) : ?>
                <table cellpadding="10" cellspacing="0" class="table table-bordered table-sm table-responsive">
                  <thead>
                    <th scope="col">No.</th>
                    <th scope="col">Aksi</th>
                    <th scope="col">User_ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Password</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach($user as $row) : ?>
                      <tr>
                      <td><?= $i; ?></td>
                      <td class="text-center">
                        <a href="admin/ubah.user.php?user_id=<?= $row["user_id"]; ?>"><i class="edit bi bi-pencil-square me-2"></i></a>
                        <a href="admin/hapus.user.php?user_id=<?= $row["user_id"]; ?>" onclick="return confirm('Yakin ?')"><i class="hapus bi bi-trash3"></i></a>
                      </td>
                      <td><?= $row["user_id"]; ?></td>
                      <td><?= $row["nama"]; ?></td>
                      <td><?= $row["password"]; ?></td>
                      <td><?= $row["email"]; ?></td>
                      <td><?= $row["role"]; ?></td>
                    </tr>
                    <?php $i++ ?>
                    <?php endforeach; ?>
                  </tbody>
                </table>
                <?php else : ?>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="alert alert-danger" role="alert">
                        Data tidak ditemukan!
                      </div>
                    </div>
                  </div>
                  <?php endif; ?>
              </div>
            </div>
          </div>
          <!-- Menu Lagu -->
          <div class="tab-pane fade container" id="pills-musik" role="tabpanel" aria-labelledby="pills-musik-tab" tabindex="0">
          <h1 class="text-center">Daftar Musik</h1>
            <div class="col-md-8">
            <button class="tambah btn justify-content-center" >
              <h4><a href="admin/tambah.lagu.php"><i class="bi bi-file-earmark-plus-fill"></i></a></h4>
              </button>
            <form class="d-flex col-4 mb-3 ms-2" role="search" action="" method="get" autocomplete="off">
                <input class="form-control form-control-sm me-2" type="search" placeholder="Masukan Keyword Pencarian" aria-label="Search" name="keyword_musik" id="keyword_musik" size="10">
                <button class="btn btn-outline-success" type="submit" name="cari_musik">Cari</button>
              </form>
              <!-- Nav Page -->
              <div id="navigation">
                <?php if($halamanAktif > 1) :?>
                  <a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
                  <?php endif; ?>
                  <?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                    <?php if($i == $halamanAktif): ?>
                      <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: black;"><?= $i; ?></a>
                      <?php else : ?>
                        <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
                        <?php endif; ?>
                        <?php endfor; ?>
                        <?php if($halamanAktif < $jumlahHalaman) :?>
                          <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
                          <?php endif; ?>
                </div>
                <div id="search-container-musik">
                <?php if($song) : ?>
                <table class="song-table table table-bordered table-sm table-responsive">
                  <thead>
                    <th>No.</th>
                    <th>Aksi</th>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Penyanyi</th>
                    <th>Kategori</th>
                  </thead>
                  <tbody>
                    <?php $n = 1; ?>
                    <?php foreach($song as $row) : ?>
                  <tr class="text-center align-items-center">
                      <td class="justify-content-center"><?= $n; ?></td>
                      <td class="text-center">
                        <a href="admin/ubah.musik.php?song_id=<?= $row["song_id"]; ?>"><i class="edit bi bi-pencil-square me-2"></i></a>
                        <a href="admin/hapus.lagu.php?song_id=<?= $row["song_id"]; ?>" onclick="return confirm('Yakin ?')"><i class="hapus bi bi-trash3"></i></a>
                      </td>
                      <td><img src="img/music/<?php echo $row["img"]; ?>" width="100"></td>
                      <td><?= $row["judul"]; ?></td>
                      <td><?= $row["penyanyi"]; ?></td>
                      <td><?= strtoupper($row["category"]); ?></td>
                    </tr>
                    <?php $n++ ?>
                    <?php endforeach; ?>
                  </tbody>
                  </table>
                  <?php else : ?>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="alert alert-danger" role="alert">
                        Data tidak ditemukan!
                      </div>
                    </div>
                  </div>
                  <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
  </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script/script.js"></script>
</body>
</html>