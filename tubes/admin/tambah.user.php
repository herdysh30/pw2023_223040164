<?php 
require("../functions.php");
if( isset($_POST["submit"]) ) {

    //cek keberhasilan insert
    if(tambah_user($_POST) > 0){
        echo "
        <script>
            alert('Data berhasil ditambahkan!')
            document.location.href = '../admin.php'
        </script>";
    }else {
        echo "<script>
        alert('Data gagal ditambahkan!')
        document.location.href = '../admin.php'
    </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
   <h1>Tambah Data User</h1> 
   <form action="" method="post">
    <ul class="m-3">
        <li class="col-2">
            <label for="nama" class="form-label">Nama :</label>
            <input class="form-control" type="text" name="nama" id="nama" required>
        </li>
        <li class="col-2">
            <label for="password" class="form-label">Password :</label>
            <input class="form-control" type="text" name="password" id="password" required>
        </li>
        <li class="col-3">
            <label for="email" class="form-label">Email :</label>
            <input class="form-control mb-2" type="text" name="email" id="email" required>
        </li>
        <li>
            <button class="btn btn-secondary" type="submit" name="submit">Tambahkan Data!</button>
        </li>
    </ul>
   </form>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>