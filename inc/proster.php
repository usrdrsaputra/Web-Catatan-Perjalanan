<?php
include_once('koneksi.php');

if(isset($_POST['register'] ))
{
    $email        = $_POST['email'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $username     = $_POST['username'];
    $password     = $_POST['password'];
    $akses        = $_POST['akses'];
    
    

    $sql = "INSERT INTO `user`(`email`, `nama_lengkap`, `username`, `password`, `akses`) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($koneksi, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sssss", $email, $nama_lengkap, $username, $password, $akses);

        $result = mysqli_stmt_execute($stmt);
        if ($result) {
            echo "<script>alert('Registrasi berhasil'); window.location='../login/index.php';</script>";
            exit;
        } else {
            echo "<script>alert('Pendaftaran gagal: " . mysqli_error($koneksi) . "');</script>";
            header('location:../register/register.php');
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "<script>alert('Pendaftaran gagal: " . mysqli_error($koneksi) . "');</script>";
        header('location:../register/register.php');
    }
}
?>