<?php
include('koneksi.php');
session_start();

$tangkap_email = $_POST['email'];
$tangkap_nama = $_POST['nama_user'];
$tangkap_pass = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT id FROM tb_user WHERE nama_user = '$tangkap_nama' AND email = '$tangkap_email' AND password = '$tangkap_pass'");

$baris = mysqli_num_rows($query);

if ($baris == 1) {
    $data = mysqli_fetch_array($query);
    $_SESSION['user_aktif'] = $tangkap_nama; // Ganti dengan kolom yang benar sesuai dengan database Anda
    header("location:masyarakat-detail.php");
} else {
    echo "Maaf Email/Password Anda Salah";
}
?>
<br>
<br>
<input type="submit" value="Ulangi" onclick="location.href='login.php'">
