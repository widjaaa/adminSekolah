<?php 

session_start();

if (!isset($_SESSION["ssLogin"])) {
    header("Location: ../login.php");
    exit();
}
require_once "../config.php";
$title = "Tambah Guru - SMA Widjaya";
require_once "../template/header.php";
require_once "../template/navbar.php";
require_once "../template/sidebar.php";

?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tambah Guru</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="guru.php">Guru</a></li>
                <li class="breadcrumb-item active">Tambah Guru</li>
            </ol>
        </div>
    </main>
    <div class="card">
        <div class="card-header">
            <span class="h5 my-2"><i class="fa-solid fa-square-plus"></i> Tambah Guru</span>
            <button type="submit" name="simpan" class="btn btn-primary float-end"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
            <button type="reset" name="reset" class="btn btn-danger float-end me-1"><i class="fa-solid fa-xmark"></i> Reset</button>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <div class="mb-3 row">
                        <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                        <label for="nip" class="col-sm-1 col-form-label">:</label>
                        <div class="col-sm-9" style="margin-left: -50px;">
                            <input type="text" name="nip" pattern="[0-9]{18,}" title="minimal 18 angka" class="form-control ps-2 border-0 border-bottom" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <label for="nama" class="col-sm-1 col-form-label">:</label>
                        <div class="col-sm-9" style="margin-left: -50px;">
                            <input type="text" name="nama" class="form-control ps-2 border-0 border-bottom" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="telpon" class="col-sm-2 col-form-label">Telpon</label>
                        <label for="telpon" class="col-sm-1 col-form-label">:</label>
                        <div class="col-sm-9" style="margin-left: -50px;">
                            <input type="number" name="telpon" pattern="[0-9]{5,}" title="min 5 angka" class="form-control ps-2 border-0 border-bottom" required>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                        <label for="agama" class="col-sm-1 col-form-label">:</label>
                        <div class="col-sm-9" style="margin-left: -50px;">
                           <select name="agama" id="agama" class="form-select border-0 border-bottom" required>
                            <option value="" selected>-- Pilih Agama</option>
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="katholik">Katholik</option>
                            <option value="hindu">Hindu</option>
                            <option value="budha">Budha</option>
                           </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <label for="alamat" class="col-sm-1 col-form-label">:</label>
                        <div class="col-sm-9" style="margin-left: -50px;">
                           <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-4 text-center px-5">
                    <img src="../assets/img/salinan default.png" class="mb-3" width="40%">
                    <input type="file" name="foto" id="gambar" class="form-control form-control-sm">
                    <small class="text-secondary">Pilih foto PNG, JPG atau JPEG dengan ukuran maximal 10MB</small>
                    <div><small class="text-secondary">width = height</small></div>
                </div>
            </div>
        </div>
    </div>


<?php 
require_once "../template/footer.php";
?>