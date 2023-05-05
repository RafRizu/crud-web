<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>CRUD PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

    <div class="wrapper">
        

            <div class="tb">
                <h2 class="bg-warning text-center py-3">Data User</h2>
                <div class="mx-3">        
                <div class="row">
                    <div class="col-6">
                        <a href="tambahdata.php" class="btn btn-success ms-4 mt-1 mb-3">Tambah Data</a> 
                    </div>
                    <div class="col-6">
                      <form action="index.php" method="get">
                        <label>Cari Nama :</label>
                        <input type="text" class name="cari">
                        <input type="submit" class="btn btn-warning" value="Cari">
                    </form>
                    </div>
                </div>
                
                    <?php 
                        if(isset($_GET['pesan'])){
                        $pesan = $_GET['pesan'];
                        if($pesan == "input"){
                            echo "Data berhasil di input.<br>";
                        }else if($pesan == "update"){
                            echo "Data berhasil di update.<br>";
                        }else if($pesan == "hapus"){
                            echo "Data berhasil di hapus.<br>";
                        }else{
                            echo "Data Gagal";
                        }
                    }
                    ?>
                <table class="my-tb table table-striped table-hover table-bordered py-2" border="1">
                    <tr>
                        <td>No</td>
                        <td>Username</td>
                        <td>Nama</td>
                        <td>Alamat</td>
                        <td>Email</td>
                        <td>No HP</td>
                        <td>Aksi</td>
                    </tr>
                    <?php 
		include 'koneksi.php';
        

	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysqli_query($conn,"select * from user where username or nama or alamat or email or no_hp like '%".$cari."%'");				
	}else{
		$data = mysqli_query($conn,"select * from user");		
	}
	$no = 1;
	while($d = mysqli_fetch_array($data)){
	?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['username']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['email']; ?></td>
				<td><?php echo $d['no_hp']; ?></td>
				<td>
					<a class="btn btn-primary" href="edit-data.php?username=<?php echo $d['username']; ?>">EDIT</a>
					<a class="btn btn-danger"  href="aksi-hapus.php?username=<?php echo $d['username']; ?>" onclick="return confirm('Yakin Hapus?')">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>

                </table>
                </div>
                
            </div>
        </div>
<script src="cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>