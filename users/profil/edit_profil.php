<?php
$sql = mysqli_query($koneksi, "SELECT * FROM `user` INNER JOIN biodata ON biodata.id_user = user.id_user");
$data = mysqli_fetch_array($sql);
$id_user = $data['id_user']; // Add this line to get the 'id_user' value

if (isset($_POST['simpan'])) {
    $nama_lengkap  = $_POST['nama_lengkap'];
    $profesi       = $_POST['profesi'];
    $email         = $_POST['email'];
    $no_hp         = $_POST['no_hp'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat        = $_POST['alamat'];

    // Check if a file is uploaded
    if ($_FILES['foto']['size'] > 0) {
        $foto = $_FILES['foto']['name'];
        $nama_file = $_FILES['foto']['name'];
        $source = $_FILES['foto']['tmp_name'];
        $folder = 'img/';

        // Move the uploaded file to the desired folder
        move_uploaded_file($source, $folder . $nama_file);

        // Update the database with the new file name
        $sql = mysqli_query($koneksi, "UPDATE biodata SET nama_lengkap='$nama_lengkap', profesi='$profesi', email='$email', no_hp='$no_hp', jenis_kelamin='$jenis_kelamin', alamat='$alamat', foto='$nama_file' WHERE id_user= '$id_user'");
    } else {
        // If no new file is uploaded, update other fields without changing the photo
        $sql = mysqli_query($koneksi, "UPDATE biodata SET nama_lengkap='$nama_lengkap', profesi='$profesi', email='$email', no_hp='$no_hp', jenis_kelamin='$jenis_kelamin', alamat='$alamat' WHERE id_user = '$id_user'");
    }

    if ($sql) {
        ?>
        <script type="text/javascript">
            alert("Data berhasil diupdate");
            window.location = "index.php?page=profil&id_user=<?php echo $id_user; ?>"; // Fix the URL parameter here
        </script>
    <?php
    }
}
?>

<!-- The rest of your HTML code remains unchanged -->

<!-- The rest of your HTML code remains unchanged -->

<body class="bg-light">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 mt-3 pt-3">
                <div class="row z-depth-3">
                    <div class="col-sm-4 bg-info rounded-left">
                        <div class="card-block text-center text-white mt-5">
                            <form method="POST" action="" enctype="multipart/form-data">
                                <input type="hidden" name="id_user" value="<?php echo $data['id_user']; ?>">
                                <?php
                                if ($data['foto'] == "") {
                                ?>
                                    <img src="img/foto1.jpg" width="100" class="img-fluid rounded-circle" alt="">
                                <?php
                                } else {
                                ?>
                                    <img src="img/<?php echo $data['foto']; ?>" width="100" class="img-fluid rounded-circle" alt="foto">
                                <?php
                                }
                                ?>

                                <input type="file" name="foto" class="form-control mt-2">
                                <input class="form-control font-weight-bold mt-2" name="nama_lengkap" value="<?php echo $data['nama_lengkap']; ?>">
                                </input>
                                <input class="form-control font-weight-bold mt-2" name="profesi" value="<?php echo $data['profesi']; ?>">
                                <button class="btn btn-primary btn-sm mt-2" type="submit" name="simpan">save</button>
                                <a href="?page=profil" class="btn btn-warning btn-rounded px-4 mt-2 btn-sm">Back </a>
                            </div>
                        </div>
                        <div class="col-sm-8 bg-white rounded-right">
                            <h4 class="mt-3 text-center">Informasi</h4>
                            <hr class="bg-primary">
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="font-weight-bold">Email:</p>
                                    <input class="form-control text-muted" name="email" value="<?php echo $data['email']; ?>">
                                    </input>
                                </div>
                                <div class="col-sm-6">
                                    <p class="font-weight-bold">Phone:</p>
                                    <input class="form-control text-muted" name="no_hp" value="<?php echo $data['no_hp']; ?>" ></input>
                                </div>
                            </div>
                            
                            <hr class="bg-primary">
                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="font-weight-bold">Jenis kelamin</p>
                          	  	<input class="form-control text-muted " name="jenis_kelamin" value="<?php echo $data['jenis_kelamin'];?>">
                                </div>
                                <div class="col-sm-6">
                                    <p class="font-weight-bold">Alamat</p>
                                    <input class="form-control text-muted " name="alamat" value="<?php echo $data['alamat'];?>">
                                </div>
                            </div>
                            <hr class="bg-primary">
                            <ul class="list-unstyled d-flex justify-content-center mt-4">
                                <li><a href="#!"><i class="fab fa-facebook-f px-3 h4 text-info"></i></a></li>
                                <li><a href="#!"><i class="fab fa-youtube px-3 h4 text-info"></i></a></li>
                                <li><a href="#!"><i class="fab fa-twitter px-3 h4 text-info"></i></a></li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>