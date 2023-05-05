<?php 
 
include 'koneksi.php';
$username = $_POST['username'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];

mysqli_query($conn,"UPDATE user SET nama='$nama', alamat='$alamat', email='$email', no_hp='$no_hp' WHERE username='$username'");
 
header("location:index.php?pesan=update");
?>