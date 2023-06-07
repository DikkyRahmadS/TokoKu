<?php
include '../../koneksi/koneksi.php';
$sql = "INSERT INTO pembeli(nama, email, password, alamat)
            VALUES ('$_POST[nama_pengguna]', '$_POST[email_pengguna]', '$_POST[pass_pengguna]', '$_POST[alamat_pengguna]')";
$query = mysqli_query($koneksi, $sql);

if ($query) {
    # code redicet setelah insert ke index
    header("location:../../layout/main.php?page=pengguna");
} else {
    echo "ERROR, tidak berhasil" . mysqli_error($koneksi);
}