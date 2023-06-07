<?php
if (isset($_GET['id'])) {
  // ambil nilai id dari url dan disimpan dalam variabel $id
  $id = ($_GET["id"]);

  // menampilkan data dari database yang mempunyai id=$id
  $query = "SELECT * FROM barang 
  INNER JOIN kategori on barang.kategori=kategori.id_kategori
  WHERE id_barang='" . $_GET['id'] . "'";
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
    echo "<script>alert('Data tidak ditemukan pada database');window.location='barang.php';</script>";
  }
} else {
  // apabila tidak ada data GET id pada akan di redirect ke kategori.php
  echo "<script>alert('Masukkan data id.');window.location='barang.php';</script>";
}
?>
<div class="card mb-5 mb-xl-8">
  <!--begin::Card header-->
  <div class="card-header">
    <div class="card-title">
      <h2>Ubah Barang</h2>
    </div>
  </div>
  <!--end::Card header-->
  <!--begin::Card body-->
  <div class="card-body pt-4">
    <form role="form" method="post" action="../pages/barang/proses_edit.php" enctype="multipart/form-data">
      <!--begin::Input group-->
      <div class="mb-10 fv-row">
        <!--begin::Label-->
        <input type="hidden" name="id_barang" value="<?php echo $data['id_barang']; ?>">
        <!--end::Label-->
        <!--begin::Input-->
        <!--begin::Label-->
        <!--end::Label-->
        <!--begin::Input-->
        <div class="mb-10 row">
          <div class="col">
            <label class="required form-label">Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control mb-2" value="<?php echo $data['nama_barang']; ?>" />
          </div>
          <div class="col">
            <label class="required form-label">File Gambar</label>
            <input type="file" name="gambar" class="form-control mb-2" value="<?php echo $data['nama_barang']; ?>" />
            <img src="../pages/barang/gambar/<?php echo $data['gambar']; ?>" style="width: 120px;margin-bottom: 5px;">
          </div>
        </div>
        <div class="mb-10 row">
          <div class="col">
            <label class="required form-label">Jumlah Stok</label>
            <input type="number" name="stok" class="form-control mb-2" value="<?php echo $data['stok']; ?>" />
          </div>
          <div class="col">
            <label class="required form-label">Harga Barang</label>
            <input type="number" name="harga" class="form-control mb-2" value="<?php echo $data['harga']; ?>" />
          </div>
          <div class="col">
            <label class="required form-label">Kategori</label>
            <select name="kategori" class="form-select" data-control="select2">
              <option value="">-- Pilih Kategori --</option>
              <?php
              $sql = "select * from kategori";

              $hasil = mysqli_query($koneksi, $sql);
              $no = 0;
              while ($data = mysqli_fetch_array($hasil)) {
                $no++;
              ?>
                <option value="<?php echo $data['id_kategori']; ?>"><?php echo $data['nama_kategori']; ?></option>
              <?php
              }
              ?>
            </select>
          </div>
        </div>
      </div>
      <!--end::Input-->
      <!--begin::Description-->
      <!--end::Description-->
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