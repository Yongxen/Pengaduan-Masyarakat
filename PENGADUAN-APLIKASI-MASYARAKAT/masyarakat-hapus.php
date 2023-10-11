<?php
include 'koneksi.php';

$id = $_GET['id_masyarakat'];

mysqli_query($koneksi, "DELETE FROM masyarakat where id_masyarakat='$id'");

header("location:masyarakat-detail.php");

?>
