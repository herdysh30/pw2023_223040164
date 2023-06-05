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
</head>
<body>
   <h1>Edit Data User</h1> 
   <form method="post">
    <input type="hidden" name="user_id" value="<?= $user["user_id"]?>">
    <ul>
        <li>
            <label for="nama">Nama :</label>
            <input type="name" name="nama" id="nama" value="<?= $user["nama"]?>">
        </li>
        <li>
            <label for="password">Password :</label>
            <input type="text" name="password" id="password" value="<?= $user["password"]?>"> 
        </li>
        <li>
            <label for="email">Email :</label>
            <input type="email" name="email" id="email" value="<?= $user["email"]?>">
        </li>
        <li>
            <button type="submit" name="submit">Edit Data!</button>
        </li>
    </ul>
   </form>
</body>
</html>