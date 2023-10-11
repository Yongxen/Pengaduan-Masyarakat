<?php
require 'petugas-functions.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $result = create($_POST);

    if($result){
        header('location: petugas.php');
        exit;
    } else {
        echo "failed to add data";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    </div>
    <div class="content">
        <div>
        <form action="" id="crud" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_petugas" value="<?= $date['id_petugas']; ?>">
            <h1 style="text-align: center;">Tambah Data</h1>
            <br>
            <label for="grade">nama : </label><br>
            <input type="text" id="nama" name="nama_petugas" ><br>
            <label for="name">username : </label><br>
            <input type="text" id="username" name="username" ><br>
            <label for="name">password : </label><br>
            <input type="text" id="password" name="password" ><br>
            <label for="name">telepon : </label><br>
            <input type="text" id="telepon" name="telepon" ><br>
            <label for="name">level: </label><br>    
            <select type="text" id="level" name="level" >
            <option value="#">--Pilih Level--</option>
            <option value="Admin">Admin</option>
            <option value="Operator">Operator</option>
            </select><br>
            <button type="submit" name="submit">Ubah Data</button>
            <br>
            <a style="text-align: center;" href="petugas.php">Halaman Siswa</a>
        </form>
    </div>
</div>
<div class="footer">
    <p>&copy; 2023 Hak Cipta Yang Dilindungi</p>
</div>
</body>
</html>