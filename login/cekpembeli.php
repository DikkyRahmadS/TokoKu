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
$data = mysqli_query($koneksi, "select * from pembeli where email='$email' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
while ($row = mysqli_fetch_assoc($data)) {

    if ($cek > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        $_SESSION['id_pembeli'] = $row['id_pembeli'];
        header("location:../homepage/index.php");
    } else {
        header("location:index.php?pesan=gagal");
    }
}
