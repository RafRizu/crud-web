<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Edit Data</title>
</head>
<body>
    <br><br><br><br>
  	<?php 
	include "koneksi.php";
	$id = $_GET['username'];
	$query_mysql = mysqli_query($conn,"SELECT * FROM user WHERE username='$id'")or die(mysql_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
	?>
<div class="d-block mx-auto my-auto">
  <div class="mx-auto my-auto py-3 my-3">
    <form action="aksi-edit.php" method="post">
      <table class="py-4" border="1" align="center" cellpadding="10">
        <tr class="bg-warning">
          <td colspan="2">
            <div>
              <h3 class="text-center px-3 py-2">Edit User</h3>
            </div>
          </td>
        </tr>
            <input type="hidden" value="<?php echo $data['username'] ?>" name="username">

        <tr>
          <td>Username</td>
          <td><input type="text" disabled="true" value="<?php echo $data['username'] ?>" name="username"></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td>
            <input type="text" name="nama" id="" value="<?php echo $data['nama'] ?>">
          </td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td>
            <select name="jk" id="" value="<?php echo $data['jk'] ?>">
              <option value="L">Laki-laki</option>
              <option value="P">Perempuan</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>Tanggal Lahir</td>
          <td>
            <input type="date" name="ttl" id="" value="<?php echo $data['ttl'] ?>">
          </td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>
            <input type="text" name="alamat" id="" cols="23" rows="2" value="<?php echo $data['alamat'] ?>">
          </td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="text" name="email" id="" value="<?php echo $data['email'] ?>"></td>
        </tr>
        <tr>
          <td>No Hp</td>
          <td><input type="number" name="no_hp" id="" value="<?php echo $data['no_hp'] ?>"></td>
        </tr>
            <td><a href="index.php" class="btn btn-danger">Kembali</a></td>
            <td><input type="submit" value="Kirim" class="btn btn-success" onclick="return confirm('Yakin Edit?')" ></input></td>
      </table>
      
    </form>
    <?php } ?>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>