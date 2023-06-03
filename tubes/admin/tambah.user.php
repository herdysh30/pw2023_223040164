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
</head>
<body>
   <h1>Tambah Data User</h1> 
   <form action="" method="post">
    <ul>
        <li>
            <label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama" required>
        </li>
        <li>
            <label for="password">Password :</label>
            <input type="text" name="password" id="password" required>
        </li>
        <li>
            <label for="email">Email :</label>
            <input type="text" name="email" id="email" required>
        </li>
        <li>
            <button type="submit" name="submit">Tambahkan Data!</button>
        </li>
    </ul>
   </form>
</body>
</html>