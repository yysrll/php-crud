<?php 

include 'coba.php';

$id = $_GET['id'];

mysqli_query($conn, "delete from peserta where id='$id'");

header("location:index.php")

?>