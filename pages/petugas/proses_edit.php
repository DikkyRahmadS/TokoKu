<?php
include '../../koneksi/koneksi.php';
$sql = "UPDATE admin 
        SET  email = '$_POST[email_admin]', password = '$_POST[pass_admin]' 
        WHERE id_admin = '$_POST[id_admin]'";
$query = mysqli_query($koneksi, $sql);

if ($query) {
    # code redicet setelah insert ke index
    header("location:../../layout/main.php?page=petugas");
} else {
    echo "ERROR, tidak berhasil" . mysqli_error($koneksi);
}