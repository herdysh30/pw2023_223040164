<?php 
require("../functions.php");

//ambil data di URL
$id = $_GET["song_id"];
//query data mahasiswa berdasarkan id
$song = query("SELECT * FROM song WHERE song_id = '$id'")[0];


if( isset($_POST["submit"]) ) {

    //cek keberhasilan edit
    if(ubah_song($_POST) > 0){
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
</head>
<body>
   <h1>Edit Data User</h1> 
   <form method="post">
    <input type="hidden" name="song_id" value="<?= $song["song_id"]?>">
    <ul>
    <li>
            <label for="judul">Judul :</label>
            <input type="text" name="judul" id="judul" value="<?= $song["judul"]?>">
        </li>
        <li>
            <label for="penyanyi">Penyanyi :</label>
            <input type="text" name="penyanyi" id="penyanyi" value="<?= $song["penyanyi"]?>">
        </li>
        <li>
            <label for="img">Gambar :</label>
            <input type="text" name="img" id="img" value="<?= $song["img"]?>">
        </li>
        <li>
            <label for="file">File :</label>
            <input type="text" name="file" id="file" value="<?= $song["file"]?>">
        </li>
        <li>
            <button type="submit" name="submit">Edit Data!</button>
        </li>
    </ul>
   </form>
</body>
</html>