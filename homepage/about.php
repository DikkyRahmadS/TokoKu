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
  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    .badan {
      background-color: white;
      margin-right: 10%;
      margin-left: 10%;
      font-family: "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans",
        "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji",
        "Segoe UI Symbol", "Noto Color Emoji";
    }

    .content-text {
      margin-left: auto;
      margin-right: auto;
      padding: 5px;
      margin-top: 10px;
      margin-bottom: 10px;
    }

    .konten img {
      width: 50px;
      height: 50px;
      display: block;
      margin-left: auto;
      margin-right: auto;
      margin-top: 10px;
    }

    .konten {
      display: flex;
      justify-content: space-around;
      width: 100%;
    }

    .konten .item {
      background-color: rgb(228, 228, 228);
      width: 40%;
      margin: 0 20px;
      border-radius: 5px;
      padding: 10px;
      margin-top: 20px;
    }

    .konten .item:hover {
      transition-duration: 0.5s;
      box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    }

    .konten p {
      text-align: center;
      margin-top: 10px;
    }

    hr {
      color: black;
      border-top: 1px solid;
    }

    h3 {
      font-weight: 300;
    }

    .konten-foto {
      display: flex;
      justify-content: space-between;
      margin-bottom: 40px;
      padding: 5px;
    }

    .konten-foto img {
      width: 200px;
      height: 250px;
      display: block;
      margin-left: auto;
      margin-right: auto;
      margin-top: 10px;
      margin: 10px;
      border-radius: 5px;
    }

    .foto h1 {
      text-align: center;
      margin-top: 80px;
      margin-bottom: 30px;
      font-weight: 300;
    }

    .konten-foto p {
      text-align: center;
      margin-top: 10px;
    }

    .konten-foto .item {
      padding: 5px;
      border-radius: 5px;
      background-color: rgb(228, 228, 228);
    }

    .konten-foto .item:hover {
      transition-duration: 0.5s;
      box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    }
  </style>
</head>

<body>

  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
      <div class="navbar-brand">TokoKu</div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
          <li class="nav-item"><a class="nav-link" aria-current="page" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link " href="collection.php">Collection</a></li>
          <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
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
        <h1 class="display-4 fw-bolder">About TokoKu</h1>
      </div>
    </div>
  </header>


  <!-- Section-->
  <section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
      <div class="badan">
        <hr>
        <div class="content-text">
          <h4>
            Berdiri pada Juni 2022 dan berbasis di Kota Malang , Indonesia . TokoKu
            merupakan salah satu E-commerce terbesar dan terlengkap di Kota Malang.
            E-commerce ini menyediakan berbagai kebutuhan anda baik yang muda maupun
            tua
          </h4>
          <br />
          <h4>
            E-commerce ini memiliki banyak kategori di tiap tiap barangnya. Dan
            tidak hanya itu saja, harga barang disini juga cukup murah. Meskipun
            murah namun , kualitas barang yang kami sajikan tidak bisa dikatakan
            murahan. Kami juga menyediakan layanan call center selama 24 jam, jadi
            Anda tidak perlu khawatir jika ada kendala teknis dan hal lainnya.
          </h4>
        </div>
        <hr />
        <div class="konten">
          <div class="item">
            <img src="img/user.png" alt="" />
            <p>Lebih dari 200.000 pengguna di seluruh Indonesia</p>
          </div>
          <div class="item">
            <img src="img/store.png" alt="" />
            <p>Lebih dari 100.000 Toko</p>
          </div>
          <div class="item">
            <img src="img/delivery.png" alt="" />
            <p>Pengiriman aman dan cepat</p>
          </div>
          <div class="item">
            <img src="img/callcenter.png" alt="" />
            <p>Siap melayani 24 jam</p>
          </div>
        </div>

        <div class="foto">
          <h1>Team Kami</h1>
        </div>

        <!-- foto kami -->
        <div class="konten-foto">
          <div class="item">
            <img src="img/diki.jpeg" alt="" />
            <p>2131710065</p>
            <p>Dikky Rahmad</p>
          </div>
          <div class="item">
            <img src="img/farah.jpeg" alt="" />
            <p>2131710091</p>
            <p>Farah Diva</p>
          </div>
          <div class="item">
            <img src="img/ilham.jpeg" alt="" />
            <p>2131710087</p>
            <p>Muhammad Ilham Maulidin</p>
          </div>
        </div>
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