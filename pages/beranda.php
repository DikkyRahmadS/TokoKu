    <div id="kt_content_container" class="container-xxl">
        <!--begin::Row-->
        <div class="row gy-5 g-xl-8 ">
            <!--begin::Col-->
            <div class="col-xl-12 ">
                <!--begin::Mixed Widget 2-->
                <div class="card card-xl-stretch">
                    <!--begin::Header-->
                    <div class="card-header border-0 bg-danger py-5">
                        <h1 class="card-title align-items-start flex-column text-white pt-15">
                            <span class="fw-bolder fs-2x mb-3">Hello, Admin</span>

                        </h1>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body p-0 pb-10">
                        <!--begin::Chart-->
                        <div class="card-rounded-bottom bg-danger" data-kt-color="danger" style="height: 100px"></div>
                        <!--end::Chart-->
                        <!--begin::Stats-->
                        <div class="card-p mt-n20 position-relative">
                            <!--begin::Row-->
                            <div class="row g-0">
                                <!--begin::Col-->
                                <div class="col bg-light-warning px-6 py-8 rounded-2 me-7 mb-7">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                    <div class="row">
                                        <div class="col">
                                            <h1 class="text-warning fw-bold fs-20 mt-6"><?php
                                                                                        $sql = "SELECT count(*) AS data1 FROM kategori";
                                                                                        $query = mysqli_query($koneksi, $sql);
                                                                                        $result = mysqli_fetch_array($query);
                                                                                        echo $result['data1'];
                                                                                        ?> </h1>
                                        </div>
                                        <div class="col">
                                            <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
                                                    <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
                                                    <rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
                                                    <rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <!--end::Svg Icon-->
                                    <a href="#" class="text-warning fw-bold fs-6">Kategori</a>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col bg-light-danger px-6 py-8 rounded-2 me-7 mb-7">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                    <div class="row">
                                        <div class="col">
                                            <h1 class="text-danger fw-bold fs-20 mt-6"> <?php
                                                                                        $sql = "SELECT count(*) AS data2 FROM barang";
                                                                                        $query = mysqli_query($koneksi, $sql);
                                                                                        $result = mysqli_fetch_array($query);
                                                                                        echo $result['data2'];
                                                                                        ?> </h1>
                                        </div>
                                        <div class="col">
                                            <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
                                                    <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
                                                    <rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
                                                    <rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <!--end::Svg Icon-->
                                    <a href="#" class="text-danger fw-bold fs-6">Barang</a>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col bg-light-success px-6 py-8 rounded-2 me-7 mb-7">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                    <div class="row">
                                        <div class="col">
                                            <h1 class="text-success fw-bold fs-20 mt-6"><?php
                                                                                        $sql = "SELECT count(*) AS data3 FROM pembeli";
                                                                                        $query = mysqli_query($koneksi, $sql);
                                                                                        $result = mysqli_fetch_array($query);
                                                                                        echo $result['data3'];
                                                                                        ?> </h1>
                                        </div>
                                        <div class="col">
                                            <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
                                                    <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
                                                    <rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
                                                    <rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <!--end::Svg Icon-->
                                    <a href="#" class="text-success fw-bold fs-6">Pengguna</a>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col bg-light-primary px-6 py-8 rounded-2 me-7 mb-7">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                    <div class="row">
                                        <div class="col">
                                            <h1 class="text-primary fw-bold fs-20 mt-6"><?php
                                                                                        $sql = "SELECT count(*) AS data4 FROM transaksi";
                                                                                        $query = mysqli_query($koneksi, $sql);
                                                                                        $result = mysqli_fetch_array($query);
                                                                                        echo $result['data4'];
                                                                                        ?> </h1>
                                        </div>
                                        <div class="col">
                                            <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
                                                    <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
                                                    <rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
                                                    <rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <!--end::Svg Icon-->
                                    <a href="#" class="text-primary fw-bold fs-6">Transaksi</a>
                                </div>
                                <!--end::Col-->

                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Mixed Widget 2-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->

            <!--end::Col-->
        </div>
        <!--end::Row-->

        <!--end::Modal - New Product-->
        <!--end::Modals-->
    </div>