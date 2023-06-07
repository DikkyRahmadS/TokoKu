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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body,
        html {
            height: 100%;
        }

        .carousel-item {
            height: 92vh;
            min-height: 350px;
            background: no-repeat center center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .judul {
            text-align: center;
            color: #212121;
            padding-bottom: .5em;
            position: relative;
            font-size: 2.5em;
            text-transform: uppercase;
        }

        .judul::after {
            content: '';
            background: #3399cc;
            height: 2px;
            width: 15%;
            position: absolute;
            bottom: 0%;
            left: 43%;
            margin-bottom: 10px;
        }

        .brosur {
            background-image: url("assets/header 2.jpg");
            height: 50%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
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
    <header>

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" style="background-image: url('https://source.unsplash.com/LAaSoL0LrYs/1920x1080')">
                    <div class="carousel-caption">
                        <h5>Toko Ku Serba Guna</h5>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
                    <div class="carousel-caption">
                        <h5>Toko Termurah</h5>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
                    <div class="carousel-caption">
                        <h5>Toko Terlengkap</h5>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>



    <!-- Section-->
    <section class="py-5">
        <div class="judul">
            <h2> BEST SELLERS</h2>
        </div>
        <div class="container px-4 px-lg-5 mt-5">


            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content" id="displayProduct">

                <!-- menampilkan data dari database -->
                <?php
                if (isset($_GET['fkategori'])) {
                    $id_kategori = $_GET['fkategori'];
                    if ($id_kategori == "") {
                        $query = "SELECT * FROM barang  INNER JOIN kategori on barang.kategori=kategori.id_kategori Where stok < 50 Where stok < 50 LIMIT 8";
                    } else {
                        $query = "SELECT * FROM barang  INNER JOIN kategori on barang.kategori=kategori.id_kategori WHERE kategori = $id_kategori Where stok < 50 LIMIT 8";
                    }
                } else {
                    $query = "SELECT * FROM barang  INNER JOIN kategori on barang.kategori=kategori.id_kategori Where stok < 50 LIMIT 8";
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
                            <form method="post" action="cart.php?action=add&id=<?php echo $row["id_barang"]; ?>">
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
                                <input type="hidden" name="hidden_name" value="<?php echo $row["nama_barang"]; ?>" />
                                <input type="hidden" name="hidden_price" value="<?php echo $row["harga"]; ?>" />
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="proses.php?id_barang=<?php echo $row['id_barang']; ?> ?>">Beli</a></div>
                                </div>
                            </form>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <div class="brosur"></div>

    <section class="py-5">
        <div class="judul">
            <h2>NEW ARRIVALS</h2>
        </div>
        <div class="container px-4 px-lg-5 mt-5">


            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content" id="displayProduct">

                <!-- menampilkan data dari database -->
                <?php
                if (isset($_GET['fkategori'])) {
                    $id_kategori = $_GET['fkategori'];
                    if ($id_kategori == "") {
                        $query = "SELECT * FROM barang  INNER JOIN kategori on barang.kategori=kategori.id_kategori ORDER BY id_barang DESC Limit 4";
                    } else {
                        $query = "SELECT * FROM barang  INNER JOIN kategori on barang.kategori=kategori.id_kategori WHERE kategori = $id_kategori  ORDER BY id_barang DESC Limit 4";
                    }
                } else {
                    $query = "SELECT * FROM barang  INNER JOIN kategori on barang.kategori=kategori.id_kategori ORDER BY id_barang DESC Limit 4";
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
                                <div class="text-center">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="proses.php?id_barang=<?php echo $row['id_barang']; ?> ?>">Beli</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; TokoKu 2022</p>
        </div>
    </footer>

</body>

</html>