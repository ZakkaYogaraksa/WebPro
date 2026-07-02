<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
</head>
<body>
    <h2>Data Buku</h2>
    <a href="index.php?aksi=tambah">Tambah Buku Baru</a><br><br>

    <table border="1">
            <tr>
                <th>No</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Kategori</th>
            </tr>
            
            <?php
                $no = 1;
                while($baris = mysqli_fetch_array($data_buku)) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $baris['judul']; ?></td>
                    <td><?php echo $baris['penulis']; ?></td>
                    <td><?php echo $baris['penerbit']; ?></td>
                    <td><?php echo $baris['tahun_terbit']; ?></td>
                    <td><?php echo $baris['kategori']; ?></td>
                </tr>
               <?php } ?> 
    </table>
</body>
</html>