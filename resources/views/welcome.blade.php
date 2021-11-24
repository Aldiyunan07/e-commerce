@section('swiper')
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
@endsection
@push('swiper')
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: false,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
    });

</script>
@endpush
<x-app-layout>
    <div class="container-fluid">
        <section class="banner mx-50 row justify-content-center" style="overflow: hidden;" id="banner">
            <div class="col-lg-6 col-md-12" style="position:relative; overflow:hidden;">
                    <div class="sub-judul">
                        <div class="judul">
                            Temukan Koleksi Terbaik
                        </div>
                        <p class="judul-des" style="color: #38426C;">
                            Berkembang menjadi lebih baik dengan buku berkualitas unggul dari penulis hebat dibidangnya.
                        </p>
                        <div class="input-group my-5 shadow-sm rounded input">
                            <input type="search" class="form-control border-0 p-3 px-4" placeholder="Masukan Judul Buku (eg. Marmut Merah Jambu)" aria-label="Masukan Judul Buku (eg. Marmut Merah Jambu)" aria-describedby="button-addon2">
                            <button class="btn btn-primary px-4 fw-bold" type="button" id="button-addon2">Cari</button>
                        </div>
                    </div>
                    <div class="d-flex align-items-end sub-brand">
                        <div class="d-flex align-items-center justify-content-center">
                            <span class="brand">
                                Tersedia:
                            </span>
                            <div class="mx-1" style="background: #FFFFFF;
                            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.04);
                            border-radius: 6px; padding: 10px 9px 8px 9px;">
                            <img src="{{asset('image/image 9.png')}}" width="35" height="35" alt="">
                            </div>
                            <div class="mx-1" style="background: #FFFFFF;
                            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.04);
                            border-radius: 6px; padding: 10px 9px 8px 9px;">
                            <img src="{{asset('image/image 10.png')}}" width="35" height="35" alt="">
                            </div>
                            <div class="mx-1" style="background: #FFFFFF;
                            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.04);
                            border-radius: 6px; padding: 10px 9px 8px 9px;">
                            <img src="{{asset('image/image 11.png')}}" width="35" height="35" alt="">
                            </div>
                            <span style="font-size: 15px; color:#38426C99; opacity: 40%; font-weight: 600; border-bottom: 1px solid rgba(56, 66, 108, 0.4);;">
                                dan 150 penerbit lainnya.
                            </span>
                        </div>
                    </div>
            </div>
            <div class="col-md-6 image-banner">
                <img src="{{ asset('image/banner.png') }}" style="min-width: max-content;" alt="" >
            </div>
        </section>
        <section class="mx-50 my-5 mb-3" id="content">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <div class="fw-bold h5 text-capitalize" style="color: #38426C;">Rekomendasi dari Bookstore</div>
                <a href="#" class="text-primary fw-bolder text-decoration-none s-link">
                    Selengkapnya 
                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.5 29.4C10.92 29.4 5.59998 24.08 5.59998 17.5C5.59998 10.92 10.92 5.60001 17.5 5.60001C24.08 5.60001 29.4 10.92 29.4 17.5C29.4 24.08 24.08 29.4 17.5 29.4ZM17.5 7.00001C11.69 7.00001 6.99998 11.69 6.99998 17.5C6.99998 23.31 11.69 28 17.5 28C23.31 28 28 23.31 28 17.5C28 11.69 23.31 7.00001 17.5 7.00001Z" fill="#2E69E3"/>
                        <path d="M17.29 24.29L16.31 23.31L22.12 17.5L16.31 11.69L17.29 10.71L24.08 17.5L17.29 24.29Z" fill="#2E69E3"/>
                        <path d="M11.2 16.8H23.1V18.2H11.2V16.8Z" fill="#2E69E3"/>
                    </svg>
                </a>
            </div>
            <div class="row">
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="mb-3" style="max-width: 100%; ">
                        <div class="card border-0 shadow-sm row g-0">
                            <a href="{{ route('detail.buku') }}" class="card-header d-flex align-items-center card-header-custom" style="height: 250px;">
                                <img src="{{asset('image/image 7.png')}}" class="card-img-top img" style="border-radius: 6px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.04); max-height: 230px;" alt="...">
                            </a>
                            <div class="card-body" style="height: 150px">
                                <a href="#" class="card-text line-clamp-1 text-decoration-none lh-lg"><small class="text-muted">John Doe</small></a>
                                <a href="#" class="card-title font-custom h5 text-decoration-none line-clamp-2">Lorem Ipsum Dolor Sit Amet</a>
                                <p class="card-text text-primary position-absolute" >Rp. 300.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="mb-3" style="max-width: 100%; ">
                        <div class="card border-0 shadow-sm row g-0">
                            <a href="#" class="card-header d-flex align-items-center card-header-custom" style="height: 250px;">
                                <img src="{{asset('image/image 1.png')}}" class="card-img-top img" alt="...">
                            </a>
                            <div class="card-body" style="height: 150px">
                                <a href="#" class="card-text line-clamp-1 text-decoration-none lh-lg"><small class="text-muted">John Doe</small></a>
                                <a href="#" class="card-title font-custom h5 text-decoration-none line-clamp-2">Lorem Ipsum Dolor Sit Amet</a>
                                <p class="card-text text-primary position-absolute" >Rp. 300.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="mb-3" style="max-width: 100%; ">
                        <div class="card border-0 shadow-sm row g-0">
                            <a href="#" class="card-header d-flex align-items-center card-header-custom" style="height: 250px;">
                                <img src="{{asset('image/image 1.png')}}" class="card-img-top img" alt="...">
                            </a>
                            <div class="card-body" style="height: 150px">
                                <a href="#" class="card-text line-clamp-1 text-decoration-none lh-lg"><small class="text-muted">John Doe</small></a>
                                <a href="#" class="card-title font-custom h5 text-decoration-none line-clamp-2">Lorem Ipsum Dolor Sit Amet</a>
                                <p class="card-text text-primary position-absolute" >Rp. 200.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="mb-3" style="max-width: 100%; ">
                        <div class="card border-0 shadow-sm row g-0">
                            <a href="#" class="card-header d-flex align-items-center card-header-custom" style="height: 250px;">
                                <img src="{{asset('image/image 1.png')}}" class="card-img-top img" alt="...">
                            </a>
                            <div class="card-body" style="height: 150px">
                                <a href="#" class="card-text line-clamp-1 text-decoration-none lh-lg"><small class="text-muted">John Doe</small></a>
                                <a href="#" class="card-title font-custom h5 text-decoration-none line-clamp-2">Lorem Ipsum Dolor Sit Amet</a>
                                <p class="card-text text-primary position-absolute" >Rp. 200.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="mb-3" style="max-width: 100%; ">
                        <div class="card border-0 shadow-sm row g-0">
                            <a href="#" class="card-header d-flex align-items-center card-header-custom" style="height: 250px;">
                                <img src="{{asset('image/image 1.png')}}" class="card-img-top img" alt="...">
                            </a>
                            <div class="card-body" style="height: 150px">
                                <a href="#" class="card-text line-clamp-1 text-decoration-none lh-lg"><small class="text-muted">John Doe</small></a>
                                <a href="#" class="card-title font-custom h5 text-decoration-none line-clamp-2">Lorem Ipsum Dolor Sit Amet</a>
                                <p class="card-text text-primary position-absolute" >Rp. 200.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="mb-3" style="max-width: 100%; ">
                        <div class="card border-0 shadow-sm row g-0">
                            <a href="#" class="card-header d-flex align-items-center card-header-custom" style="height: 250px;">
                                <img src="{{asset('image/image 1.png')}}" class="card-img-top img" alt="...">
                            </a>
                            <div class="card-body" style="height: 150px">
                                <a href="#" class="card-text line-clamp-1 text-decoration-none lh-lg"><small class="text-muted">John Doe</small></a>
                                <a href="#" class="card-title font-custom h5 text-decoration-none line-clamp-2">Lorem Ipsum Dolor Sit Amet</a>
                                <p class="card-text text-primary position-absolute" >Rp. 300.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mx-50 my-5 mb-3" id="content">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <div class="fw-bold h5 text-capitalize" style="color: #38426C;">Buku-Buku Terpopuler</div>
                <a href="#" class="text-primary fw-bolder text-decoration-none s-link">
                    Selengkapnya 
                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.5 29.4C10.92 29.4 5.59998 24.08 5.59998 17.5C5.59998 10.92 10.92 5.60001 17.5 5.60001C24.08 5.60001 29.4 10.92 29.4 17.5C29.4 24.08 24.08 29.4 17.5 29.4ZM17.5 7.00001C11.69 7.00001 6.99998 11.69 6.99998 17.5C6.99998 23.31 11.69 28 17.5 28C23.31 28 28 23.31 28 17.5C28 11.69 23.31 7.00001 17.5 7.00001Z" fill="#2E69E3"/>
                        <path d="M17.29 24.29L16.31 23.31L22.12 17.5L16.31 11.69L17.29 10.71L24.08 17.5L17.29 24.29Z" fill="#2E69E3"/>
                        <path d="M11.2 16.8H23.1V18.2H11.2V16.8Z" fill="#2E69E3"/>
                    </svg>
                </a>
            </div>
            <div class="row">
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="mb-3" style="max-width: 100%; ">
                        <div class="card border-0 shadow-sm row g-0">
                            <a href="#" class="card-header d-flex align-items-center card-header-custom" style="height: 250px;">
                                <img src="{{asset('image/image 7.png')}}" class="card-img-top img" style="border-radius: 6px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.04); max-height: 230px;" alt="...">
                            </a>
                            <div class="card-body" style="height: 150px">
                                <a href="#" class="card-text line-clamp-1 text-decoration-none lh-lg"><small class="text-muted">John Doe</small></a>
                                <a href="#" class="card-title font-custom h5 text-decoration-none line-clamp-2">Lorem Ipsum Dolor Sit Amet</a>
                                <p class="card-text text-primary position-absolute" >Rp. 500.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="mb-3" style="max-width: 100%; ">
                        <div class="card border-0 shadow-sm row g-0">
                            <a href="#" class="card-header d-flex align-items-center card-header-custom" style="height: 250px;">
                                <img src="{{asset('image/image 1.png')}}" class="card-img-top img" alt="...">
                            </a>
                            <div class="card-body" style="height: 150px">
                                <a href="#" class="card-text line-clamp-1 text-decoration-none lh-lg"><small class="text-muted">John Doe</small></a>
                                <a href="#" class="card-title font-custom h5 text-decoration-none line-clamp-2">Lorem Ipsum Dolor Sit Amet</a>
                                <p class="card-text text-primary position-absolute" >Rp. 500.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="mb-3" style="max-width: 100%; ">
                        <div class="card border-0 shadow-sm row g-0">
                            <a href="#" class="card-header d-flex align-items-center card-header-custom" style="height: 250px;">
                                <img src="{{asset('image/image 1.png')}}" class="card-img-top img" alt="...">
                            </a>
                            <div class="card-body" style="height: 150px">
                                <a href="#" class="card-text line-clamp-1 text-decoration-none lh-lg"><small class="text-muted">John Doe</small></a>
                                <a href="#" class="card-title font-custom h5 text-decoration-none line-clamp-2">Lorem Ipsum Dolor Sit Amet</a>
                                <p class="card-text text-primary position-absolute" >Rp. 500.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="mb-3" style="max-width: 100%; ">
                        <div class="card border-0 shadow-sm row g-0">
                            <a href="#" class="card-header d-flex align-items-center card-header-custom" style="height: 250px;">
                                <img src="{{asset('image/image 1.png')}}" class="card-img-top img" alt="...">
                            </a>
                            <div class="card-body" style="height: 150px">
                                <a href="#" class="card-text line-clamp-1 text-decoration-none lh-lg"><small class="text-muted">John Doe</small></a>
                                <a href="#" class="card-title font-custom h5 text-decoration-none line-clamp-2">Lorem Ipsum Dolor Sit Amet</a>
                                <p class="card-text text-primary position-absolute" >Rp. 500.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="mb-3" style="max-width: 100%; ">
                        <div class="card border-0 shadow-sm row g-0">
                            <a href="#" class="card-header d-flex align-items-center card-header-custom" style="height: 250px;">
                                <img src="{{asset('image/image 1.png')}}" class="card-img-top img" alt="...">
                            </a>
                            <div class="card-body" style="height: 150px">
                                <a href="#" class="card-text line-clamp-1 text-decoration-none lh-lg"><small class="text-muted">John Doe</small></a>
                                <a href="#" class="card-title font-custom h5 text-decoration-none line-clamp-2">Lorem Ipsum Dolor Sit Amet</a>
                                <p class="card-text text-primary position-absolute" >Rp. 500.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="mb-3" style="max-width: 100%; ">
                        <div class="card border-0 shadow-sm row g-0">
                            <a href="#" class="card-header d-flex align-items-center card-header-custom" style="height: 250px;">
                                <img src="{{asset('image/image 1.png')}}" class="card-img-top img" alt="...">
                            </a>
                            <div class="card-body" style="height: 150px">
                                <a href="#" class="card-text line-clamp-1 text-decoration-none lh-lg"><small class="text-muted">John Doe</small></a>
                                <a href="#" class="card-title font-custom h5 text-decoration-none line-clamp-2">Lorem Ipsum Dolor Sit Amet</a>
                                <p class="card-text text-primary position-absolute" >Rp. 500.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mx-50 my-5 mb-3" id="content">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <div class="fw-bold h5 text-capitalize" style="color: #38426C;">Novel Paling Laris</div>
                <a href="#" class="text-primary fw-bolder text-decoration-none s-link">
                    Selengkapnya 
                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.5 29.4C10.92 29.4 5.59998 24.08 5.59998 17.5C5.59998 10.92 10.92 5.60001 17.5 5.60001C24.08 5.60001 29.4 10.92 29.4 17.5C29.4 24.08 24.08 29.4 17.5 29.4ZM17.5 7.00001C11.69 7.00001 6.99998 11.69 6.99998 17.5C6.99998 23.31 11.69 28 17.5 28C23.31 28 28 23.31 28 17.5C28 11.69 23.31 7.00001 17.5 7.00001Z" fill="#2E69E3"/>
                        <path d="M17.29 24.29L16.31 23.31L22.12 17.5L16.31 11.69L17.29 10.71L24.08 17.5L17.29 24.29Z" fill="#2E69E3"/>
                        <path d="M11.2 16.8H23.1V18.2H11.2V16.8Z" fill="#2E69E3"/>
                    </svg>
                </a>
            </div>
            <div class="row">
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="mb-3" style="max-width: 100%; ">
                        <div class="card border-0 shadow-sm row g-0">
                            <a href="#" class="card-header d-flex align-items-center card-header-custom" style="height: 250px;">
                                <img src="{{asset('image/image 7.png')}}" class="card-img-top img" style="border-radius: 6px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.04); max-height: 230px;" alt="...">
                            </a>
                            <div class="card-body" style="height: 150px">
                                <a href="#" class="card-text line-clamp-1 text-decoration-none lh-lg"><small class="text-muted">John Doe</small></a>
                                <a href="#" class="card-title font-custom h5 text-decoration-none line-clamp-2">Lorem Ipsum Dolor Sit Amet</a>
                                <p class="card-text text-primary position-absolute" >Rp. 500.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="mb-3" style="max-width: 100%; ">
                        <div class="card border-0 shadow-sm row g-0">
                            <a href="#" class="card-header d-flex align-items-center card-header-custom" style="height: 250px;">
                                <img src="{{asset('image/image 1.png')}}" class="card-img-top img" alt="...">
                            </a>
                            <div class="card-body" style="height: 150px">
                                <a href="#" class="card-text line-clamp-1 text-decoration-none lh-lg"><small class="text-muted">John Doe</small></a>
                                <a href="#" class="card-title font-custom h5 text-decoration-none line-clamp-2">Lorem Ipsum Dolor Sit Amet</a>
                                <p class="card-text text-primary position-absolute" >Rp. 500.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="mb-3" style="max-width: 100%; ">
                        <div class="card border-0 shadow-sm row g-0">
                            <a href="#" class="card-header d-flex align-items-center card-header-custom" style="height: 250px;">
                                <img src="{{asset('image/image 1.png')}}" class="card-img-top img" alt="...">
                            </a>
                            <div class="card-body" style="height: 150px">
                                <a href="#" class="card-text line-clamp-1 text-decoration-none lh-lg"><small class="text-muted">John Doe</small></a>
                                <a href="#" class="card-title font-custom h5 text-decoration-none line-clamp-2">Lorem Ipsum Dolor Sit Amet</a>
                                <p class="card-text text-primary position-absolute" >Rp. 500.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="mb-3" style="max-width: 100%; ">
                        <div class="card border-0 shadow-sm row g-0">
                            <a href="#" class="card-header d-flex align-items-center card-header-custom" style="height: 250px;">
                                <img src="{{asset('image/image 1.png')}}" class="card-img-top img" alt="...">
                            </a>
                            <div class="card-body" style="height: 150px">
                                <a href="#" class="card-text line-clamp-1 text-decoration-none lh-lg"><small class="text-muted">John Doe</small></a>
                                <a href="#" class="card-title font-custom h5 text-decoration-none line-clamp-2">Lorem Ipsum Dolor Sit Amet</a>
                                <p class="card-text text-primary position-absolute" >Rp. 500.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="mb-3" style="max-width: 100%; ">
                        <div class="card border-0 shadow-sm row g-0">
                            <a href="#" class="card-header d-flex align-items-center card-header-custom" style="height: 250px;">
                                <img src="{{asset('image/image 1.png')}}" class="card-img-top img" alt="...">
                            </a>
                            <div class="card-body" style="height: 150px">
                                <a href="#" class="card-text line-clamp-1 text-decoration-none lh-lg"><small class="text-muted">John Doe</small></a>
                                <a href="#" class="card-title font-custom h5 text-decoration-none line-clamp-2">Lorem Ipsum Dolor Sit Amet</a>
                                <p class="card-text text-primary position-absolute" >Rp. 500.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="mb-3" style="max-width: 100%; ">
                        <div class="card border-0 shadow-sm row g-0">
                            <a href="#" class="card-header d-flex align-items-center card-header-custom" style="height: 250px;">
                                <img src="{{asset('image/image 1.png')}}" class="card-img-top img" alt="...">
                            </a>
                            <div class="card-body" style="height: 150px">
                                <a href="#" class="card-text line-clamp-1 text-decoration-none lh-lg"><small class="text-muted">John Doe</small></a>
                                <a href="#" class="card-title font-custom h5 text-decoration-none line-clamp-2">Lorem Ipsum Dolor Sit Amet</a>
                                <p class="card-text text-primary position-absolute" >Rp. 500.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mx-50 my-5 mb-3" id="content">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <div class="fw-bold h5 text-capitalize" style="color: #38426C;">Komik-Komik Pilihan</div>
                <a href="#" class="text-primary fw-bolder text-decoration-none s-link">
                    Selengkapnya 
                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.5 29.4C10.92 29.4 5.59998 24.08 5.59998 17.5C5.59998 10.92 10.92 5.60001 17.5 5.60001C24.08 5.60001 29.4 10.92 29.4 17.5C29.4 24.08 24.08 29.4 17.5 29.4ZM17.5 7.00001C11.69 7.00001 6.99998 11.69 6.99998 17.5C6.99998 23.31 11.69 28 17.5 28C23.31 28 28 23.31 28 17.5C28 11.69 23.31 7.00001 17.5 7.00001Z" fill="#2E69E3"/>
                        <path d="M17.29 24.29L16.31 23.31L22.12 17.5L16.31 11.69L17.29 10.71L24.08 17.5L17.29 24.29Z" fill="#2E69E3"/>
                        <path d="M11.2 16.8H23.1V18.2H11.2V16.8Z" fill="#2E69E3"/>
                    </svg>
                </a>
            </div>
            <div class="row">
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="mb-3" style="max-width: 100%; ">
                        <div class="card border-0 shadow-sm row g-0">
                            <a href="#" class="card-header d-flex align-items-center card-header-custom" style="height: 250px;">
                                <img src="{{asset('image/image 7.png')}}" class="card-img-top img" style="border-radius: 6px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.04); max-height: 230px;" alt="...">
                            </a>
                            <div class="card-body" style="height: 150px">
                                <a href="#" class="card-text line-clamp-1 text-decoration-none lh-lg"><small class="text-muted">John Doe</small></a>
                                <a href="#" class="card-title font-custom h5 text-decoration-none line-clamp-2">Lorem Ipsum Dolor Sit Amet</a>
                                <p class="card-text text-primary position-absolute" >Rp. 500.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="mb-3" style="max-width: 100%; ">
                        <div class="card border-0 shadow-sm row g-0">
                            <a href="#" class="card-header d-flex align-items-center card-header-custom" style="height: 250px;">
                                <img src="{{asset('image/image 1.png')}}" class="card-img-top img" alt="...">
                            </a>
                            <div class="card-body" style="height: 150px">
                                <a href="#" class="card-text line-clamp-1 text-decoration-none lh-lg"><small class="text-muted">John Doe</small></a>
                                <a href="#" class="card-title font-custom h5 text-decoration-none line-clamp-2">Lorem Ipsum Dolor Sit Amet</a>
                                <p class="card-text text-primary position-absolute" >Rp. 500.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="mb-3" style="max-width: 100%; ">
                        <div class="card border-0 shadow-sm row g-0">
                            <a href="#" class="card-header d-flex align-items-center card-header-custom" style="height: 250px;">
                                <img src="{{asset('image/image 1.png')}}" class="card-img-top img" alt="...">
                            </a>
                            <div class="card-body" style="height: 150px">
                                <a href="#" class="card-text line-clamp-1 text-decoration-none lh-lg"><small class="text-muted">John Doe</small></a>
                                <a href="#" class="card-title font-custom h5 text-decoration-none line-clamp-2">Lorem Ipsum Dolor Sit Amet</a>
                                <p class="card-text text-primary position-absolute" >Rp. 500.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="mb-3" style="max-width: 100%; ">
                        <div class="card border-0 shadow-sm row g-0">
                            <a href="#" class="card-header d-flex align-items-center card-header-custom" style="height: 250px;">
                                <img src="{{asset('image/image 1.png')}}" class="card-img-top img" alt="...">
                            </a>
                            <div class="card-body" style="height: 150px">
                                <a href="#" class="card-text line-clamp-1 text-decoration-none lh-lg"><small class="text-muted">John Doe</small></a>
                                <a href="#" class="card-title font-custom h5 text-decoration-none line-clamp-2">Lorem Ipsum Dolor Sit Amet</a>
                                <p class="card-text text-primary position-absolute" >Rp. 500.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="mb-3" style="max-width: 100%; ">
                        <div class="card border-0 shadow-sm row g-0">
                            <a href="#" class="card-header d-flex align-items-center card-header-custom" style="height: 250px;">
                                <img src="{{asset('image/image 1.png')}}" class="card-img-top img" alt="...">
                            </a>
                            <div class="card-body" style="height: 150px">
                                <a href="#" class="card-text line-clamp-1 text-decoration-none lh-lg"><small class="text-muted">John Doe</small></a>
                                <a href="#" class="card-title font-custom h5 text-decoration-none line-clamp-2">Lorem Ipsum Dolor Sit Amet</a>
                                <p class="card-text text-primary position-absolute" >Rp. 500.000</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="mb-3" style="max-width: 100%; ">
                        <div class="card border-0 shadow-sm row g-0">
                            <a href="#" class="card-header d-flex align-items-center card-header-custom" style="height: 250px;">
                                <img src="{{asset('image/image 1.png')}}" class="card-img-top img" alt="...">
                            </a>
                            <div class="card-body" style="height: 150px">
                                <a href="#" class="card-text line-clamp-1 text-decoration-none lh-lg"><small class="text-muted">John Doe</small></a>
                                <a href="#" class="card-title font-custom h5 text-decoration-none line-clamp-2">Lorem Ipsum Dolor Sit Amet</a>
                                <p class="card-text text-primary position-absolute" >Rp. 500.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</x-app-layout>