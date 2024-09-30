<?php
include '../inc/koneksi.php';
$id_user = $_GET['id_user'];
$tampil = mysqli_query($koneksi, "SELECT * FROM tb_siswa WHERE id_user = '$id_user'");
$data = mysqli_fetch_array($tampil);
$fotolama = $data['foto'];

unlink('../img/'.$fotolama);
$sql = mysqli_query($koneksi, "DELETE FROM tb_siswa WHERE id_user = '$id_user'");

if ($sql) {
  ?>
  <script type="text/javascript">
    alert("DATA BERHASIL DIHAPUS");
     window.location = "../../index.php?pg=siswa";
  </script>
  <?php 
}

 ?>
