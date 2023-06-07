<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include '../koneksi/koneksi.php';
echo get_include_path();
// menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi, "select * from admin where email='$email' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if ($cek > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    $_SESSION['id_pembeli'] = $id_pembeli;
    header("location:../layout/main.php?page=beranda");
} else {
    header("location:index.php?pesan=gagal");
}
