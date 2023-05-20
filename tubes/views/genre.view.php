<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>
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
<?php require('partials/footer.php'); ?>