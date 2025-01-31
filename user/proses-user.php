<?php 

session_start();
if(!isset($_SESSION["ssLogin"])){
  header("location: ../auth/login.php");
  exit;
}

require_once "../config.php";
// jika tombol simpan ditekan
if (isset($_POST['simpan'])) {
    // ambil data dari formulir
    $username = trim(htmlspecialchars($_POST['username']));
    $nama     = trim(htmlspecialchars($_POST['nama']));
    $jabatan  = $_POST['jabatan'];
    $alamat   = trim(htmlspecialchars($_POST['alamat']));
    $gambar   = trim(htmlspecialchars($_FILES['gambar']['name']));
    $password = 1234;
    $pass = password_hash($password, PASSWORD_DEFAULT);

    // cek username
    $cek_username = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username = '$username'");
    if (mysqli_num_rows($cek_username) > 0){
        header("location: add-user.php?msg=cancel");
        return;
    }

    // proses upload gambar
    if($gambar != null){
        $url = 'add-user.php';
        $gambar = uploadimg($url);
    } else{
        $gambar = 'default.png';
    }

    mysqli_query($koneksi, "INSERT INTO tbl_user VALUES (null, '$username', '$pass', '$nama', '$alamat', '$jabatan', '$gambar')");

    header("location: add-user.php?msg=added");
    return;

}
?>