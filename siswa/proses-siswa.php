<?php

session_start();
if (!isset($_SESSION["ssLogin"])){
    header("location: ../auth/login.php");
    exit();
}

require_once "../config.php";

if (isset($_POST['simpan'])){
    $nis = $_POST['nis'];
    $nama = htmlspecialchars($_POST['nama']);
    $kelas = $_POST["kelas"];
    $jurusan = $_POST["jurusan"];
    $alamat = htmlspecialchars($_POST['alamat']);
    $foto = htmlspecialchars($_FILES['image']['name']);

    if ($foto != null){
        $url = 'add-siswa.php';
        $foto = uploadimg($url);
    } else {
        $foto='salinan default.png';
    }

    mysqli_query($koneksi, "INSERT INTO tbl_siswa VALUES( '$nis','$nama','$alamat','$kelas','$jurusan','$foto')");

    echo "<script>
            alert('Data siswa berhasil disimpan');
            document.location.href = 'add-siswa.php';
    </script>";
    return;
}

?>

