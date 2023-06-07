<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>TokoKu</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- koneksi -->
    <?php
    include "../koneksi/koneksi.php";
    ?>

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <div class="navbar-brand">TokoKu</div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link <?= ($activePage == 'index') ? 'active' : ''; ?>" aria-current="page" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link <?= ($activePage == 'collection') ? 'active' : ''; ?>" href="collection.php">Collection</a></li>
                    <li class="nav-item"><a class="nav-link <?= ($activePage == 'about') ? 'active' : ''; ?>" href="about.php">About</a></li>
                </ul>
                <a href="cart.php" style="text-decoration:none;">
                    <div class="d-flex">
                        <button class="btn btn-outline-secondary" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            History
                        </button>
                    </div>
                </a>
                <div class="cursor-pointer symbol symbol-30px symbol-md-40px">
                    <a href="../login/admin/logout.php" style="padding-left: 30px ; color:grey; text-decoration:none;">logout</a>
                </div>
            </div>
        </div>
    </nav>


    <table class="table align-middle table-row-dashed fs-6 gy-5" id="example">
        <!--begin::Table head-->
        <thead>
            <!--begin::Table row-->
            <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                <th class="w-10px pe-2 "> No </th>
                <th class="w-15px">ID Transaksi</th>
                <th class="w-70px">Nama Barang</th>
                <th class="w-70px">Nama Pembeli</th>

                <th class="w-15px">Harga</th>
                <!-- <th class=" w-70px text-end"></th> -->
            </tr>
            <!--end::Table row-->
        </thead>
        <!--begin::Body-->
        <!--begin::Table body-->
        <tbody class="fw-bold text-gray-600">
            <?php
            include "../koneksi/koneksi.php";
            $no = 0;
            $query = "SELECT * FROM transaksi 
                INNER JOIN barang on barang.id_barang=transaksi.id_barang
                INNER JOIN pembeli on pembeli.id_pembeli=transaksi.id_pembeli
                ORDER BY id_transaksi DESC";
            $result = mysqli_query($koneksi, $query);
            //mengecek apakah ada error ketika menjalankan query
            if (!$result) {
                die("Query Error: " . mysqli_errno($koneksi) .
                    " - " . mysqli_error($koneksi));
            }
            while ($row = mysqli_fetch_assoc($result)) {
                $item_price = $row["qty"] * $row["harga"];
            ?>
                <tr>
                    <td style="padding-left:10px"><?php echo $no = $no + 1; ?></td>
                    <td><?php echo $row['id_transaksi']; ?></td>
                    <td><?php echo $row['nama_barang']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo "Rp " . $row['harga']; ?></td>
                </tr>

            <?php }
            ?>
        </tbody>
        <!--end::Table body-->
    </table>

    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; TokoKu 2022</p>
        </div>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>