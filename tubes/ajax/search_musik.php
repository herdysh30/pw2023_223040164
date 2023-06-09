<?php 
require '../functions.php';
$key = $_GET['keyword_musik'];

$query = "SELECT * FROM song NATURAL JOIN nama_category WHERE judul LIKE '%$key%' OR penyanyi LIKE '%$key%' OR category LIKE '%$key%'";
$song = query($query);
?>
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
                      <td><?= $row["category"]; ?></td>
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