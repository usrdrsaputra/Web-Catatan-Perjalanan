  <?php
  include '../inc/koneksi.php'; // Mengganti variabel koneksi dengan include 'koneksi.php'

  if(isset($_GET['id_catatan'])){
      $id_catatan = $_GET['id_catatan'];
      $query = mysqli_query($koneksi, "SELECT * FROM catatan WHERE id_catatan='$id_catatan'");
      $data = mysqli_fetch_assoc($query);
  }

  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>detail</title>
</head>

<body>
  <div class="container ps-4">
    <div class="card mt-2 ">
      <div class="card-header text-center">
        <h4> Detail Catatan </h4>
      </div>
     
      <div class="mb-3 row mt-4 ps-4">
          <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
          <div class="col-sm-9">
            <input type="text" name="nama_lengkap" class="form-control" value="<?php echo $data['nama_lengkap']?>" readonly >
          </div>
        </div>
        <div class="mb-3 row mt-4 ps-4">
          <label for="tanggal" class="col-sm-2 col-form-label" >Tanggal  </label>
          <div class="col-sm-9">
            <input type="date" name="tanggal" class="form-control" value="<?php echo $data['tanggal']?>" readonly >
          </div>
        </div>
        <div class="mb-3 row mt-4 ps-4">
          <label for="jam" class="col-sm-2 col-form-label" >Jam</label>
          <div class="col-sm-9">
            <input type="time" name="jam" class="form-control" value="<?php echo $data['jam']?>" readonly >
          </div>
        </div>
        <div class="mb-3 row mt-4 ps-4">
          <label for="tujuan" class="col-sm-2 col-form-label" >Tujuan</label>
          <div class="col-sm-9">
            <input type="text" name="tujuan" class="form-control" value="<?php echo $data['tujuan']?>" readonly >
          </div>
        </div>
        <div class="mb-3 row mt-4 ps-4">
          <label for="suhu_tubuh" class="col-sm-2 col-form-label" >Suhu Tubuh</label>
          <div class="col-sm-9">
            <input type="text" name="suhu_tubuh" class="form-control" value="<?php echo $data['suhu_tubuh']?>" readonly >
          </div>
        </div>
        <div class="mb-3 row mt-4 ps-4">
          <label for="kondisi" class="col-sm-2 col-form-label"  >Kondisi</label>
          <div class="col-sm-9">
            <input type="text" name="kondisi" class="form-control"value="<?php echo $data['kondisi']?>" readonly>
          </div>
          <a href="?page=catatan_perjalanan" type="submit" class="col-sm-1 btn btn-secondary mt-4 me-2 ">kembali</a>
          <a href="?page=edit_catatan&&id_catatan=<?php echo $data ['id_catatan'];?>" type="submit" class="col-sm-1 btn btn-warning mt-4 ">Edit</a>
        </div>
        
      
    </div>
  </div>
  </div>
  


 </body>

</html>