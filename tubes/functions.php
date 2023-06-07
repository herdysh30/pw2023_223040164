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

    //upload gambar
    $gambar = upload_gambar();
    if (!$gambar){
        return false;
    }
    $file = upload_musik();
    if (!$file){
        return false;
    }

    $query = "INSERT INTO song VALUES (NULL, '$gambar', '$judul', '$penyanyi', '$file')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function upload_musik(){
    $namaFile = $_FILES['file']['name'];
    $ukuranFile = $_FILES['file']['size'];
    $error = $_FILES['file']['error'];
    $tmpName = $_FILES['file']['tmp_name'];

    //cek apakah tidak ada musik yang diupload
    if ($error === 4){
        echo "<script>
            alert'pilih file terlebih dahulu!');
        </script>";
        return false;
    }
    // cek apakah yang diupload adalah musik
    $ekstensiMusikValid = ['mp3', 'wav'];
    $ekstensiMusik = explode('.', $namaFile);
    $ekstensiMusik = strtolower(end($ekstensiMusik));
    if(!in_array($ekstensiMusik, $ekstensiMusikValid)){
        echo "<script>
            alert'Yang anda upload bukan musik ! ');
        </script>";
        return false;
    }

    //lolos pengecekan, musik siap diupload
    //generate nama musik baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiMusik;


    move_uploaded_file($tmpName, '../music/' . $namaFileBaru);

    return $namaFileBaru;

}
function upload_gambar(){
    $namaFile = $_FILES['img']['name'];
    $ukuranFile = $_FILES['img']['size'];
    $error = $_FILES['img']['error'];
    $tmpName = $_FILES['img']['tmp_name'];

    //cek apakah tidak ada gambar yang diupload
    if ($error === 4){
        echo "<script>
            alert'pilih gambar terlebih dahulu!');
        </script>";
        return false;
    }
    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo "<script>
            alert'Yang anda upload bukan gambar ! ');
        </script>";
        return false;
    }
    //cek jika ukurannya terlalu besar
    if ($ukuranFile > 1000000){
        echo "<script>
            alert'Ukuran gambar terlalu besar ! ');
        </script>";
        return false;
    }
    //lolos pengecekan, gambar siap diupload
    //generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;


    move_uploaded_file($tmpName, '../img/music/' . $namaFileBaru);

    return $namaFileBaru;

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

    $gambarLama = htmlspecialchars ($data_musik["gambarLama"]);

    //cek apakah user pilih gambar baru atau tidak
    if($_FILES['img']['error'] === 4){
        $gambar = $gambarLama;
    }else{
        $gambar = upload_gambar();
    }

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
function registrasi($data){
    global $conn;

    $nama = strtolower(stripslashes($data['name']));
    $password = mysqli_real_escape_string($conn, $data['password']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);
    $email = mysqli_real_escape_string($conn, $data['email']);

    //cek nama sudah ada atau belum
    $result = mysqli_query($conn, "SELECT email FROM user WHERE email ='$email'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>
            alert('Email sudah terdaftar ! Gunakan email lain !')
            </script>
        ";
        return false; 
    }

    //cek konfirmasi password
    if($password !== $password2){
        echo" <script>
            alert('Konfirmasi Password Tidak Sesuai !');
            </script>";
        return false;
    }
    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambah user baru ke database
    $query = "INSERT INTO user VALUES (NULL, '$nama', '$password', '$email', 'user')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn); 

    
}