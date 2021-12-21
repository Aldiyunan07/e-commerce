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
        <section class="banner mx-50 row justify-content-center overflow-hidden" id="banner">
            <div>
                <img src="{{ asset('image/1208 x 302.png') }}" class="img-fluid" style="border-radius: 0.75rem" alt="">
            </div>
        </section>
        <section class="mx-50 my-5 mb-3" id="menus">
            <div class="row g-3">
                <div class="col-6 col-sm-6 col-md-6">
                    <div class="card card-body border-0 shadow-sm">
                        <a href="{{ route('daftar.menerbitkan') }}" class="menus text-decoration-none text-center d-lg-flex d-block align-items-center justify-content-center">
                            <img src="{{ asset('/image/open-book.png') }}" class="img-fluid" width="50" alt="">
                            <div class="text-menu fw-bold" style="color: #38426C;"> DAFTAR MENERBITKAN </div>
                        </a>
                        <div class="d-lg-flex d-none justify-content-end">
                            <a href="{{ route('daftar.menerbitkan') }}" class="text-decoration-none small d-flex align-items-end">
                                <div>
                                    Terbitkan buku
                                </div>
                                <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6">
                    <div class="card card-body border-0 shadow-sm">
                        <a href="{{ '#' }}" class="menus text-decoration-none text-center d-lg-flex d-block align-items-center justify-content-center">
                            <img src="{{ asset('/image/book-stack.png') }}" class="img-fluid" width="50" alt="">
                            <div class="text-menu fw-bold" style="color: #38426C;"> CEK PROGRESS BUKU </div>
                        </a>
                        <div class="d-lg-flex d-none justify-content-end">
                            <a href="#" class="text-decoration-none small d-flex align-items-center">
                                <div>
                                    Cek progress
                                </div>
                                <div>
                                    <i class="bi bi-arrow-right ms-2"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mx-50 my-5 mb-3" id="content">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <div class="fw-bold h5 text-capitalize" style="color: #38426C;">Baru saja di terbitkan</div>
                <a href="{{ route('allBooks') }}" class="text-primary fw-bolder text-decoration-none s-link">
                    Selengkapnya 
                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.5 29.4C10.92 29.4 5.59998 24.08 5.59998 17.5C5.59998 10.92 10.92 5.60001 17.5 5.60001C24.08 5.60001 29.4 10.92 29.4 17.5C29.4 24.08 24.08 29.4 17.5 29.4ZM17.5 7.00001C11.69 7.00001 6.99998 11.69 6.99998 17.5C6.99998 23.31 11.69 28 17.5 28C23.31 28 28 23.31 28 17.5C28 11.69 23.31 7.00001 17.5 7.00001Z" fill="#2E69E3"/>
                        <path d="M17.29 24.29L16.31 23.31L22.12 17.5L16.31 11.69L17.29 10.71L24.08 17.5L17.29 24.29Z" fill="#2E69E3"/>
                        <path d="M11.2 16.8H23.1V18.2H11.2V16.8Z" fill="#2E69E3"/>
                    </svg>
                </a>
            </div>
            <div class="row">
                @foreach($buku->take(6) as $b)
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="mb-3" style="max-width: 100%; ">
                        <div class="card border-0 shadow-sm row g-0">
                            <a href="{{ route('detail.buku',$b->id) }}" class="card-header d-flex align-items-center card-header-custom" style="height: 250px;">
                                <img src="{{ $b->picture }}" class="card-img-top img" style="border-radius: 6px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.04); max-height: 230px;" alt="...">
                            </a>
                            <div class="card-body" style="height: 150px">
                                <a href="{{ route('detail.buku',$b->id) }}" class="card-text line-clamp-1 text-decoration-none lh-lg"><small class="text-muted">{{ $b->penulis }}</small></a>
                                <a href="#" class="card-title font-custom h5 text-decoration-none line-clamp-2">{{ $b->name }}</a>
                                <p class="card-text text-primary position-absolute" >{{ $b->rupiah($b->harga_asli) }}</p>
                            </div>
                        </div>
                    </div>
                </div>  
                @endforeach
            </div>
        </section>
    </div>

</x-app-layout>