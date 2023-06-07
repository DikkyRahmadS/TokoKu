<?php
include '../../koneksi/koneksi.php';
$id = $_POST['id_barang'];
$nama_barang   = $_POST['nama_barang'];
$gambar =  $_FILES['gambar']['name'];
$kategori     = $_POST['kategori'];
$stok    = $_POST['stok'];
$harga    = $_POST['harga'];


//cek dulu jika ada gambar produk jalankan coding ini
if ($gambar != "") {
  $ekstensi_diperbolehkan = array('png', 'jpg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $gambar); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];
  $angka_acak     = rand(1, 999);
  $nama_gambar_baru = $angka_acak . '-' . $gambar; //menggabungkan angka acak dengan nama file sebenarnya
  if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
    move_uploaded_file($file_tmp, '../../pages/barang/gambar/' . $nama_gambar_baru); //memindah file gambar ke folder gambar
    // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
    $query  = "UPDATE barang SET nama_barang = '$nama_barang', gambar = '$nama_gambar_baru', stok = '$stok', harga = '$harga'";
    $query .= "WHERE id_barang = '$id'";
    $result = mysqli_query($koneksi, $query);
    // periska query apakah ada error
    if (!$result) {
      die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
        " - " . mysqli_error($koneksi));
    } else {
      //tampil alert dan akan redirect ke halaman ../../layout/main.php?page=barang
      //silahkan ganti ../../layout/main.php?page=barang sesuai halaman yang akan dituju
      echo "<script>alert('Data berhasil diupdate.');window.location='../../layout/main.php?page=barang';</script>";
    }
  } else {
    //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
    echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah_produk.php';</script>";
  }
} else {
  $query  = "UPDATE barang SET nama_barang = '$nama_barang',  stok = '$stok', harga = '$harga'";
  $query .= "WHERE id_barang = '$id'";
  $result = mysqli_query($koneksi, $query);
  // periska query apakah ada error
  if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
      " - " . mysqli_error($koneksi));
  } else {
    //tampil alert dan akan redirect ke halaman ../../layout/main.php?page=barang
    //silahkan ganti ../../layout/main.php?page=barang sesuai halaman yang akan dituju
    echo "<script>alert('Data berhasil diupdate.');window.location='../../layout/main.php?page=barang';</script>";
  }
}
