<?php
include '../inc/koneksi.php';
session_start();
if ($_SESSION['status']!="ADMIN") {
	header("location:../index.php");
}
$id_user = $_SESSION['id_user'];  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.admin.css">
    <title>Halaman Admin</title>
</head>

<body>
    <!-- sidebar start -->

    <div class="wrapper">
        <!-- Sidebar -->
        <aside id="sidebar">
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="">Catatan Perjalanan</a>
                </div>
                <!-- Sidebar Navigation -->
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        alat dan komponen
                    </li>
                    <li class="sidebar-item">
                        <a href="?page=Dashboard" class="sidebar-link">
                            <i class="fa-solid fa-sliders pe-2"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="?page=daftar_account" class="sidebar-link">
                            <i class="fa-solid fa-list pe-"></i>
                             Daftar account
                        </a>
                    </li>
                    <li class="sidebar-item">

                        <a href="?page=catatan_perjalanan" class="sidebar-link " aria-expanded="false"
                            aria-controls="pages">
                            <i class="fa-regular fa-file-lines pe-2"></i>
                            Catatan perjalanan
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse" data-bs-target="#auth"
                            aria-expanded="false" aria-controls="auth">
                            <i class="fa-regular fa-user pe-2"></i>
                            Auth
                        </a>
                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Profil</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="../inc/logout.php" onclick="return confirm('apakah anda yakin untuk logout')"
                               class="sidebar-link">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>
        <!-- Main Component -->
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom bg-dark">
                <!-- Button for sidebar toggle -->
                <button class="btn" type="button" data-bs-theme="dark">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
            <main class="content ">
                <div class="container-fluid ">
                    <div class="mb-2">
                        <!-- landing page start -->
                        <div class="content">
                            <?php
                            switch (@$_GET['page']) { //untuk memindahkan halaman ke halaman selanjutnya
                            case 'Dashboard':
                            include 'Dashboard/index.php'; //lokasi halaman dan file tujuan
                            break;       //untuk menghentikan proses pemindahan halaman
                            case 'daftar_account':
                            include 'daftar_account/index.php'; 
                            break;
                            case 'catatan_perjalanan':
                            include 'catatan_perjalanan/index.php';
                            break;
                            case 'edit_catatan':
                            include 'catatan_perjalanan/edit.php';
                            break;
                            case 'detail':
                            include 'catatan_perjalanan/detail.php';
                            break;
                            default:
                            include 'Dashboard/index.php';
                            break;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- sidebar end -->




    <!-- landing page end -->

    <!-- script sidebar togle -->
    <script>
        const toggler = document.querySelector(".btn");
        toggler.addEventListener("click", function () {
            document.querySelector("#sidebar").classList.toggle("collapsed");
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
    <script src="../assets/js/script.js"></script>

    
</body>

</html>