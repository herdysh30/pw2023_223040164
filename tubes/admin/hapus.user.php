<?php 
require("../functions.php");
$id = $_GET["user_id"];

if (hapus_user ($id) > 0){
    echo "
    <script>
    alert('Data berhasil dihapus!')
    document.location.href = '../admin.php'
    </script>
    ";
}else {
    echo "
    <script>
            alert('Data gagal dihapus!')
            document.location.href = '../admin.php'
        </script>
    ";
}


?>