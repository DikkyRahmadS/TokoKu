<div class="card mb-5 mb-xl-8">
    <!--begin::Card header-->
    <div class="card-header">
        <div class="card-title">
            <h2>Tambah Kategori</h2>
        </div>
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-4">
        <form role="form" method="post" action="../pages/kategori/proses_tambah.php" enctype="multipart/form-data">
            <!--begin::Input group-->
            <div class="mb-10 fv-row">
                <!--begin::Label-->
                <label class="required form-label">Nama Kategori</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="text" name="nama_kategori" class="form-control mb-2" placeholder="Masukkan Nama Kategori" value="" />
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