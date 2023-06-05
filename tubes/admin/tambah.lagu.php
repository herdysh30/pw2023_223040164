<?php 
require("../functions.php");
if( isset($_POST["submit"]) ) {

    //cek keberhasilan insert
    if(tambah_musik($_POST) > 0){
        echo "
        <script>
            alert('Data berhasil ditambahkan!')
            document.location.href = '../admin.php'
        </script>";
    }else {
        echo "<script>
        alert('Data gagal ditambahkan!')
        document.location.href = '../admin.php?id=pills-musik'
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
</head>
<body>
   <h1>Tambah Msuik</h1> 
   <form action="" method="post" enctype="multipart/form-data">
    <ul>
        <li>
            <label for="judul">Judul :</label>
            <input type="text" name="judul" id="judul" required>
        </li>
        <li>
            <label for="penyanyi">Penyanyi :</label>
            <input type="text" name="penyanyi" id="penyanyi" required>
        </li>
        <li>
            <label for="img">Gambar :</label>
            <input type="file" name="img" id="img" required>
        </li>
        <li>
            <label for="file">File :</label>
            <input type="text" name="file" id="file" required>
        </li>
        <li>
            <button type="submit" name="submit">Tambahkan Data!</button>
        </li>
    </ul>
   </form>
</body>
</html>