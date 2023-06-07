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


    <!-- Header-->
    <header class="bg-dark py-5" style="background-image: url(https://images.unsplash.com/photo-1612599316791-451087c7fe15?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=824&q=80); background-repeat: no-repeat; background-size: cover;">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-black">
                <h1 class="display-4 fw-bolder">Belanja Lebih Hemat</h1>
                <p class="lead fw-bold text-black-50 mb-0">di TokoKu</p>
            </div>
        </div>
    </header>


    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <form class="row g-3 mb-4">
                <label for="fkategori" class="col-sm-1 col-form-label">Kategori</label>
                <div class="col-2">
                    <select class="form-control" id="fkategori" name="fkategori">
                        <?php
                        $query = "SELECT * FROM kategori  ORDER BY nama_kategori ASC";
                        $result = mysqli_query($koneksi, $query);
                        if (!$result) {
                            die("Query Error: " . mysqli_errno($koneksi) .
                                " - " . mysqli_error($koneksi));
                        }
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                            <option value="<?php echo $row['id_kategori']; ?>" <?php if ($row['nama_kategori'] == $row['id_kategori']) echo 'selected="selected"'; ?>><?php echo $row['nama_kategori']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-outline-secondary">Cari</button>
                </div>
            </form>

            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content" id="displayProduct">

                <!-- menampilkan data dari database -->
                <?php
                $batas   = 8;
                $halaman = @$_GET['halaman'];
                if (empty($halaman)) {
                    $posisi  = 0;
                    $halaman = 1;
                } else {
                    $posisi  = ($halaman - 1) * $batas;
                }

                $no = $posisi + 1;
                if (isset($_GET['fkategori'])) {
                    $id_kategori = $_GET['fkategori'];
                    if ($id_kategori == "") {
                        $query = "SELECT * FROM barang INNER JOIN kategori on barang.kategori=kategori.id_kategori";
                    } else {
                        $query = "SELECT * FROM barang INNER JOIN kategori on barang.kategori=kategori.id_kategori WHERE kategori = $id_kategori";
                    }
                } else {
                    $query = "SELECT * FROM barang INNER JOIN kategori on barang.kategori=kategori.id_kategori order by nama_barang asc limit $posisi,$batas";
                }
                $result = mysqli_query($koneksi, $query);
                if (!$result) {
                    die("Query Error: " . mysqli_errno($koneksi) .
                        " - " . mysqli_error($koneksi));
                }
                while ($row = mysqli_fetch_assoc($result)) { ?>
                    <!-- display barang -->
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- img barang -->
                            <img class="card-img-top" src="../pages/barang/gambar/<?php echo $row['gambar']; ?>" alt="..." style="max-height: 450px; max-width: 450px;">
                            <!-- detail barang -->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder"><?php echo $row['nama_barang']; ?></h5>
                                    <h6><?php echo $row['nama_kategori']; ?></h6>
                                    <?php echo "Rp" . number_format($row['harga'], 2, ",", "."); ?>
                                </div>
                            </div>
                            <!-- action barang -->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="proses.php?id_barang=<?php echo $row['id_barang']; ?> ?>">Beli</a></div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <?php

            $query2     = mysqli_query($koneksi, "SELECT * FROM barang INNER JOIN kategori on barang.kategori=kategori.id_kategori");
            $jmldata    = mysqli_num_rows($query2);
            $jmlhalaman = ceil($jmldata / $batas);
            ?>
            <div class="text-center">
                <ul class="pagination">
                    <?php
                    for ($i = 1; $i <= $jmlhalaman; $i++) {
                        if ($i != $halaman) {
                            echo "<li class='page-item'><a class='page-link' href='collection.php?halaman=$i'>$i</a></li>";
                        } else {
                            echo "<li class='page-item active'><a class='page-link' href='#'>$i</a></li>";
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
    </section>

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