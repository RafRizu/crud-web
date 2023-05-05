<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Tambah Data</title>
    
</head>
<body>
  <br><br><br>
      

  <br>
	<div class="d-block mx-auto my-auto">
  <div class="mx-auto my-auto py-3">
    <form action="aksi-tambah.php" method="post">
      <table class="py-4 " border="1" align="center" cellpadding="10">
        <tr class="bg-warning">
          <td colspan="2">
        <div>
          <h3 class="text-center px-3 py-2">Tambah User</h3>
        </div>  

          </td>
        </tr>
        <tr>
          <td colspan="2">        
            <?php       
        if(isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
        if($pesan == "gagal"){
            echo "Data Tidak Boleh Kosong.<br>";
                  } 
                }
                  ?></td>
        </tr>
        <tr>
          <td>Username</td>
          <td><input type="text" name="username" id=""></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td>
            <input type="text" name="nama" id="">
          </td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>
            <textarea name="alamat" id="" cols="23" rows="2">

            </textarea>
          </td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="text" name="email" id=""></td>
        </tr>
        <tr>
          <td>No Hp</td>
          <td><input type="number" name="no_hp" id=""></td>
        </tr>
            <td><a href="index.php" class="btn btn-danger">Kembali</a></td>
            <td><input type="submit" value="Kirim" class="btn btn-success" ></input></td>
      </table>
      
    </form>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>