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
        <div class="d-flex justify-content-center">
            <h4> Cek Progress Buku </h4>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="text-justify">
                    Bagi Anda yang saat ini sedang dalam proses menerbitkan buku di Penerbit Pustaka Aksara dapat
                    mengecek secara langsung progress atau kemajuan dari buku Anda.

                    Terdapat beberapa proses dari mulai Anda mengirim naskah kepada kami hingga proses produksi dan siap
                    dikirim ke tempat Anda.
                    <br />
                    Untuk mengetahui progress buku Anda sampai di tahap apa dapat memerika melalui tools dibawah ini
                    dengan cara :
                    <br />
                    <ol>
                        <li>Ketikkan “Judul Naskah” Anda di kolom “Masukkan judul buku Anda disini!”.</li>
                        <li>Tekan “Cari” dan akan muncul hasilnya.</li>
                        <li>Kini Anda sudah tahu buku Anda sampai di tahap apa.</li>
                    </ol>
                    <a href="{{ route('cari.progress') }}" class="btn btn-primary btn-sm"> Cek Buku Anda Disini </a>
                    <br />
                    <b>Ada pertanyaan atau butuh bantuan? Hubungi Konsultan Penerbitan Kami dibawah in</b>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
