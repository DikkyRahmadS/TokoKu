<?php
include '../../koneksi/koneksi.php';
$id = $_GET["id"];
//mengambil id yang ingin dihapus

//jalankan query DELETE untuk menghapus data
$query = "DELETE FROM kategori WHERE id_kategori ='$id'";
$hasil_query = mysqli_query($koneksi, $query);

//periksa query, apakah ada kesalahan
if (!$hasil_query) {
    die("Gagal menghapus data: " . mysqli_errno($koneksi) .
        " - " . mysqli_error($koneksi));
} else {
    echo "<script>alert('Data berhasil dihapus.');window.location='../../layout/main.php?page=kategori';</script>";
}
