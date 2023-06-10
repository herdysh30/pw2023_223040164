<?php 
require("../functions.php");

//ambil data di URL
$id = $_GET["song_id"];
//query data mahasiswa berdasarkan id
$song = query("SELECT * FROM song WHERE song_id = '$id'")[0];


if( isset($_POST["submit"]) ) {

    //cek keberhasilan edit
    if(ubah_song($_POST) > 0){
        // die;
        echo "
        <script>
        alert('Data berhasil diedit!')
        document.location.href = '../admin.php'
        </script>";
    }else {
        // var_dump($_POST);die;
        echo "<script>
        alert('Data gagal diedit!')
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
    <title>Edit Data Musik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
   <h1>Edit Data Musik</h1> 
   <form method="post" enctype="multipart/form-data">
    <input type="hidden" name="song_id" value="<?= $song["song_id"]?>">
    <input type="hidden" name="gambarLama" value="<?= $song["img"]?>">
    <input type="hidden" name="fileLama" value="<?= $song["file"]?>">
    <ul class="m-3">
        <li class="col-2">
            <label class="form-label" for="judul">Judul :</label>
            <input class="form-control" type="text" name="judul" id="judul" value="<?= $song["judul"]?>">
        </li>
        <li class="col-2">
            <label class="form-label" for="penyanyi">Penyanyi :</label>
            <input class="form-control" type="text" name="penyanyi" id="penyanyi" value="<?= $song["penyanyi"]?>">
        </li>
        <li class="col-3">
            <label class="form-label" for="img" class="form-label">Gambar :</label><br>
            <img class="mb-2" src="../img/music/<?= $song['img']; ?>" width="100" alt=""><br>
            <input class="form-control" class="form-control" type="file" name="img" id="img">
        </li>
        <li class="col-3">
            <label class="form-label" for="file">File :</label><br>
            <audio controls class="audio-ctrl bg-white mb-2">
                <source src="../music/<?= $song['file']; ?>" type="audio/mpeg">
            </audio>
            <input class="form-control mb-2" type="file" name="file" id="file">
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
            <button class="btn btn-secondary" type="submit" name="submit">Edit Data!</button>
        </li>
    </ul>
   </form>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>