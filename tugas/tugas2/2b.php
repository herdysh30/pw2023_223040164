<?php 

for ($i = 1; $i <= 10; $i++) {
    $h = 1;
    for ($j = 0; $j < $i; $j++) {
        echo $h++ . " ";
    }
    echo '<br>';
}

?>