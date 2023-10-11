<?php
include 'koneksi.php';

// Periksa apakah id_masyarakat telah dikirimkan melalui POST
if(isset($_POST['id_masyarakat'])) {
    $id_masyarakat = $_POST['id_masyarakat'];
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $telepon = $_POST['telepon'];

    $query = "UPDATE masyarakat SET nik=?, nama=?, username=?, password=?, telepon=? WHERE id_masyarakat=?";
    $stmt = mysqli_prepare($koneksi, $query);

    // Bind parameter
    mysqli_stmt_bind_param($stmt, "sssssi", $nik, $nama, $username, $password, $telepon, $id_masyarakat);

    // Eksekusi query
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        // Redirect ke halaman masyarakat-detail.php setelah pembaruan berhasil
        header("Location: masyarakat-detail.php");
        exit; // Pastikan keluar dari script setelah redirect
    }
}

// Tutup koneksi ke database jika diperlukan
mysqli_close($koneksi);
?>
