<?php 
include "../lib/koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM tbl_user WHERE username='$username' AND password='$password'";
$q = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($q);
$jumlah = mysqli_num_rows($q);

if ($jumlah==1) {
    session_start();
        $_SESSION['username'] = $data['username'];
        $_SESSION['level'] = $data['level']; 
        header('location:adminweb.php?module=home');
} else {
	echo "<script type='text/javascript'>alert('Username & Password Anda Salah!');
 		history.back(self);
        </script>";
}

?>