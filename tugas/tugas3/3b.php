<?php 
 
 
 function urutanAngka($angka){
    $j = "*";
    for($i = 1; $i <= $angka; $i++){
        for($u = 1; $u <= $i; $u++){
            echo $j . " ";
            $j++;
        }
        echo "<br>";
    }
 }

 urutanAngka(5);

?>