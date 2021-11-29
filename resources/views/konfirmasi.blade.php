<x-app-layout>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <img class="mt-5" src="https://buildwithangga.com/themes/front/images/ill_success_checkout.svg" style="max-height: 320px" alt="">
            <div class="col-5 my-4 text-center">
                <h1 class="header-primary mb-3" style="font-weight: 800; color: #34364a; font-size: 32px;">
                    Berhasil Checkout
                </h1>
                <p class="fw-light text-dark">
                    WhatsApp akan terbuka secara otomatis untuk <br>
                    melanjutkan proses konfirmasi pembayaran 
                </p>            
                <div class="d-grid">
                    <a href="{{ route('welcome') }}" class="btn btn-primary rounded-pill btn-lg mb-3">Selesai</a>
                    <button class="btn btn-white bg-white rounded-pill btn-lg">Butuh Bantuan</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>