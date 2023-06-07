<!DOCTYPE html>
<html>

<head>
    <title>Membuat Login Dengan PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>

<body>
    <h2>Halaman Admin</h2>

    <br />

    <!-- cek apakah sudah login -->
    <?php
    session_start();
    if ($_SESSION['status'] != "login") {
        header("location:../index.php?pesan=belum_login");
    }
    ?>

    <h4>Selamat datang, <?php echo $_SESSION['username']; ?>! anda telah login.</h4>

    <br />
    <br />

    <a href="logout.php">LOGOUT</a>


</body>

</html>

<!-- cek apakah sudah login -->
<?php
// session_start();
if ($_SESSION['status'] != "login") {
    header("location:../index.php?pesan=belum_login");
}
?>