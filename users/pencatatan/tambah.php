<?php
include("../../inc/koneksi.php");

if(isset($_POST['simpan'])) {
    $id_user = $_POST['id_user'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];
    $tujuan = $_POST['tujuan'];
    $suhu_tubuh = $_POST['suhu_tubuh'];
    $kondisi = $_POST['kondisi'];

    $sql = "INSERT INTO catatan (id_user, nama_lengkap, tanggal, jam, tujuan, suhu_tubuh, kondisi) VALUES ('$id_user','$nama_lengkap', '$tanggal', '$jam', '$tujuan', '$suhu_tubuh', '$kondisi')";

    $result = mysqli_query($koneksi, $sql);
     
    if($result) {
        echo "<script>alert('Data catatan berhasil ditambahkan'); window.location='../index.php?page=catatan_perjalanan';</script>";
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
    }
}

mysqli_close($koneksi);
?>
