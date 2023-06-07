<?php
include '../../koneksi/koneksi.php';
$sql = "INSERT INTO admin(email, password)
            VALUES ('$_POST[email_admin]', '$_POST[pass_admin]')";
$query = mysqli_query($koneksi, $sql);

if ($query) {
    # code redicet setelah insert ke index
    header("location:../../layout/main.php?page=petugas");
} else {
    echo "ERROR, tidak berhasil" . mysqli_error($koneksi);
}