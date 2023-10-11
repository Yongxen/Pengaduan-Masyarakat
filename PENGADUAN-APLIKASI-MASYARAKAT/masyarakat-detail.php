<a href="masyarakat-tambah.php">Tambah data lagi</a>
<table class="table" border="1px">
        <tr>
            <td>ID-Masyarakat</td>
            <br>
            <td>Nik</td>
            <td>Nama</td>
            <td>Username</td>
            <td>Password</td>
            <td>Telepon</td>
            <TD>Aksi</TD>
        </tr>

        <?php 
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from masyarakat");
        while($d = mysqli_fetch_array($data)){
        ?>
        
        <tr id="hasil">
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['nik'] ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td><?php echo $d['username']; ?></td>
            <td><?php echo $d['password'] ?></td>
            <td><?php echo $d['telepon'] ?></td>
            <td>
            <a href="masyarakat-hapus.php?id_masyarakat=<?php echo $d['id_masyarakat']; ?>">Hapus</a>
            <a href="masyarakat-ubah.php?id_masyarakat=<?php echo $d['id_masyarakat']; ?>">Ubah</a>
            </td>
        </tr>

        <?php 
        }
        ?>
        </table>