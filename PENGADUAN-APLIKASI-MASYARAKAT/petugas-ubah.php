<?php 

require 'petugas-functions.php';

$d = null;

if (isset($_GET['id_petugas'])) {
    $id = $_GET['id_petugas'];
    $datee = runQuery("SELECT * FROM petugas WHERE id_petugas= $id")[0];
}
// var_dump($student['nama']); ide;

// Memeriksa apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //var_dump($_POST); die;
    $result = update($_POST);

    if ($result !== false && $result > 0 ) {
        echo "Data has been succesfully updated";
    }else{
        echo "Failed to update data";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    </div>
    <div class="content">
        <div>
        <form action="" id="crud" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id_petugas" value="<?= $datee['id_petugas']; ?>">
            <h1 style="text-align: center;">Ubah Data</h1>
            <br>
            <label for="grade">nama : </label><br>
            <input type="text" id="nama" name="nama_petugas" value="<?= $datee["nama_petugas"]; ?>"><br>
            <label for="name">username : </label><br>
            <input type="text" id="username" name="username" value="<?= $datee['username']; ?>"><br>
            <label for="name">password : </label><br>
            <input type="text" id="password" name="password" value="<?= $datee['password']; ?>"><br>
            <label for="name">telepon : </label><br>
            <input type="text" id="telepon" name="telepon" value="<?= $datee['telepon']; ?>"><br>
            <label for="name">level: </label><br>    
            <select type="text" id="level" name="level" value="<?= $datee['level']; ?>" id="">
            <option value="#">--Pilih Level--</option>
            <option value="Admin">Admin</option>
            <option value="Operator">Operator</option>
            </select><br>
            <button type="submit" name="submit">Ubah Data</button>
            <br>
            <a style="text-align: center;" href="petugas.php">Halaman Petugas</a>
        </form>
    </div>
</div>
<div class="footer">
    <p>&copy; 2023 Hak Cipta Yang Dilindungi</p>
</div>
</body>
</html>