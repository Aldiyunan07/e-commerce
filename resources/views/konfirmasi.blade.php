<x-app-layout>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <img class="mt-5" src="https://buildwithangga.com/themes/front/images/ill_success_checkout.svg" style="max-height: 320px" alt="">
            <div class="col-5 my-4 text-center">
                <h1 class="header-primary mb-3" style="font-weight: 800; color: #34364a; font-size: 32px;">
                    Berhasil Checkout
                </h1>
                <p class="fw-light text-dark">
                    Anda bisa menghubungi penjual di bawah ini <br>
                    Jika anda ingin mempercepat proses pesanan anda  
                </p>            
                <div class="d-grid">
                    <a href="{{ route('welcome') }}" class="btn btn-primary rounded-pill btn-lg mb-3">Kembali ke Beranda</a>
                    <a href="https://wa.me/{{ $buku->penjual->whatsapp }}?text=Halo!%0ASaya%20pembeli%20buku%20anda%0ASaya%20ingin%20mempercepat%20proses%20pesanan%20buku%20saya" class="btn btn-success rounded-pill btn-lg mb-3">Hubungi Penjual</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>