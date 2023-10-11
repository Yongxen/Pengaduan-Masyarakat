<?php
include('koneksi.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tangkap_email = $_POST['email'];
    $tangkap_nama = $_POST['nama_user'];
    $tangkap_pass = $_POST['password'];

    $query = "INSERT INTO tb_user (email, nama_user, password) VALUES ('$tangkap_email', '$tangkap_nama', '$tangkap_pass')";
    
    if (mysqli_query($koneksi, $query)) {
        $_SESSION['user_aktif'] = $tangkap_email;
        header("location:login.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
?>