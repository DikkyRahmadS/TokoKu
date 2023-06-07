<?php
session_start();
include '../koneksi/koneksi.php';
$id_pembeli = $_SESSION['id_pembeli'];
$id_barang = $_GET['id_barang'];

$query = "INSERT INTO transaksi(id_barang,id_pembeli)
            VALUES ('$id_barang','$id_pembeli');";
$result = mysqli_query($koneksi, $query);




if ($result) {
    # code redicet setelah insert ke index
    header("location:cart.php");
} else {
    echo "ERROR, tidak berhasil" . mysqli_error($koneksi);
}
