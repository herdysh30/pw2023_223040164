<?php 
// ARRAY
// Membuat Array

$hari = array('Senin', 'Selasa', 'Rabu');
$bulan = ['Januari', 'Februari', 'Maret'];
$myArray = ['Herdy', 18, false];
$binatang = ['🐈', '🐇', '🐅', '🐘', '🐬'];

//Mencetak Array

echo $binatang[3];
echo '<br>';
echo $hari[2];
echo '<hr>';

//mencetak seluruh isi array
//var_dump, print_r

var_dump ($binatang);
echo '<br>';
print_r($bulan);
echo '<br>';
var_dump($myArray);
echo '<br>';
print_r($hari);
echo '<hr>';

//Manipulasi Array
//meggunakan index

$hari[3] = 'Kamis';
print_r($hari);
echo '<hr>';

//Menambahkan elemen di akhir dengan mengosongkan indexnya
$hari[] = "Jum'at";
$hari[] = 'Sabtu';
print_r($hari);
echo '<hr>';

//menambahkan elemen di akhir menggunakan array_push
array_push($bulan, 'April', 'Mei', 'Juni');
print_r($bulan);


?>