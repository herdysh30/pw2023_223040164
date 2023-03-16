<?php 
//Array Associative
//Array yang indexnya adalah string yang kita buat sendiri
$mahasiswa = [
['nama'=>'Herdy', 
'makanan'=>['🍛','🌭'], 
'binatang'=>'🐈'], 
['nama'=>'Abdul', 
'makanan'=>['🍳'], 
'binatang'=>'🐅'], 
['nama'=>'Malik', 
'makanan'=>['🍜','🍳'], 
'binatang'=>'🐬'], 
['nama'=>'Atlas', 
'makanan'=>['🌭'], 
'binatang'=>'🐘'], 
['nama'=>'Anggi', 
'makanan'=>['🍕'], 
'binatang'=>'🐇']
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $mhs ) : ?>
    <ul>
        <li>Nama : <?= $mhs['nama']; ?></li>
        <li>Makanan Favorit : 
            <?php foreach ($mhs['makanan'] as $mkn){
            echo $mkn; } ?>
        </li>
        <li>Peliharaan : <?= $mhs['binatang']; ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>