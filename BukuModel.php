<?php
    class BukuModel {
        function tampilData() {
            global $koneksi;
            $query ="SELECT * FROM buku";
            $hasil = mysqli_query($koneksi, $query);
            return $hasil;
        }

        function simpanBuku($judul, $penulis, $penerbit, $tahun, $kategori) {
            global $koneksi;
            $query = "INSERT INTO buku (judul, penulis, penerbit, tahun_terbit, kategori) 
                    VALUES ('$judul', '$penulis', '$penerbit', '$tahun', '$kategori')";
            mysqli_query($koneksi, $query);
        }
    }
?>