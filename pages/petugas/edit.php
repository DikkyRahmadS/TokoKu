<?php
if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET['id']);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM admin WHERE id_admin = '" . $_GET['id'] . "'";
    $result = mysqli_query($koneksi, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if (!$result) {
        die("Query Error: " . mysqli_errno($koneksi) .
            " - " . mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
    // apabila data tidak ada pada database maka akan dijalankan perintah ini
    if (!count($data)) {
        echo "<script>alert('Data tidak ditemukan pada database');window.location='petugas.php';</script>";
    }
} else {
    // apabila tidak ada data GET id pada akan di redirect ke pengguna.php
    echo "<script>alert('Masukkan data id.');window.location='petugas.php';</script>";
}
?>

<!-- tampilan -->
<div class="card mb-5 mb-xl-8">
    <!--begin::Card header-->
    <div class="card-header">
        <div class="card-title">
            <h2>Ubah Petugas</h2>
        </div>
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-4">
        <form role="form" method="post" action="../pages/petugas/proses_edit.php">
            <!--begin::Input group-->
            <div class="mb-10 fv-row">
                <!--begin::Label-->
                <input type="hidden" name="id_admin" value="<?php echo $data['id_admin']; ?>">
                <label class="required form-label">Email</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="email" name="email_admin" class="form-control mb-2" placeholder="Masukkan Email Admin" value="<?php echo $data['email']; ?>">
                <!--end::Input-->
            </div>
            <div class="mb-10 fv-row">
                <!--begin::Label-->
                <label class="required form-label">Password</label>
                <!--end::Label-->
                <div class="input-group mb-10">
                    <!--begin::Input-->
                    <input type="text" name="pass_admin" id="password" class="form-control mb-2" value="<?php echo $data['password']; ?>">
                    <span class="input-group-text mb-2">
                        <i class="far fa-eye" id="tongglePassword" style="cursor:pointer; color:#0095E8;" onclick="tonggle()"></i>
                    </span>
                    <!--end::Input-->
                </div>
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <!--end::Card header-->
        </form>
        <script>
            function tonggle() {
                const togglePassword = document.querySelector("#togglePassword");
                const password = document.querySelector("#password");
                if (password.getAttribute("type") == "text") {
                    password.setAttribute("type", "password");
                    tongglePassword.style.color = '#A1A5B7';
                } else {
                    password.setAttribute("type", "text");
                    tongglePassword.style.color = '#0095E8';
                }
            }
        </script>
    </div>
    <!--end::General options-->
</div>