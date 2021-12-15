<x-app-layout>
    <x-slot name="header">
        <h1 class="header-primary mb-3" style="font-weight: 800; color: #34364a; font-size: 32px;">
            Pesanan Saya
        </h1>
        <p class="fw-light text-dark">
            Disini Anda dapat melihat daftar <br> buku yang anda pesan
        </p>
    </x-slot>
    <div class="container">
        <div class="row">
            <x-side />
            <div class="col-lg-9">
                <div class="card card-body p-0 border-0 shadow-sm overflow-hidden">
                    <div>
                       <div class="d-md-flex align-items-center px-4 py-3">
                           <div class="me-3">
                               <div class="fw-bold">Status</div>
                           </div>
                           <div class="d-flex" style="column-gap: 7px">
                                <a href="#" class="text-decoration-none text-primary border border-primary rounded-pill py-1 px-3">
                                    Semua
                                </a>
                                <a href="#" class="text-decoration-none text-secondary border border-secondary rounded-pill py-1 px-3">
                                    Proses
                                </a>
                                <a href="#" class="text-decoration-none text-secondary border border-secondary rounded-pill py-1 px-3">
                                    Bebas
                                </a>
                            </div>
                       </div>
                       <div>
                            <div class="card card-body border-0 rounded-0 p-4 border-top">
                                <div class="small d-md-flex align-items-center mb-3" style="column-gap: 0.6rem">
                                    <span class="my-1 fw-bold">Belanja</span>
                                    <span class="my-1 fw-light">12 Des 2021</span>
                                    <span class="my-1 badge bg-primary">Proses</span>
                                    <span class="my-1 fw-light">INV/20211212/MPL/1847537934</span>
                                </div>
                                <div class="fw-normal mb-2">
                                    Aldi Yunan
                                </div>
                                <div class="row gx-3">
                                    <div class="col-4 col-md-1">
                                        <img src="data:image/jpeg;base64,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" style="width: 100%" alt="">
                                    </div>
                                    <div class="col-8 col-md-8">
                                        <a href="#" class="text-decoration-none text-dark fw-bold d-block">No Coding Money Making</a>
                                        <span class="fw-light small text-secondary">1 x Rp. 12.000.000</span>
                                    </div>
                                    <div class="my-3 col-12 col-md-3 ps-3 border-start d-flex align-items-center">
                                        <div class="d-flex flex-column">
                                            <span class="fw-light small">
                                                Total Belanja
                                            </span>
                                            <span class="small">
                                                Rp. 120.000
                                            </span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end mt-4">
                                        <div>
                                            <button class="btn btn-outline-primary fw-normal">Detail Transaksi</button>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn btn-outline-secondary ms-2" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end mt-2 shadow border-0" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="#">Tanya Penjual</a></li>
                                                <li><a class="dropdown-item" href="#">Bantuan</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-body border-0 rounded-0 p-4">
                                <div class="small d-md-flex align-items-center mb-3" style="column-gap: 0.6rem">
                                    <span class="my-1 fw-bold">Belanja</span>
                                    <span class="my-1 fw-light">12 Des 2021</span>
                                    <span class="my-1 badge bg-primary">Proses</span>
                                    <span class="my-1 fw-light">INV/20211212/MPL/1847537934</span>
                                </div>
                                <div class="fw-normal mb-2">
                                    Aldi Yunan
                                </div>
                                <div class="row gx-3">
                                    <div class="col-4 col-md-1">
                                        <img src="data:image/jpeg;base64,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" style="width: 100%" alt="">
                                    </div>
                                    <div class="col-8 col-md-8">
                                        <a href="#" class="text-decoration-none text-dark fw-bold d-block">No Coding Money Making</a>
                                        <span class="fw-light small text-secondary">1 x Rp. 12.000.000</span>
                                    </div>
                                    <div class="my-3 col-12 col-md-3 ps-3 border-start d-flex align-items-center">
                                        <div class="d-flex flex-column">
                                            <span class="fw-light small">
                                                Total Belanja
                                            </span>
                                            <span class="small">
                                                Rp. 120.000
                                            </span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end mt-4">
                                        <div>
                                            <button class="btn btn-outline-primary fw-normal">Detail Transaksi</button>
                                        </div>
                                        <div class="dropdown">
                                            <button class="btn btn-outline-secondary ms-2" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bi bi-three-dots"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end mt-2 shadow border-0" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="#">Tanya Penjual</a></li>
                                                <li><a class="dropdown-item" href="#">Bantuan</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>