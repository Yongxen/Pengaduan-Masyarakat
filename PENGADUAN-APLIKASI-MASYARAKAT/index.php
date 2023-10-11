<?php
include('koneksi.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tangkap_email = $_POST['email'];
    $tangkap_nama = $_POST['nama'];
    $tangkap_pass = $_POST['password'];

    $query = "INSERT INTO login (email, nama, password) VALUES ('$tangkap_email', '$tangkap_nama', '$tangkap_pass')";
    
    if (mysqli_query($koneksi, $query)) {
        $_SESSION['user_aktif'] = $tangkap_email;
        header("location:login.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
</head>
<body>
    <h2>Form Registrasi</h2>
    <form action="register-action.php" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>
        <label for="nama">Nama:</label>
        <input type="text" name="nama" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Daftar">
    </form>
</body>
</html>
