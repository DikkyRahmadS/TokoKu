<div class="card mb-5 mb-xl-8">
    <!--begin::Card header-->
    <div class="card-header">
        <div class="card-title">
            <h2>Tambah Pengguna</h2>
        </div>
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-4">
        <form role="form" method="post" action="../pages/pengguna/proses_tambah.php" enctype="multipart/form-data">
            <!--begin::Input group-->
            <div class="mb-10 fv-row">
                <!--begin::Label-->
                <label class="required form-label">Nama Pengguna</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="text" name="nama_pengguna" class="form-control mb-2" placeholder="Masukkan Nama Pengguna" value="" />
                <!--end::Input-->
            </div>
            <div class="mb-10 fv-row">
                <!--begin::Label-->
                <label class="required form-label">Alamat Pengguna</label>
                <!--end::Label-->
                <!--begin::Input-->
                <textarea class="form-control mb-2" name="alamat_pengguna" rows="5" placeholder="Masukkan Alamat Pengguna"></textarea>
                <!--end::Input-->
            </div>
            <div class="mb-10 fv-row">
                <!--begin::Label-->
                <label class="required form-label">Email</label>
                <!--end::Label-->
                <!--begin::Input-->
                <input type="email" name="email_pengguna" class="form-control mb-2" placeholder="Masukkan Email Pengguna" value="">
                <!--end::Input-->
            </div>
            <div class="mb-10 fv-row">
                <!--begin::Label-->
                <label class="required form-label">Password</label>
                <!--end::Label-->
                <div class="input-group mb-10">
                    <!--begin::Input-->
                    <input type="password" name="pass_pengguna" id="password" class="form-control mb-2" placeholder="Masukkan Password Pengguna" value="">
                    <span class="input-group-text mb-2">
                        <i class="far fa-eye" id="tongglePassword" style="cursor:pointer;" onclick="tonggle()"></i>
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
                if (password.getAttribute("type") == "password") {
                    password.setAttribute("type", "text");
                    tongglePassword.style.color = '#0095E8';
                } else {
                    password.setAttribute("type", "password");
                    tongglePassword.style.color = '#A1A5B7';
                }
            }
        </script>
    </div>
    <!--end::General options-->
</div>