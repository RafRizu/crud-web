<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$username = $_POST['username'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
 

 $cek = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM user WHERE username='$username' or email='$email'"));
    if ($cek > 0){
        header("location:tambahdata.php?pesan=duplikat");
    }elseif (empty($username && $nama && $jk && $ttl && $alamat && $email && $no_hp)){
    header("location:tambahdata.php?pesan=gagal");
}else{
mysqli_query($conn,"insert into user values('$username','$nama','$jk','$ttl','$alamat','$email','$no_hp')");
header("location:index.php?pesan=input");
    }
    
    ?>