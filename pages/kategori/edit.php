<?php
if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM kategori WHERE id_kategori='" . $_GET['id'] . "'";
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
        echo "<script>alert('Data tidak ditemukan pada database');window.location='kategori.php';</script>";
    }
} else {
    // apabila tidak ada data GET id pada akan di redirect ke kategori.php
    echo "<script>alert('Masukkan data id.');window.location='kategori.php';</script>";
}
?>
<div class="card mb-5 mb-xl-8">
    <!--begin::Card header-->
    <div class="card-header">
        <div class="card-title">
            <h2>Ubah Kategori</h2>
        </div>
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-4">
        <form role="form" method="post" action="../pages/kategori/proses_edit.php">
            <!--begin::Input group-->
            <div class="mb-10 fv-row">
                <!--begin::Label-->
                <input type="hidden" name="id" value="<?php echo $data['id_kategori']; ?>">
                <label class="required form-label">Nama Kategori</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="text" name="nama_kategori" class="form-control mb-2" value="<?php echo $data['nama_kategori']; ?>" value="" />
                <!--end::Input-->
                <!--begin::Description-->
                <!--end::Description-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            <!--end::Card header-->
        </form>
    </div>
    <!--end::General options-->
</div>