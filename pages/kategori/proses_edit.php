<?php
include '../../koneksi/koneksi.php';
$sql = "UPDATE kategori SET nama_kategori ='$_POST[nama_kategori]' WHERE id_kategori='$_POST[id]'";
$query = mysqli_query($koneksi, $sql);

if ($query) {
    # code redicet setelah insert ke index
    header("location:../../layout/main.php?page=kategori");
} else {
    echo "ERROR, tidak berhasil" . mysqli_error($koneksi);
}
