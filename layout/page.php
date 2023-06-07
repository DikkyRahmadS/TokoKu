<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
            // kategori
        case 'kategori':
            include '../pages/kategori/kategori.php';
            break;
        case 'tambah_kategori':
            include '../pages/kategori/tambah.php';
            break;
        case 'edit_kategori':
            include '../pages/kategori/edit.php';
            break;
            // Barang
        case 'barang':
            include '../pages/barang/barang.php';
            break;
        case 'tambah_barang':
            include '../pages/barang/tambah.php';
            break;
        case 'edit_barang':
            include '../pages/barang/edit.php';
            break;
            // pengguna
        case 'pengguna':
            include '../pages/pengguna/pengguna.php';
            break;
        case 'tambah_pengguna':
            include '../pages/pengguna/tambah.php';
            break;
        case 'edit_pengguna':
            include '../pages/pengguna/edit.php';
            break;
            // transaksi
        case 'transaksi':
            include '../pages/transaksi/transaksi.php';
            break;
            // petugas
        case 'petugas':
            include '../pages/petugas/petugas.php';
            break;
        case 'tambah_petugas':
            include '../pages/petugas/tambah.php';
            break;
        case 'edit_petugas':
            include '../pages/petugas/edit.php';
            break;
            //beranda
        case 'beranda':
            include '../pages/beranda.php';
            break;
    }
} else {
    include "../pages/beranda.php";
}
