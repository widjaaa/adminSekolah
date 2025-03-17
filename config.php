<?php 

//buat koneksi
$koneksi = mysqli_connect("localhost","root","","db_sekolah");

// cek koneksi
// if (mysqli_connect_errno()){
//     echo "Koneksi database gagal : ";
// }else{
//     echo "Koneksi database berhasil";
// }

//url induk
$main_url = "http://localhost/sekolah/";

function uploadimg($url){
    $namafile   = $_FILES['gambar']['name'];
    $ukuranfile = $_FILES['gambar']['size'];
    $error      = $_FILES['gambar']['error'];
    $tmp        = $_FILES['gambar']['tmp_name'];

    // cek file yang di upload
    $validExtention = ['jpg', 'jpeg', 'png'];
    $fileExtention  = explode('.', $namafile);
    $fileExtention  = strtolower(end($fileExtention));
    if(!in_array($fileExtention, $validExtention)){
        header("location:" . $url . '?msg=notimage');
        die;
    }

    // cek ukuran file\
    if($ukuranfile > 10000000){
        header("location:" . $url . '?msg=oversize');
        die;
    }

    // generate nama file baru
    if($url == 'profile-sekolah.php'){
        $namafilebaru = rand(0, 50) . '-bgLogin.' . $fileExtention;
    }else{
        $namafilebaru = rand(10, 100) . '-' . $namafile;
    }

    // upload file
    move_uploaded_file($tmp, '../assets/img/' . $namafilebaru);
    return $namafilebaru;
}

?>