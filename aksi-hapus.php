<?php 
include 'koneksi.php';
$username = $_GET['username'];
mysqli_query($conn,"DELETE FROM user WHERE username='$username'")or die(mysql_error());
 
header("location:index.php?pesan=hapus");
?>