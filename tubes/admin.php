<?php
require 'functions.php';
$result = mysqli_query($conn, "SELECT * FROM user,song");
$user = query("SELECT * FROM user");
$song = query("SELECT * FROM song");

//tombol cari ditekan
if(isset($_POST["cari_user"])){
  $user = cari_user($_POST["keyword_user"]);
}
if(isset($_POST["cari_musik"])){
  $song = cari_musik($_POST["keyword_musik"]);
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
            <li><a class="dropdown-item" href="#">Log Out</a></li>
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
              <button class="mb-3" >
                <a href="admin/tambah.user.php">Tambah Data</a>
              </button>
              <form action="" method="post">
                <input type="text" name="keyword_user" size="40" placeholder="Masukan Keyword Pencarian" autocomplete="off">
                <button type="submit" name="cari_user">Cari !</button>
              </form>
              <br>
                <table cellpadding="10" cellspacing="0" class="table table-bordered table-sm table-responsive">
                  <th>No.</th>
                  <th>Aksi</th>
                  <th>User_ID</th>
                  <th>Nama</th>
                  <th>Password</th>
                  <th>Email</th>
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
                  </tr>
                  <?php $i++ ?>
                  <?php endforeach; ?>

                </table>
            </div>
          </div>
          <!-- Menu Lagu -->
          <div class="tab-pane fade container" id="pills-musik" role="tabpanel" aria-labelledby="pills-musik-tab" tabindex="0">
          <h1 class="text-center">Daftar Musik</h1>
            <div class="col-md-8 table-responsive">
            <button class="mb-3">
              <a href="admin/tambah.lagu.php">Tambah Data</a>
            </button>
            <form action="" method="post">
                <input type="text" name="keyword_musik" size="40" placeholder="Masukan Keyword Pencarian" autocomplete="off">
                <button type="submit" name="cari_musik">Cari !</button>
              </form>
                <table class="song-table table table-bordered table-sm">
                  <th>No.</th>
                  <th>Aksi</th>
                  <th>Gambar</th>
                  <th>Judul</th>
                  <th>Penyanyi</th>
                  <th></th>
                  <?php $n = 1; ?>
                  <?php foreach($song as $row) : ?>
                  <tr class="text-center align-items-center">
                      <td><?= $n; ?></td>
                      <td class="text-center">
                        <a href="admin/ubah.musik.php?song_id=<?= $row["song_id"]; ?>"><i class="edit bi bi-pencil-square me-2"></i></a>
                        <a href="admin/hapus.lagu.php?song_id=<?= $row["song_id"]; ?>" onclick="return confirm('Yakin ?')"><i class="hapus bi bi-trash3"></i></a>
                      </td>
                      <td><img src="img/music/<?php echo $row["img"]; ?>" width="100"></td>
                      <td><?= $row["judul"]; ?></td>
                      <td><?= $row["penyanyi"]; ?></td>
                      <td></td>

                  </tr>
                  <?php $n++ ?>
                  <?php endforeach; ?>

                </table>
            </div>
          </div>
        </div>
  </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>