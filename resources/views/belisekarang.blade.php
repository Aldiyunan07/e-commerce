<x-app-layout>
    <x-slot name="header">
        <h1 class="header-primary mb-3" style="font-weight: 800; color: #34364a; font-size: 32px;">
            Checkout Buku
        </h1>
        <p class="fw-light text-dark">
            Membaca buku lebih mudah diakses <br /> dimanapun dan kapanpun
        </p>
    </x-slot>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-lg-3">
                <div class="mb-3" style="max-width: 100%; ">
                    <div class="card border-0 shadow-sm row g-0">
                        <a href="{{ route('detail.buku',$buku->id) }}"
                            class="card-header d-flex align-items-center card-header-custom" style="height: 250px;">
                            <img src="{{$buku->picture}}" class="card-img-top img"
                                style="border-radius: 6px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.04); max-height: 230px; max-width: 150px;"
                                alt="...">
                        </a>
                        <div class="card-body">
                            <a href="#" class="card-text line-clamp-1 text-decoration-none lh-lg"><small
                                    class="text-muted">{{$buku->penulis}}</small></a>
                            <a href="#"
                                class="card-title h6 fw-bolder text-decoration-none line-clamp-2 text-dark">{{ $buku->name }}</a>
                            {{-- <p class="card-text text-primary">{{  $buku->rupiah($buku->harga_asli)}}</p> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                {{-- <div class="card">
                    <div class="card-header">
                        <h6>
                            Transfer pembayaran
                        </h6>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <td> Nomor BCA (PT. ALIM RUGI) </td>
                                <td> : 98263498364932864 </td>
                            </tr>
                            <tr>
                                <td> Nomor BNI (PT. ALIM RUGI) </td>
                                <td> : 98263498364932864 </td>
                            </tr>
                            <tr>
                                <td> Nomor BRI (PT. ALIM RUGI) </td>
                                <td> : 98263498364932864 </td>
                            </tr>
                        </table>
                    </div>
                </div> --}}
                <div class="card shadow-sm border-0 mb-3">
                    <div class="card-body p-4">
                        <div class="fw-bold font-custom mb-3">
                            Detail pembayaran
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="fw-light text-secondary">Harga Buku</p>
                            <p class="fw-light font-custom">{{ $buku->rupiah($buku->harga_awal) }}</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="fw-light text-secondary">Diskon</p>
                            <p class="fw-bold font-custom">{{ $buku->rupiah($buku->hargadiskon()) }}</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="fw-light text-secondary">Total Transfer</p>
                            <p class="fw-bold font-custom">{{ $buku->rupiah($buku->harga_asli) }}</p>
                        </div>
                        <div class="fw-bold font-custom my-3">
                            Transfer pembayaran
                        </div>
                        @foreach($buku->penjual->metode as $b)
                        <div class="mb-4">
                            <div class="d-flex justify-content-between">
                                @if($b->wallet == "dana")
                                <img src="{{ asset('image/dana.png') }}"
                                    style="height: 35px" alt="">

                                @elseif($b->wallet == "gopay")
                                <img src="{{ asset('image/gopay.png') }}"
                                    style="height: 35px" alt="">
                                @else
                                <img src="{{ asset('image/ovo.png') }}"
                                    style="height: 35px" alt="">
                                @endif

                                <span class="font-custom fw-bold d-block">{{ $b->number }}</span>
                            </div>
                        </div>
                        @endforeach
                        <div>
                            <div class="d-grid">
                                <button class="btn btn-primary rounded-pill btn-lg mb-2" data-bs-toggle="modal"
                                    data-bs-target="#modal">Konfirmasi Pembayaran</button>
                                <!-- <button class="btn btn-light rounded-pill btn-lg text-secondary mb-4">Lihat Jam Operasional</button> -->
                            </div>
                            {{-- Modal Content --}}
                            <div class="modal fade" id="modal" tabindex="-1" role="dialog"
                                aria-labelledby="modal-default" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content rounded border-0">
                                        <div class="modal-body">
                                            <div class="d-flex flex-nowrap justify-content-center align-items-center">
                                                <i class="bi bi-question-circle text-info" style="font-size: 100px"></i>
                                            </div>
                                            <div class="d-block text-center">
                                                Apakah anda sudah melakukan <br> pembayaran ?
                                            </div>
                                            <div class="d-flex justify-content-center align-items-center my-4"
                                                style="column-gap: 5px">
                                                <form action="{{ route('buynow', $buku->id) }}" method="post">
                                                    @csrf
                                                    <div>
                                                        <button type="submit"
                                                            class="btn btn-primary text-white">Sudah</button>
                                                    </div>
                                                </form>
                                                <div>
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">Belum</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <div class="fw-bold font-custom mb-3">
                            Informasi Penting
                        </div>
                        <div class="fw-normal font-custom mb-4">
                            Proses konfirmasi pembayaran buku akan membutuhkan waktu sekitar 20 menit. Mohon menunggu
                            dengan sabar dan terima kasih.
                        </div>
                        <div class="fw-bold font-custom mb-3">
                            Butuh bantuan? hubungi penjual
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="fw-light text-secondary">Penjual</p>
                            <p class="fw-normal font-custom">{{ $buku->penjual->name }} </p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="fw-light text-secondary">No. WhatsApp</p>
                            <p class="fw-bold font-custom"> {{ $buku->penjual->whatsapp }}</p>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="fw-light text-secondary">Total Transfer</p>
                            <p class="fw-bold font-custom">{{ $buku->rupiah($buku->harga_asli) }}</p>
                        </div>
                        <div>
                            <div class="d-grid">
                                <a href="https://wa.me/{{ $buku->penjual->whatsapp }}"
                                    class="btn btn-light rounded-pill btn-lg text-secondary mb-4">Hubungi Penjual</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
