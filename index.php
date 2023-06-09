<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>CRUD PHP</title>
    <link rel="stylesheet" href="style.css?version=1">
</head>
<body>
    

    <div class="wrapper">
        

            <div class="tb">
                <h2 class="bg-warning text-center py-3">Data User</h2>
                <div class="mx-3">        
                <div class="row">
                    <div class="col-2">
                        <a href="tambahdata.php" class="btn btn-sm btn-success ms-2 mt-1 mb-3">Tambah Data</a> 
                    </div>
                    <div class="col-4">
                        <a href="cetak.php" target="_blank" class="btn btn-sm btn-primary mt-1 mb-3">Cetak Data</a>
                    </div>
                    <div class="col-6">
                      <form action="index.php" method="get">
                        <label>Cari Nama :</label>
                        <input type="text" class="form-control-sm" name="cari">
                        <select name="berdasarkan" class="form-control-sm" id="">
                            <option value="username">Username</option>
                            <option value="nama">Nama</option>
                            <option value="jk">Jk</option>
                            <option value="ttl">Tanggal Lahir</option>
                            <option value="alamat">Alamat</option>
                            <option value="email">Email</option>
                            <option value="no_hp">No HP</option>
                        </select>
                        <input type="submit" class="btn btn-sm btn-warning" value="Cari">
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
                <table class="my-tb table table-striped table-hover table-bordered py-2" id="myTable" border="1">
                    <tr>
                        <td>No</td>
                        <td>Username</td>
                        <td>Nama</td>
                        <td>Jk</td>
                        <td>Tanggal Lahir</td>
                        <td>Alamat</td>
                        <td>Email</td>
                        <td>No HP</td>
                        <td>Aksi</td>
                    </tr>
                    <?php 
		include 'koneksi.php';
        

	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
        $berdasarkan = $_GET['berdasarkan'];
		$data = mysqli_query($conn,"select * from user where ".$berdasarkan." like '%".$cari."%'");				
	}else{
        if (empty($_GET['cari'])) {
            # code...
            $data = mysqli_query($conn,"select * from user");		
        }
	}
	$no = 1;
	while($d = mysqli_fetch_array($data)){
	?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['username']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['jk']; ?></td>
				<td><?php echo $d['ttl']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['email']; ?></td>
				<td><?php echo $d['no_hp']; ?></td>
				<td>
					<a class="btn btn-sm btn-primary" href="edit-data.php?username=<?php echo $d['username']; ?>">EDIT</a>
					<a class="btn btn-sm btn-danger"  href="aksi-hapus.php?username=<?php echo $d['username']; ?>" onclick="return confirm('Yakin Hapus?')">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>

                </table>
                </div>
                
            </div>
        </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>