<?php
    include 'BukuModel.php';

    class BukuController {
        function halamanUtama() {
            $model = new BukuModel();
            $data_buku = $model->tampilData();
            include 'views/buku_list.php';
        }

        function halamanTambah() {
            include 'views/buku_form.php';
        }

        function prosesSimpan() {
            $model = new BukuModel();
            $judul = $_POST['judul'];
            $penulis = $_POST ['penulis'];
            $penerbit = $_POST['penerbit'];
            $tahun = $_POST ['tahun_terbit'];
            $kategori = $_POST['kategori'];

            $model->simpanBuku($judul, $penulis, $penerbit, $tahun, $kategori);

            header("Location: index.php");
        }
    }
?>