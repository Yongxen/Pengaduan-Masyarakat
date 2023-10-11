<?php 
include 'koneksi.php';

$id = $_GET['id_petugas'];

mysqli_query($koneksi, "DELETE FROM petugas where id_petugas='$id'");

header("location:petugas.php");
?>