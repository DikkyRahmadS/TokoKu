<?php
include '../../koneksi/koneksi.php';
$sql = "UPDATE pembeli 
        SET nama = '$_POST[nama_pengguna]', email = '$_POST[email_pengguna]', password = '$_POST[pass_pengguna]', alamat = '$_POST[alamat_pengguna]'
        WHERE id_pembeli ='$_POST[id]'";
$query = mysqli_query($koneksi, $sql);

if ($query) {
    # code redicet setelah insert ke index
    header("location:../../layout/main.php?page=pengguna");
} else {
    echo "ERROR, tidak berhasil" . mysqli_error($koneksi);
}