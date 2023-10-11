<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Produk</title>
    </head>
<body>
        <h1>Edit Produk</h1>
        <hr>
        <?php
        include 'koneksi.php';
        $id_masyarakat = $_GET['id_masyarakat'];    
   
        $data = mysqli_query($koneksi,"select * from masyarakat where id_masyarakat = '$id_masyarakat'" );
        while($d = mysqli_fetch_array($data)){
           
        ?>

<form method="POST" action="masyarakat-update.php">
            <input type="hidden" name="id_masyarakat" value="<?php echo $d['id_masyarakat']; ?>">
            
                <label for="nik">Nik:</label>
                <input type="text" class="form-control" name="nik" value="<?php echo $d['nik']; ?>  "required>
            

            
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $d['nama']; ?> "required>
            

            
                <label for="username">Username:</label>
                <input type="text" class="form-control" name="username" value=" <?php echo $d['username']; ?> "required>


                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" value=" <?php echo $d['password']; ?> "required>


                <label for="telepon">Telepon:</label>
                <input type="telepon" class="form-control" name="telepon" value=" <?php echo $d['telepon']; ?> "required>
           

            <button type="submit">Simpan</button>
            <a href="masyarakat-detail.php">Batal</a>
        </form>

        <?php
        } 
        ?>
    </div>
</body>
</html>