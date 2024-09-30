<?php
include '../inc/koneksi.php'; // Mengganti variabel koneksi dengan include 'koneksi.php'

 if(isset($_GET['id_catatan'])){
      $id_catatan = $_GET['id_catatan'];
      $query = mysqli_query($koneksi, "SELECT * FROM catatan WHERE id_catatan='$id_catatan'");
      $data = mysqli_fetch_assoc($query);
  }

if(isset($_POST['update'])){
    $nama_lengkap = $_POST['nama_lengkap'];
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];
    $tujuan = $_POST['tujuan'];
    $suhu_tubuh = $_POST['suhu_tubuh'];
    $kondisi = $_POST['kondisi'];

    $update = mysqli_query($koneksi, "UPDATE catatan SET nama_lengkap='$nama_lengkap', tanggal='$tanggal', jam='$jam', tujuan='$tujuan' ,suhu_tubuh='$suhu_tubuh', kondisi='$kondisi' WHERE id_catatan='$id_catatan'");

    if($update){
         echo "<script>alert('Data anda berhasil diperbarui'); window.location='?page=catatan_perjalanan';</script>";
         // Redirect kembali ke halaman utama setelah berhasil mengedit
    }else{
        echo "<script>alert('Gagal mengedit data.'); window.location='?page=edit.php';</script>";
        echo "Gagal mengedit data.";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.admin.css">
</head>
<body>
  <!-- tabel edit data start-->
  <div class="container">
  <form action="" method="POST">
  <div class="card mt-2 ">
      <div class="card-header text-center">
        <h4> Silahkan edit data anda </h4>
      </div>
  </div>

  <div class="card mt-4 me-2" >
  <div class="card-header">
    <a href="?page=catatan_perjalanan" class="btn btn-primary">Kembali</a>
  </div>
  <div class="card-body">
    <form method="POST" action="tulis_catatan_perjalanan/tambah.php">
   <div class="container px-4  ">
            <label for="nama_lengkap"  class="form-label">NAMA LENGKAP</label>
            <input name="nama_lengkap" type="text" class="form-control" value="<?php echo $data['nama_lengkap']; ?>">
        </div>
        <div class="container  px-4 pt-4 ">
            <label for="tanggal" class="form-label">Tanggal perjalanan</label>
            <input type="date" name="tanggal" class="form-control" value="<?php echo $data['tanggal']; ?>">
        </div>
        <div class="container px-4 pt-4  ">
            <label for="jam"class="form-label">JAM</label>
            <input type="time"  name="jam" class="form-control" value="<?php echo $data['jam']; ?>">
        </div>
        <div class="container  px-4 pt-4  ">
            <label for="tujuan"  class="form-label">TUJUAN</label>
            <input type="text" name="tujuan" class="form-control" value="<?php echo $data['tujuan']; ?>">
        </div>
        <div class="container  px-4 pt-4 mb-4 ">
            <label for="suhu_tubuh"  class="form-label">SUHU TUBUH</label>
            <input type="number" name="suhu_tubuh" class="form-control" value="<?php echo $data['suhu_tubuh']; ?>">
        </div>

      <div class="container  px-4 mb-4 ">
        <label for="kondisi"  class="form-label">KONDISI</label>
                  <select name="kondisi" class="form-control">
                    <option><?php echo $data['kondisi']; ?></option>
                    <option value="NORMAL">NORMAL</option>
                    <option value="TIDAK NORMAL">TIDAK NORMAL</option>
                  </select> 
                </div>
  
        <button name="update" value="update" type="submit" class="btn btn-primary ms-4  ">Tambah catatan</button>
    </form>
  </div>
</div>
</form>

</div>
  <!-- tabel edit data end     -->

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
        
</body>

</html>