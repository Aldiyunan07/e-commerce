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
</x-app-layout>
