<?php 
$koneksi = mysqli_connect("localhost","root","","db_evoting");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL". mysqli_connect_errno();
    exit();
}

?>