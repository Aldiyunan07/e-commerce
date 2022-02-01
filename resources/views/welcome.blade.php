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
            <!-- Slider main container -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide d-flex justify-content-center">
                        <img src="{{ asset('image/1208 x 302.png') }}" class="img-fluid" style="border-radius: 0.75rem"
                            alt="">
                    </div>
                    <div class="swiper-slide d-flex justify-content-center">
                        <img src="{{ asset('image/1208 x 302.png') }}" class="img-fluid" style="border-radius: 0.75rem"
                            alt="">
                    </div>
                    <div class="swiper-slide d-flex justify-content-center">
                        <img src="{{ asset('image/1208 x 302.png') }}" class="img-fluid" style="border-radius: 0.75rem"
                            alt="">
                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar -->
                {{-- <div class="swiper-scrollbar"></div> --}}
            </div>
            {{-- <div>
                <img src="{{ asset('image/1208 x 302.png') }}" class="img-fluid" style="border-radius: 0.75rem" alt="">
    </div> --}}
    </section>
    <section class="mx-50 my-5 mb-3" id="menus">
        <div class="row g-3">
            <div class="col-6 col-sm-6 col-md-6">
                <div class="card card-body border-0 shadow-sm">
                    <a href="{{ route('daftar.menerbitkan') }}"
                        class="menus text-decoration-none text-center d-lg-flex d-block align-items-center justify-content-center">
                        <img src="{{ asset('/image/open-book.png') }}" class="img-fluid" width="50" alt="">
                        <div class="text-menu fw-bold" style="color: #38426C;"> DAFTAR MENERBITKAN </div>
                    </a>
                    <div class="d-lg-flex d-none justify-content-end">
                        <a href="{{ route('daftar.menerbitkan') }}"
                            class="text-decoration-none small d-flex align-items-end">
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
                    <a href="{{ route('page.progress') }}"
                        class="menus text-decoration-none text-center d-lg-flex d-block align-items-center justify-content-center">
                        <img src="{{ asset('/image/book-stack.png') }}" class="img-fluid" width="50" alt="">
                        <div class="text-menu fw-bold" style="color: #38426C;"> CEK PROGRESS BUKU </div>
                    </a>
                    <div class="d-lg-flex d-none justify-content-end">
                        <a href="{{ route('page.progress') }}"
                            class="text-decoration-none small d-flex align-items-center">
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
                    <path
                        d="M17.5 29.4C10.92 29.4 5.59998 24.08 5.59998 17.5C5.59998 10.92 10.92 5.60001 17.5 5.60001C24.08 5.60001 29.4 10.92 29.4 17.5C29.4 24.08 24.08 29.4 17.5 29.4ZM17.5 7.00001C11.69 7.00001 6.99998 11.69 6.99998 17.5C6.99998 23.31 11.69 28 17.5 28C23.31 28 28 23.31 28 17.5C28 11.69 23.31 7.00001 17.5 7.00001Z"
                        fill="#2E69E3" />
                    <path d="M17.29 24.29L16.31 23.31L22.12 17.5L16.31 11.69L17.29 10.71L24.08 17.5L17.29 24.29Z"
                        fill="#2E69E3" />
                    <path d="M11.2 16.8H23.1V18.2H11.2V16.8Z" fill="#2E69E3" />
                </svg>
            </a>
        </div>
        <div class="row">
            @foreach($bukus->take(6) as $b)
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="mb-3" style="max-width: 100%; ">
                    <div class="card border-0 shadow-sm row g-0">
                        <a href="{{ route('detail.buku',$b->id) }}"
                            class="card-header d-flex align-items-center card-header-custom" style="height: 250px;">
                            <img src="{{ $b->picture }}" class="card-img-top img"
                                style="border-radius: 6px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.04); max-height: 230px;"
                                alt="...">
                        </a>
                        <div class="card-body" style="height: 150px">
                            <a href="{{ route('detail.buku',$b->id) }}"
                                class="card-text line-clamp-1 text-decoration-none lh-lg"><small
                                    class="text-muted">{{ $b->penulis }}</small></a>
                            <a href="#"
                                class="card-title font-custom h5 text-decoration-none line-clamp-2">{{ $b->name }}</a>
                            <p class="card-text text-primary position-absolute">{{ $b->rupiah($b->harga_asli) }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <section class="px-3 my-5">
            <div class="fw-base text-center fs-4 mb-3" style="color: #38426C">Tentang Pustaka Aksara</div>
            <p class="text-center">
                Perpustakaan Aksara yang didirikan pada 27 November 1998 ini oleh Yayasan Aksara, menitikberatkan pada
                koleksi buku bersubjek hukum, korupsi, Politik dan ilmu-ilmu sosial. Hingga sekarang, Jumlah koleksi
                yang tersedia di tempat ini berkisar hingga 5000 koleksi. Bertujuan untuk mengembangkan kecerdasan
                masyarakat dengan cara menyebarluaskan buah pikiran dan informasi yang bersumber pada buku, majalah,
                tulisan, laporan media, dan masih banyak lagi, Pustaka Aksara senantiasa mengembangkan koleksi mereka
                yang menitikberatkan pada mutu terbaik.
            </p>
        </section>
        @if($testimonial->count() > 0)
        <section class="px-3 my-5 container">
            <div class="fw-base text-center fs-3 mb-3" style="color: #38426C"> Apa yang klien kami katakan</div>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Carousel indicators -->
                <ol class="carousel-indicators">
                    @foreach($testimonial as $n=> $tt)
                    <li data-target="#myCarousel" data-slide-to="{{ $n }}" class="{{ $n == 0 ? 'active' : '' }}"> </li>
                    @endforeach
                </ol>
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="img-box"><img src="{{ $testimonial1->user->Avatar }}" alt=""></div>
                        <p class="testimonial">"{{ $testimonial1->pesan }}"</p>
                        <p class="overview"><b>{{ $testimonial1->fullname }}</b><small class="text-muted"> Bergabung
                                Sejak {{ $testimonial1->user->created_at->format('d F, Y') }}</small></p>
                    </div>
                    @if($testimonial->count() > 1)
                        @foreach($testimonial2 as $t2)
                        <div class="carousel-item">
                            <div class="img-box"><img src="{{ $t2->user->Avatar }}" alt=""></div>
                            <p class="testimonial">"{!! nl2br($t2->pesan) !!}"</p>
                            <p class="overview"><b>{{ $t2->fullname }}</b><small class="text-muted"> Bergabung Sejak
                                    {{ $t2->user->created_at->format('d F, Y') }}</small></p>
                        </div>
                        @endforeach
                    @endif
                </div>
                <!-- Carousel controls -->
                <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <i class="bi bi-caret-left"></i>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                    <i class="bi bi-caret-right"></i>
                </a>
            </div>
        </section>
        @endif        

        <section class="px-3 my-5">
            <div class="mb-3">
                <div class="fw-base text-center fs-4" style="color: #38426C">FAQ</div>
                <div class="text-center fw-light small">Pertanyaan yang sering diajukan</div>
            </div>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Bagaimana cara membeli buku di Pustaka Aksara?
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            Cara membeli buku E-Book di Pustaka Aksara
                            <ul>
                                <li> Cari terlebih dahulu buku yang ingin anda beli e-booknya </li>
                                <li> Setelah melihat detail buku yang ingin anda beli lalu pilih beli sekarang </li>
                                <li> Lakukan transfer pada E-wallet yang disediakan sama penjual nya </li>
                                <li> Silahkan menunggu konfirmasi dari penjualnya, Apabila anda tidak sabar menunggu
                                    maka anda bisa menghubungi penjual nya langsung </li>
                                <li> Setelah pembayaran anda di konfirmasi sama penjual nya Maka anda akan memiliki
                                    akses untuk membuka E-book yang anda beli</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Apakah Bisa Membeli Buku Fisik ?
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            Tentu saja bisa. Berikut langkah langkah membeli buku fisik <br />
                            <ul>
                                <li> Cari terlebih dahulu buku yang ingin anda beli buku fisiknya </li>
                                <li> Pada halaman detail anda bisa memilih via pembayaran buku fisik </li>
                                <li> Buku fisik yang disediakan hanya ada di : Shopee, Tokopedia, dan Bukalapak </li>
                            </ul>
                            <span> Catatan : Tidak semua buku bisa di beli buku fisiknya, Tergantung keputusan penjual
                                buku tersebut </span>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                            Apakah Saya Bisa Menjadi Penerbit Buku ?
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Langkah Langkah mendaftarkan diri untuk menjadi seorang penerbit
                        </div>
                        <ul>
                            <li> Pada halaman utama, Pilih Daftar Menerbitkan </li>
                            <li> Isi form yang telah disediakan oleh petugas Pustaka Aksara lalu klik daftar </li>
                            <li>
                                Selagi anda menunggu proses konfirmasi formulir, Anda juga bisa menghubungi admin pada
                                fitur whatsapp yang disediakan
                            </li>
                            <li>
                                Anda bisa mengecek apakah formulir anda diterima atau tidak di fitur Cek Progress Buku
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="px-3 my-5">
            <div class="fw-base text-center fs-4 mb-3" style="color: #38426C">Berikan Testimonial anda tentang kami
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <div class="">
                        <form action="{{ route('testimonial') }}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="mb-2">
                                    <label class="mb-2" for="">
                                        <h5> Full Name </h5>
                                    </label>
                                    <input type="text" name="fullname" id="" class="form-control">
                                </div>
                                <div class="mb-2">
                                    <label class="mb-2" for="">
                                        <h5> Email </h5>
                                    </label>
                                    <input type="text" name="email" id="" class="form-control">
                                </div>
                                <div class="mb-4">
                                    <label class="mb-2" for="">
                                        <h5> Pesan </h5>
                                    </label>
                                    <textarea name="pesan" class="form-control" id="" cols="10" rows="5"></textarea>
                                </div>
                                <div class="" style="float:right;">
                                    @auth
                                    <button type="submit" class="btn btn-primary"> Kirim </button>
                                    @else
                                    <a href="{{ route('login') }}" class="btn btn-primary"> Kirim </a>
                                    @endauth
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>

    </section>

    </div>
</x-app-layout>
