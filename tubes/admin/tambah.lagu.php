<?php 
require("../functions.php");
if( isset($_POST["submit"]) ) {

    //cek keberhasilan insert
    // var_dump($_POST);die;
    if(tambah_musik($_POST) > 0){
        echo "
        <script>
            alert('Data berhasil ditambahkan!');
            document.location.href = '../admin.php';
        </script>";
    }else {
        echo "<script>
        alert('Data gagal ditambahkan!');
        document.location.href = '../admin.php';
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
    <title>Tambah Musik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        li{
            margin-bottom : 5px;
        }
    </style>
</head>
<body>
   <h1>Tambah Musik</h1> 
   <form action="" method="post" enctype="multipart/form-data">
    <ul class="m-3">
        <li class="col-2">
            <label for="judul" class="form-label">Judul :</label>
            <input class="form-control" type="text" name="judul" id="judul" required>
        </li>
        <li class="col-2">
            <label for="penyanyi" class="form-label">Penyanyi :</label>
            <input class="form-control" type="text" name="penyanyi" id="penyanyi" required>
        </li>
        <li class="col-3">
            <label for="img" class="form-label">Gambar :</label>
            <input class="form-control" type="file" name="img" id="img" >
        </li>
        <li class="col-3">
            <label class="form-label" for="file">File :</label>
            <input class="form-control mb-2" type="file" name="file" id="file" >
        </li>
        <li class="col-2">
            <label for="id_category" class="form-label">Kategori :</label>
            <select class="form-select" name="id_category" id="id_category">
                <option value="">Pilih Kategori</option>
                <option value="1">K-Pop</option>
                <option value="2">Pop</option>
                <option value="3">J-Pop</option>
                <option value="4">Populer</option>
            </select>
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