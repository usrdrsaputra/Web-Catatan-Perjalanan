<?
session_start();
$id_user = $_SESSION['$id_user'];
?>

<div class="card mt-4 me-4 ms-4">
  <div class="card-header" style="background-color: #87CEFA ;">
    <a href="?page=Dashboard" class="btn btn-primary ms-4">Kembali</a>
  </div>
  <div class="card-body">
    <form method="POST" action="pencatatan/tambah.php">
      <input type="text" name="id_user" class="form-control" value="<?php echo $id_user;?>" hidden >
   <div class="container px-4">
            <label for="nama_lengkap"  class="form-label">NAMA LENGKAP</label>
            <input name="nama_lengkap" type="text" class="form-control">
        </div>
        <div class="container  px-4 pt-4 ">
            <label for="tanggal" class="form-label">Tanggal perjalanan</label>
            <input type="date" name="tanggal" class="form-control">
        </div>
        <div class="container px-4 pt-4  ">
            <label for="jam"class="form-label">JAM</label>
            <input type="time"  name="jam" class="form-control">
        </div>
        <div class="container  px-4 pt-4  ">
            <label for="tujuan"  class="form-label">TUJUAN</label>
            <input type="text" name="tujuan" class="form-control">
        </div>
        <div class="container  px-4 pt-4 mb-4 ">
            <label for="suhu_tubuh"  class="form-label">SUHU TUBUH</label>
            <input type="number" name="suhu_tubuh" class="form-control">
        </div>

      <div class="container  px-4 mb-4 ">
        <label for="kondisi"  class="form-label">KONDISI</label>
                  <select name="kondisi" class="form-control">
                    <option>pilih kondisi</option>
                    <option value="NORMAL">NORMAL</option>
                    <option value="TIDAK NORMAL">TIDAK NORMAL</option>
                  </select> 
                </div>
  
        <button name="simpan" value="simpan" type="submit" class="btn btn-primary ms-4  ">Tambah catatan</button>
    </form>
  </div>
</div>