<?php
    include 'coba.php';

    //menagkap data dari form
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $hobi = $_POST['hobi'];

    //input ke database
    mysqli_query($conn, "insert into peserta values('','$nama','$alamat','$hobi')");

    header("location:index.php")
?>