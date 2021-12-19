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
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="p-5 text-center">
                            <h3> TERIMA KASIH TELAH MENDAFTAR </h3>
                            <br/>
                            <h5> Terima kasih telah mendaftar menjadi penulis di Penerbit Buku Pusaka Aksara. 
                                Anda masuk waiting list untuk menerbitkan buku. 
                                Segera Customer Care kami akan menghubungi anda untuk konfirmasi dan Penjelasan ulang
                                tentang Penerbit Buku Pusaka Aksara </h5>
                            <br/>
                            <div class="d-flex justify-content-center">
    
                                <a href="{{ route('welcome') }}" class="btn btn-dark"> Kembali Ke Beranda</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
