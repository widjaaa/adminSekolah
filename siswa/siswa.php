<?php

session_start();
if(!isset($_SESSION["ssLogin"])){
    header("location: ../auth/login.php");
    exit();
}

require_once "../config.php";
$title = "Siswa - SMA Widjaya";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";

?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Siswa</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                            <li class="breadcrumb-item active">Siswa</li>
                        </ol>
                        <div class="card">
  <div class="card-header">
    <span class="h5 my-2"><i class="fa-solid fa-list"></i> Data Siswa</span>
    <a href= "<?= $main_url ?>siswa/add-siswa.php" class="btn btn-primary btn-sm float-end"><i class="fa-solid fa-plus"></i> Tambah Siswa</a>
  </div>
  <div class="card-body">
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col"><center>Foto</center></th>
      <th scope="col"><center>NIS</center></th>
      <th scope="col"><center>Nama</center></th>
      <th scope="col"><center>Kelas</center></th>
      <th scope="col"><center>Jurusan</center></th>
      <th scope="col"><center>Alamat</center></th>
      <th scope="col"><center>operasi</center></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Foto</td>
      <td>NIS</td>
      <td>Nama</td>
      <td>Kelas</td>
      <td>Jurusan</td>
      <td>Alamat</td>
      <td align="center">
        <a href="" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen"title="Update Siswa"></i></a>
        <a href="" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash" title="Hapus Siswa"></i> </a>
      </td>
    </tr>
  </tbody>
</table>
  </div>
</div>
                    </div>
                </main> 



<?php
require_once "../template/footer.php";

?>