<?php 

define('BASE_URL','/pw2023_223040164/tubes/');

function dd($value){
    echo "<pre>";
    var_dump ($value);
    echo "</pre>";
    die;
    }

//koneksi database 
$conn = mysqli_connect("localhost", "root", "","musik");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah_user($data_user){
    global $conn;
    $nama = htmlspecialchars($data_user['nama']);
    $password = htmlspecialchars ($data_user["password"]);
    $email = htmlspecialchars ($data_user["email"]);

    $query = "INSERT INTO user VALUES (NULL, '$nama', '$password', '$email')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function tambah_musik($data_musik){
    global $conn;
    $judul = htmlspecialchars($data_musik['judul']);
    $penyanyi = htmlspecialchars ($data_musik["penyanyi"]);
    $gambar = htmlspecialchars ($data_musik["img"]);
    $file = htmlspecialchars ($data_musik["file"]);

    $query = "INSERT INTO song VALUES (NULL, '$gambar', '$judul', '$penyanyi', '$file')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function hapus_user ($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM user WHERE user_id = '$id'");
    return mysqli_affected_rows($conn);
}
function hapus_song ($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM song WHERE song_id = '$id'");
    return mysqli_affected_rows($conn);
}
function ubah_user($data_user){
    global $conn;

    $id = $data_user["user_id"];
    $nama = htmlspecialchars($data_user['nama']);
    $password = htmlspecialchars ($data_user["password"]);
    $email = htmlspecialchars ($data_user["email"]);

    $query = "UPDATE user SET nama = '$nama', password = '$password', email = '$email' WHERE user_id ='$id' ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function ubah_song($data_musik){
    global $conn;

    $id = $data_musik["song_id"];
    $judul = htmlspecialchars($data_musik["judul"]);
    $penyanyi = htmlspecialchars ($data_musik["penyanyi"]);
    $gambar = htmlspecialchars ($data_musik["img"]);
    $file = htmlspecialchars ($data_musik["file"]);

    $query = "UPDATE song SET judul = '$judul', penyanyi = '$penyanyi', img = '$gambar', file = '$file' WHERE song_id ='$id' ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function cari_user($keyword){
    $query = "SELECT * FROM user WHERE nama LIKE '%$keyword%' OR password LIKE '%$keyword%' OR email LIKE '%$keyword%'";
    return query($query);
}
function cari_musik($keyword){
    $query = "SELECT * FROM song WHERE judul LIKE '%$keyword%' OR penyanyi LIKE '%$keyword%'";
    return query($query);
}