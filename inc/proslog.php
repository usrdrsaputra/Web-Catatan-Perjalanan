<?php
session_start();
include 'koneksi.php';
$username = $_POST['username']; 
$password = $_POST['password']; 
$sql = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' AND password='$password' ");
$data = mysqli_fetch_array($sql);
$cek = mysqli_num_rows($sql);
if ($cek>0) {
	if ($data['akses']=="admin") {
		$_SESSION['username']= $username;
		$_SESSION['status']= "ADMIN";
		$_SESSION['id_user']=$data[0];
		header("location:../admin/index.php");
		
	}else if($data['akses']=="user") {
		$_SESSION['username']= $username;
		$_SESSION['status']= "USER";
		$_SESSION['id_user']=$data[0];
		header("location:../users/index.php");
    }
}else{
	?>
	<script type="text/javascript">
		alert("Akun Anda Ada Yang Salah");
		window.location="../login/index.php";
	</script>

<?php
}

?>
