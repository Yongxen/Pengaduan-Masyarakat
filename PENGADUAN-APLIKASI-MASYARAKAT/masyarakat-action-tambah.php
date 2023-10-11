<?php 
include 'koneksi.php';

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$telepon = $_POST['telepon'];


$query = "INSERT INTO masyarakat (nik, nama, username, password, telepon) VALUES ('$nik', '$nama', '$username', '$password', '$telepon')";

if (mysqli_query($koneksi, $query)) {

    header("location:masyarakat-detail.php");
} 


?>
