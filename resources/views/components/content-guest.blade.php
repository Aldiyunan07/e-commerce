<div class="col-md-5 position-relative login-side">
    <div class="position-absolute" style="z-index: 9999;">
        <a href="/" class="d-block judul text-white my-2 mx-5 text-decoration-none">Pustaka Aksara</a>
        <div class="text-white mx-5 h2 fw-normal opacity-75 lh-sm" style="margin-top: 150px; text-shadow: 2px 2px gray;">
            Temukan semua jenis Buku, <br> Buku Cerita, dll di sini.
        </div>
    </div>
    <div class="min-vh-100 d-flex justify-content-end align-items-end">
        <img src="{{ asset('image/Group 1.png') }}" style="margin-right: -13rem; z-index: -1;" alt="">
    </div>
</div>
<div class="col-md-7">
    <div class="bg-white min-vh-100 d-flex justify-content-center align-items-center" style="margin-right: -0.75rem; border-radius: 2rem 0 0 2rem;">
        <div class="col-10 col-lg-8">
            @isset($header)
                <h1 class="judul mb-4">{{ $header }}</h1>
            @endisset
            {{ $slot }}
        </div>
    </div>
</div>