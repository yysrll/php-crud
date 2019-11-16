<?php
include 'coba.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Junior Web</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div>
<h2>Peserta</h2>

    <div class="col-sm-4">
        <form method="post" action="tambah.php">
            <div class="form-group">
                <label>Nama</label>
                <input name="nama" class="form-control"  placeholder="Masukkan Nama">
            </div>
            <div class="form-group">
                <label>alamat</label>
                <input name="alamat"  class="form-control"  placeholder="Masukkan alamat">
            </div>
            <div class="form-group">
                <label>Hobi</label>
                <input name="hobi" class="form-control" placeholder="Sepak bola, Makan, dll">
            </div>
            <button type="submit" class="btn btn-primary" >Simpan</button>
        </form>
    </div>
</div>

<br><br>
<div style="text-align:center;">
<h2>Tabel Peserta</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Hoby</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <?php 
        $data = mysqli_query($conn,"SELECT * FROM peserta");
        while($a = mysqli_fetch_array($data)){
        ?>
      <th><?php echo $a['id'] ?></th>
      <td><?php echo $a['nama'] ?></td>
      <td><?php echo $a['alamat'] ?></td>
      <td><?php echo $a['hobi'] ?></td>
      <td><a href="hapus.php?id=<?php echo $a['id']; ?>" class="btn btn-danger">Hapus</a>
      <a href="ngedit.php?id=<?php echo $a['id']; ?>" class="btn btn-primary">Edit</a></td>
    </tr>
        <?php
        }
        ?>
  </tbody>
</table>
</div>

</body>
</html>