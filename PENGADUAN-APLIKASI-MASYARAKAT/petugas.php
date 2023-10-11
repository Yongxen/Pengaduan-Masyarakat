<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Masyarakat</title>
    
</head>
<body>
    <a class="add-button" href="petugas-tambah.php">Tambah Data Lagi</a>
    <table border="1">
        <tr>
            <th>ID Petugas</th>
            <th>Nama</th>
            <th>Username</th>
            <th>password</th>
            <th>telepon</th>
            <th>level</th>
            <th>Aksi</th>
        </tr>

        <?php 
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from petugas");
        while($d = mysqli_fetch_array($data)){
        ?>
        
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['nama_petugas']; ?></td>
            <td><?php echo $d['username']; ?></td>
            <td><?php echo $d['password']; ?></td>
            <td><?php echo $d['telepon']; ?></td>
            <td><?php echo $d['level']; ?></td>
            <td>
                <a href="petugas-hapus.php?id_petugas=<?php echo $d['id_petugas']; ?>">Hapus</a>
                <a href="petugas-ubah.php?id_petugas=<?php echo $d['id_petugas']; ?>">Edit</a>
            </td>
        </tr>

        <?php 
        }
        ?>
    </table>
</body>
</html>
