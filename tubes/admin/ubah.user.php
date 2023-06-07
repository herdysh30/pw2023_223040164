<?php 
require("../functions.php");

//ambil data di URL
$id = $_GET["user_id"];
//query data mahasiswa berdasarkan id
$user = query("SELECT * FROM user WHERE user_id = '$id'")[0];


if( isset($_POST["submit"]) ) {

    //cek keberhasilan edit
    if(ubah_user($_POST) > 0){
        echo "
        <script>
            alert('Data berhasil diedit!')
            document.location.href = '../admin.php'
        </script>";
    }else {
        echo "<script>
        alert('Data gagal diedit!')
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
    <title>Edit Data User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
   <h1>Edit Data User</h1> 
   <form method="post">
    <input type="hidden" name="user_id" value="<?= $user["user_id"]?>">
    <ul class="m-3">
        <li class="col-3">
            <label class="form-label" for="nama">Nama :</label>
            <input class="form-control" type="name" name="nama" id="nama" value="<?= $user["nama"]?>">
        </li>
        <li class="col-3">
            <label class="form-label" for="password">Password :</label>
            <input class="form-control" type="text" name="password" id="password" value="<?= $user["password"]?>"> 
        </li>
        <li class="col-3">
            <label class="form-label" for="email">Email :</label>
            <input class="form-control mb-2" type="email" name="email" id="email" value="<?= $user["email"]?>">
        </li>
        <li>
            <button class="btn btn-secondary" type="submit" name="submit">Edit Data!</button>
        </li>
    </ul>
   </form>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>