<?php 
// // koneksi database
 
// // menangkap data yang di kirim dari form
// $id = $_POST['id'];
// $nama = $_POST['nama'];
// $alamat = $_POST['alamat'];
// $hobi = $_POST['hobi'];
 
// // update data ke database
// mysqli_query($conn,"UPDATE peserta SET nama='$nama', alamat='$alamat', hobi='$hobi' where id='$id'");
 
// // mengalihkan halaman kembali ke index.php
// header("location:index.php");
 
?>

<?php 
if(isset($_POST['submit'])){
    include 'coba.php';

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $hobi = $_POST['hobi'];

// update data ke database
// mysqli_query($conn,"UPDATE peserta SET id='$id', nama='$nama', alamat='$alamat', hobi='$hobi' where id='$id'");
$query=mysqli_query($conn, "UPDATE peserta SET `nama` = '$nama', `alamat` = '$alamat', `hobi` = '$hobi' WHERE `id` = $id");
 
if($query){
    header("location:index.php");
}else{
    echo 'gagal';
}
// mengalihkan halaman kembali ke index.php
// 
}
?>