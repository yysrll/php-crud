<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<?php
    include 'coba.php';
    include 'edit.php';
	$id = $_GET['id'];
	$data = mysqli_query($conn,"SELECT*FROM peserta where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>

<div class="container">
    <div class="col-sm-4">
    <h2> Edit Peserta</h2>
		<form method="post" action="edit.php">
        <input type="hidden" name="id" class="form-control"  value="<?php echo $d['id']; ?>">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control"  value="<?php echo $d['nama']; ?>">
            </div>
            <div class="form-group">
                <label>alamat</label>
                <input type="text" name="alamat"  class="form-control"  value="<?php echo $d['alamat']; ?>">
            </div>
            <div class="form-group">
                <label>Hobi</label>
                <input type="text" name="hobi" class="form-control" value="<?php echo $d['hobi']; ?>">
            </div>
            <button name="submit" type="submit" class="btn btn-primary" >Simpan</button>
		</form>
    </div>
</div>

<?php 
	}
	?>
</body>
</html>