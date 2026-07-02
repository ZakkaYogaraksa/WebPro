<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form tambah buku</title>
</head>

<body>
    <h2>Form Tambah Buku</h2>
    <form action="index.php?aksi=simpan" method="POST">
        <table>
            <tr>
                <td>Judul Buku</td>
                <td>: <input type="text" name="judul" required></td>
            </tr>
            <tr>
                <td>Penulis</td>
                <td>: <input type="text" name="penulis" required></td>
            </tr>
            <tr>
                <td>Penerbit</td>
                <td>: <input type="text" name="penerbit" required></td>
            </tr>
            <tr>
                <td>Tahun</td>
                <td>: <input type="number" name="tahun_terbit" required></td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>: <input type="text" name="kategori" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit">Simpan</button>
                    <a href="index.php">Batal</a>
                </td>
            </tr>
        </table>
    </form>

</body>

</html>