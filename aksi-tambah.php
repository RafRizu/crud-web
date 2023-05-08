<?php 
// koneksi database
include 'koneksi.php';
 



// menangkap data yang di kirim dari form
$username = $_POST['username'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
 


if (empty($username && $nama && $alamat && $email && $no_hp)) {
    header("location:tambahdata.php?pesan=gagal");
}else{// menginput data ke database
mysqli_query($conn,"insert into user values('$username','$nama','$alamat','$email','$no_hp')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php?pesan=input");
 }

?>