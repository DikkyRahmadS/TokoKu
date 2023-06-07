<?php
include '../../koneksi/koneksi.php';
$sql = "INSERT INTO kategori(nama_kategori)
            VALUES ('$_POST[nama_kategori]')";
$query = mysqli_query($koneksi, $sql);

if ($query) {
    # code redicet setelah insert ke index
    header("location:../../layout/main.php?page=kategori");
} else {
    echo "ERROR, tidak berhasil" . mysqli_error($koneksi);
}
