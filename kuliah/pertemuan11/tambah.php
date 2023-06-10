<?php
require('functions.php');

$title = 'Form Tambah Data';

// Insert data jika tombol tambah diklik
if(isset($_POST['tambah'])) {
    //cek jika data berhasil ditambah
    if(tambah($_POST) > 0) {
        echo "<script>
                alert('data berhasil ditambahkan');
                document.location.href = 'index.php';
            </script>";
    }
}

require('views/tambah.view.php');

?>