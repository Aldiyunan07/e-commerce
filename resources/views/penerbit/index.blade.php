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
    <div class="container">
        <section class="my-5 mb-3" style="min-height: 80vh">
            <div class="row gy-5">
                <div class="d-lg-none col-md-12 d-flex justify-content-center">
                    <img src="{{ asset('image/right.svg') }}" width="250" class="img-fluid" alt="">
                </div>
                <div class="col-12 col-md-6">
                    <div class="px-3">
                        <p class="text-secondary fw-light mt-5">AYO TERBITKAN BUKU DIPUSTAKA AKSARA !</p>
                        <h2 class="fw-bold lh-base" style="color: #38426C">Daftar Disini Untuk Menerbitkan dan Mencetak
                            Buku</h2>
                        <p class="text-secondary fs-6 fw-light mt-4">Sudah Terbukti, Ribuan Penulis Telah Kami Terbitkan
                            Naskah Bukunya Hanya Dalam Waktu 6 Minggu!</p>
                        <a href="{{ route('form.penerbit') }}" class="btn btn-primary btn-lg border-0 mt-2 fs-6">Yuk,
                            Daftar</a>
                    </div>
                </div>
                <div class="col-12 col-md-5 d-lg-flex d-none justify-content-end">
                    <img src="{{ asset('image/right.svg') }}" width="300" class="img-fluid" alt="gambar">
                </div>
            </div>
        </section>
        <section class="px-3 my-5">
            <div class="fw-base text-center fs-4 mb-5" style="color: #38426C">Kenapa menerbitkan Buku disini ?</div>
            <div class="row gy-3">
                <div class="col-12 col-md-4">
                    <div class="text-center card card-body border-0 shadow-sm p-4">
                        <i class="bi bi-award fs-1"></i>
                        <div class="fs-5 my-3">
                            Kualitas Terjamin
                        </div>
                        <div class="text-secondary lh-base">
                            Penerbit Pustaka Aksara menerapkan standar kualitas ISO 9001:2008 dalam operasional
                            bisnisnya. Setiap saat selalu dilakukan perbaikan terus-menerus guna menjamin kualitas para
                            penulis Penerbit Pustaka Aksara.
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="text-center card card-body border-0 shadow-sm p-4">
                        <i class="bi bi-lock fs-1"></i>
                        <div class="fs-5 my-3">
                            Setiap Buku Ber-ISBN Resmi
                        </div>
                        <div class="text-secondary lh-base">
                            Setiap buku yang diterbitkan oleh Penerbit Pustaka Aksara telah resmi terdaftar dan memiliki
                            ISBN masing-masing. Dengan demikian buku tersebut telah diakui keberadaannya secara
                            Internasional.
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="text-center card card-body border-0 shadow-sm p-4">
                        <i class="bi bi-currency-dollar fs-1"></i>
                        <div class="fs-5 my-3">
                            Biaya Terjamin
                        </div>
                        <div class="text-secondary lh-base">
                            Biaya produksi setiap buku yang dicetak diupayakan terjangkau agar buku-buku tersebut dapat
                            dibaca, dipelajari, dan termanfaatkan oleh semua kalangan mahasiswa maupun peneliti dan
                            profesional dengan sebaik-baiknya.
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
    </div>
</x-app-layout>
{{-- <x-app-layout>
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-body">
                <div class="p-2 text-center">
                    <h4> Kenapa Menerbitkan Buku di Pustaka Aksara ? </h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="p-5 text-center">
                            Kualitas Terjamin
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="p-5 text-center">
                            Setiap Buku Ber - ISBN Resmi
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="p-5 text-center">
                            Biaya Terjangkau
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <div class="col-md-6 mt-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="p-5 text-center">
                                <a href="{{ route('form.penerbit') }}"> Daftar Menerbitkan </a>
</div>
</div>
</div>
</div>
</div>

<div class="col-md-12 mt-3">
    <div class="card">
        <div class="card-body">
            <div class="p-3 text-center">
                <h4> Tahukah Anda ? </h4>
                <div class="ps-3 pe-3">
                    Layanan dan produk Pusaka Aksara selalu mengedepankan kualitas, kecepatan waktu, kreativitas, dan
                    harga yang terjangkau. Dengan hadirnya fitur menerbitkan, proses penerbitan menjadi lebih mudah,
                    singkat, transparan, dan tepat sasaran.
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</x-app-layout> --}}
