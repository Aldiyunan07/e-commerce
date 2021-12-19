<x-app-layout>
    <x-slot name="header">
        <h1 class="header-primary mb-3" style="font-weight: 800; color: #34364a; font-size: 32px;">
            Pesanan Saya
        </h1>
        <p class="fw-light text-dark">
            Disini Anda dapat melihat daftar <br> buku yang anda pesan
        </p>
    </x-slot>
    <div class="container">
        <div class="row">
            <x-side />
            <div class="col-lg-9">
                <div class="card card-body p-0 border-0 shadow-sm overflow-hidden">
                    <div>
                       <div class="d-md-flex align-items-center px-4 py-3">
                           <div class="me-3">
                               <div class="fw-bold">Status</div>
                           </div>
                           <div class="d-flex" style="column-gap: 7px">
                                <a href="#" class="text-decoration-none text-primary border border-primary rounded-pill py-1 px-3">
                                    Semua
                                </a>
                                <a href="#" class="text-decoration-none text-secondary border border-secondary rounded-pill py-1 px-3">
                                    Proses
                                </a>
                                <a href="#" class="text-decoration-none text-secondary border border-secondary rounded-pill py-1 px-3">
                                    Bebas
                                </a>
                            </div>
                       </div>
                       <div>
                           @foreach($buy as $b)
                           <div class="card card-body border-0 rounded-0 p-4 border-top">
                               <div class="small d-md-flex align-items-center mb-3" style="column-gap: 0.6rem">
                                   <span class="my-1 fw-bold">Belanja</span>
                                   <span class="my-1 fw-light">{{ $b->created_at->format('d M, Y') }}</span>
                                   @if($b->status == "konfirmasi")
                                       <span class="my-1 badge bg-success"> Transaksi selesai </span>
                                   @else
                                       <span class="my-1 badge bg-primary"> Proses </span>
                                   @endif
                               </div>
                               <div class="fw-normal mb-2">
                                   {{ $b->buku->penulis }}
                               </div>
                               <div class="row gx-3">
                                   <div class="col-4 col-md-1">
                                       <img src="{{ $b->buku->picture }}" style="width: 100%" alt="">
                                   </div>
                                   <div class="col-8 col-md-8">
                                       <a href="{{ route('detail.buku',$b->buku->id) }}" class="text-decoration-none text-dark fw-bold d-block">{{ $b->buku->name }}</a>
                                       <span class="fw-light small text-secondary">1 x {{ $b->buku->rupiah($b->buku->harga_asli) }}</span>
                                   </div>
                                   <div class="my-3 col-12 col-md-3 ps-3 border-start d-flex align-items-center">
                                       <div class="d-flex flex-column">
                                           <span class="fw-light small">
                                               Total Belanja
                                           </span>
                                           <span class="small">
                                               {{ $b->buku->rupiah($b->buku->harga_asli) }}
                                           </span>
                                       </div>
                                   </div>
                                   <div class="d-flex justify-content-end mt-4">
                                       <div>
                                           <a target="_blank href="https://wa.me/{{ $b->buku->penjual->whatsapp }}" class="btn btn-outline-success fw-normal">Hubungi Penjual</a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           @endforeach
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>