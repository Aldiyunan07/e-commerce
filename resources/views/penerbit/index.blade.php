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
                        <h2 class="fw-bold lh-base" style="color: #38426C">Daftar Disini Untuk Menerbitkan dan Mencetak Buku</h2>
                        <p class="text-secondary fs-6 fw-light mt-4">Sudah Terbukti, Ribuan Penulis Telah Kami Terbitkan Naskah Bukunya Hanya Dalam Waktu 6 Minggu!</p>
                        <a href="{{ route('form.penerbit') }}" class="btn btn-primary btn-lg border-0 mt-2 fs-6">Yuk, Daftar</a>
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
                            Penerbit Pustaka Aksara menerapkan standar kualitas ISO 9001:2008 dalam operasional bisnisnya. Setiap saat selalu dilakukan perbaikan terus-menerus guna menjamin kualitas para penulis Penerbit Pustaka Aksara.
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
                            Setiap buku yang diterbitkan oleh Penerbit Pustaka Aksara telah resmi terdaftar dan memiliki ISBN masing-masing. Dengan demikian buku tersebut telah diakui keberadaannya secara Internasional.
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
                            Biaya produksi setiap buku yang dicetak diupayakan terjangkau agar buku-buku tersebut dapat dibaca, dipelajari, dan termanfaatkan oleh semua kalangan mahasiswa maupun peneliti dan profesional dengan sebaik-baiknya.
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="px-3 my-5">
            <div class="fw-base text-center fs-4 mb-3" style="color: #38426C">Tentang Pustaka Aksara</div>
            <p class="text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Et distinctio obcaecati nostrum amet. A cum nemo itaque amet error qui porro explicabo eaque nulla provident cupiditate ullam quis eos ut nobis ducimus quo nesciunt quibusdam, quae dolorum iure? Cupiditate assumenda molestiae, nihil exercitationem itaque eveniet quisquam unde! Incidunt non reiciendis iusto nostrum quaerat itaque! Eveniet perferendis, excepturi dolor deserunt asperiores repudiandae debitis architecto mollitia! Fugiat praesentium, aliquid enim provident, sequi eum molestias atque suscipit beatae quae tempore, accusamus accusantium commodi voluptatum natus sit numquam officiis doloremque iste minus dolorum incidunt aspernatur. Molestiae quos delectus ipsam fugit corporis laudantium architecto nemo id cupiditate! Reprehenderit autem quos voluptas animi non saepe consectetur? Ex fugit sunt ea labore, magni, sint minus dolorum qui ab perferendis dignissimos consectetur! Consequuntur cum odit veniam! Aliquam tempore tenetur sequi? Facere repudiandae nulla quasi ullam dicta, accusantium sapiente quos deserunt, aliquam quis possimus magnam expedita placeat recusandae id.
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
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      Accordion Item #1
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                      Accordion Item #2
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                      Accordion Item #3
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
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
                                Layanan dan produk Pusaka Aksara selalu mengedepankan kualitas, kecepatan waktu, kreativitas, dan harga yang terjangkau. Dengan hadirnya fitur menerbitkan, proses penerbitan menjadi lebih mudah, singkat, transparan, dan tepat sasaran.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
