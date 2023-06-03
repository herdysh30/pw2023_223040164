<?php require('partials/header.php'); 
 require('partials/nav.php'); 
 
$result = mysqli_query($conn, "SELECT * FROM song");
$song = query("SELECT * FROM song");
 ?>


<!-- Jumbotron -->
<section class="jumbotron text-center" id="home">
    <h1 class="display-4 ">Lorem, ipsum.</h1>
    <p class="lead">Dengarkan Musik Secara Gratis</p>
    
  </section>
<!-- Akhir Jumbotron -->
<!-- Slider -->
  <section  class="slider" class="bg-white" >
    <div id="slider" class="mt-5"></div>
    <h2 data-aos="fade-up" >Musik Populer Saat Ini</h2>
    <div id="carouselExampleControls" class="carousel slide bg-white" data-ride="carousel" >
      <div class="carousel-inner container ">
      <!-- Awal Slider -->
        <div class="carousel-item active">
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
          <?php foreach ($song as $msk) :?>
            <div class="carousel-item" >
              <div class="cards-wrapper" data-aos="fade-up">
                <div class="card">
                  <img src= <?=$msk['img']; ?> class="card-img" alt="img">
                  <div class="card-body card-img-overlay"></div>
                  <h5 class="card-title"><?= $msk['judul']; ?></h5>
                  <p class="card-text"><?= $msk['penyanyi']; ?></p>
                  <audio controls class="audio-ctrl bg-white">
                    <source src="<?= $msk['file']; ?>" type="audio/mpeg">
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
  <section  class="lainnya">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,224L15,192C30,160,60,96,90,106.7C120,117,150,203,180,234.7C210,267,240,245,270,218.7C300,192,330,160,360,154.7C390,149,420,171,450,160C480,149,510,107,540,117.3C570,128,600,192,630,202.7C660,213,690,171,720,138.7C750,107,780,85,810,101.3C840,117,870,171,900,213.3C930,256,960,288,990,298.7C1020,309,1050,299,1080,266.7C1110,235,1140,181,1170,154.7C1200,128,1230,128,1260,149.3C1290,171,1320,213,1350,197.3C1380,181,1410,107,1425,69.3L1440,32L1440,0L1425,0C1410,0,1380,0,1350,0C1320,0,1290,0,1260,0C1230,0,1200,0,1170,0C1140,0,1110,0,1080,0C1050,0,1020,0,990,0C960,0,930,0,900,0C870,0,840,0,810,0C780,0,750,0,720,0C690,0,660,0,630,0C600,0,570,0,540,0C510,0,480,0,450,0C420,0,390,0,360,0C330,0,300,0,270,0C240,0,210,0,180,0C150,0,120,0,90,0C60,0,30,0,15,0L0,0Z"></path></svg>
    <div class="container">
      <div class="row" data-aos="fade-right">
        <div class="col" >
          <h2 id="lainnya">Dengarkan Musik Lainnya</h2>
        </div>
      </div>
  <!-- List Musik Kecil -->
  <!-- List Menu -->
<div class="hero-area text-black ">
	<div class="nav-spacer"></div>
		<ul class="hero-nav nav m-4 nav-pills container" id="pills-tab" role="tablist" data-aos="fade-down">
			<li class="nav-item" role="presentation">
		        <button class="text-secondary nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Featured</button>
			</li>
			<li class="nav-item" role="presentation">
		        <button class="text-secondary nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Trending</button>
			</li>
			<li class="nav-item" role="presentation">
			    <button class="text-secondary nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">New Release</button>
			</li>
		</ul>
        <!-- Menu 1 -->
        <div class="tab-content" id="pills-tabContent" data-aos="fade-right">
          <div class="tab-pane fade show active container" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
            <div >
            <?php foreach($song as $msk): ?>
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
                        <source src="<?= $msk['file']; ?>" type="audio/mpeg">
                      </audio>
                    </div>
            </div>
            <?php endforeach ?>
            </div>
          </div>
        <!-- Menu 2 -->
          <div class="tab-pane fade container" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
            <div class="text-white">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam quas illo laborum! Officia iusto asperiores odio, ipsam porro repudiandae. Consequatur, distinctio magnam. Placeat, libero. Deleniti distinctio voluptatibus, placeat sequi voluptatem sapiente impedit voluptates itaque iusto non laudantium totam dolores nisi consequatur. Minus delectus, neque repellat ex ipsum error odio animi.</p>
            </div>
          </div>
        <!-- Menu 3 -->
          <div class="tab-pane fade container" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
            <div class="text-white">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores temporibus deserunt voluptatibus itaque eum et, inventore assumenda eligendi dolorem ea quaerat provident quasi deleniti doloremque cupiditate iste architecto optio impedit ullam animi quis? Laudantium est natus labore consectetur rerum deleniti delectus, tempora nostrum inventore vitae? Illo sit pariatur architecto odit.</p>
            </div>
          </div>
        </div>
  </div>
</div>
      
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#000000" fill-opacity="1" d="M0,128L17.1,154.7C34.3,181,69,235,103,218.7C137.1,203,171,117,206,96C240,75,274,117,309,138.7C342.9,160,377,160,411,154.7C445.7,149,480,139,514,165.3C548.6,192,583,256,617,272C651.4,288,686,256,720,229.3C754.3,203,789,181,823,197.3C857.1,213,891,267,926,277.3C960,288,994,256,1029,224C1062.9,192,1097,160,1131,128C1165.7,96,1200,64,1234,74.7C1268.6,85,1303,139,1337,181.3C1371.4,224,1406,256,1423,272L1440,288L1440,320L1422.9,320C1405.7,320,1371,320,1337,320C1302.9,320,1269,320,1234,320C1200,320,1166,320,1131,320C1097.1,320,1063,320,1029,320C994.3,320,960,320,926,320C891.4,320,857,320,823,320C788.6,320,754,320,720,320C685.7,320,651,320,617,320C582.9,320,549,320,514,320C480,320,446,320,411,320C377.1,320,343,320,309,320C274.3,320,240,320,206,320C171.4,320,137,320,103,320C68.6,320,34,320,17,320L0,320Z"></path></svg>
  </section>
  <!-- AKhir Musik Kecil -->

<?php require('partials/footer.php'); ?>