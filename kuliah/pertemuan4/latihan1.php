<?php 
  $angka = 10;

    function cek_genap_ganjil($angka){ //parameter
        if($angka  % 2 == 1){
            return "$angka adalah bilangan GANJIL! ";
          }
          else {
            return "$angka adalah bilangan GENAP! ";
          }
    }
    
    echo cek_genap_ganjil($angka);// argument
    echo '<br>';
    echo cek_genap_ganjil(15);// argument
    echo '<br>';
    echo cek_genap_ganjil(100);// argument
    echo '<br>';
    echo cek_genap_ganjil(20);// argument

?>
