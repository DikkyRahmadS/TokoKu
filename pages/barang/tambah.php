<div class="card mb-5 mb-xl-8">
  <!--begin::Card header-->
  <div class="card-header">
    <div class="card-title">
      <h2>Tambah Barang</h2>
    </div>
  </div>
  <!--end::Card header-->
  <!--begin::Card body-->
  <div class="card-body pt-4">
    <form role="form" method="post" action="../pages/barang/proses_tambah.php" enctype="multipart/form-data">
      <!--begin::Input group-->
      <div class="mb-10 fv-row">
        <!--begin::Label-->
        <!-- <label class="required form-label">Nama Barang</label> -->
        <!--end::Label-->
        <!--begin::Input-->
        <div class="mb-10 row">
          <div class="col">
            <label class="required form-label">Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control mb-2" placeholder="Masukkan Nama Barang" value="" />
          </div>
          <div class="col">
            <label class="required form-label">File Gambar</label>
            <input type="file" name="gambar" class="form-control mb-2" placeholder="Masukkan Gambar" value="" />
            <!-- <input type="text" name="kategori" class="form-control mb-2" placeholder="Masukkan Kategori" value="" /> -->
          </div>
        </div>
        <div class="mb-10 row">
          <div class="col">
            <label class="required form-label">Jumlah Stok</label>
            <input type="number" name="stok" class="form-control mb-2" placeholder="Masukkan Jumlah Stok" value="" />
          </div>
          <div class="col">
            <label class="required form-label">Harga Barang</label>
            <input type="number" name="harga" class="form-control mb-2" placeholder="Masukkan Harga Barang" value="" />
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