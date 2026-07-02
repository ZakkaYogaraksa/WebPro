<?php
    include 'koneksi.php';
    include 'BukuController.php';

    $controller = new BukuController();

    @$aksi = $_GET['aksi'];

    if($aksi == 'tambah') {
        $controller->halamanTambah();
    }elseif($aksi == 'simpan') {
        $controller->prosesSimpan();
    }else{
        $controller->halamanUtama();
    }
?>