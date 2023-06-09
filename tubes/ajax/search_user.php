<?php 
require '../functions.php';
$keyword = $_GET['keyword_user'];

$query = "SELECT * FROM user WHERE nama LIKE '%$keyword%' OR password LIKE '%$keyword%' OR email LIKE '%$keyword%' OR role LIKE '%$keyword%'";
    $user = query($query);
?>
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