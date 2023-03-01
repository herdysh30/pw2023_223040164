<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2c</title>
    <style>
        .kotak {
            background-color: salmon;
            border: 1px solid;
            width: 100px;
            height: 100px;
            text-align: center;
        }

        h2 {
            margin-top: 35px;
        }

        .nomor {
            display: flex;
        }
    </style>
</head>
<body>
    <?php 

    for ($i = 10; $i > 0; $i--) {
    $h = 1;
    echo '<div class="nomor">';
    for ($j = 0; $j < $i; $j++) {
        echo '<div class="kotak"><h2>' . $h++ . '</h2></div>';
    }
    echo '</div>';
    }

    ?>
</body>
</html>