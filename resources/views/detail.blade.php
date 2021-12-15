<x-app-layout>
    <div class="container-fluid">
        <div class="row mx-50" style="column-gap: 30px">
            <div class="col-12 col-md-8 ">
                <div style="margin: 0; height: auto"
                    class="mb-3 d-flex bg-white shadow-sm rounded align-items-center">
                    <img src="{{$buku->picture}}" height="500" class="img-fluid rounded" style="border-radius: 0px;" alt="...">
                </div>
                {{-- </div>
            <div class="col-12 col-md-5"> --}}
                <div class="card border-0 shadow-sm mb-3">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <div class="fs-5 text-secondary opacity-75 fw-light">
                                    {{ $buku->penulis }}
                                </div>
                                <div class="fs-3 fw-md text-dark mb-4">
                                    {{ $buku->name }}
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                @auth
                                @if(Auth::user()->bukuaccess($buku) == 0)
                                <a href="{{route('belisekarang',$buku->id)}}"
                                    class="d-block btn btn-primary btn-sm me-2">Beli Sekarang</a>
                                @else
                                <a href="{{route('lihatbuku',$buku->id)}}"
                                    class="d-block btn btn-primary btn-sm me-2">Lihat Buku</a>
                                @endif
                                @else

                                @endauth
                                @auth
                                @if(Auth::user()->checkwhistlist($buku) == 1)
                                <a href="{{ route('unwhistlist',$buku->id) }}"
                                    class="text-secondary  text-decoration-none" title="Tambah ke Wishlist">
                                    <i class="bi bi-bookmark-plus fs-3"></i>
                                </a>
                                    @else
                                    <a href="{{ route('whistlist',$buku->id) }}"
                                        class="text-secondary text-decoration-none" title="Tambah ke Wishlist">
                                        <i class="bi bi-bookmark-plus fs-3"></i>
                                    </a>
                                    <a href="{{ route('login') }}" class="text-secondary text-decoration-none"
                                        title="Hapus dari Wishlist">
                                        <i class="bi bi-bookmark-dash fs-3"></i>
                                    </a>
                                    @endif

                                    @else
                                    <a href="{{ route('login') }}" class="text-secondary text-decoration-none"
                                        title="Tambah ke Wishlist">
                                        <i class="bi bi-bookmark-plus fs-3"></i>
                                    </a>
                                    <a href="{{ route('login') }}" class="text-secondary text-decoration-none"
                                        title="Tambah ke Wishlist">
                                        <i class="bi bi-bookmark-dash-fill fs-3"></i>
                                    </a>
                                    @endauth

                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between border-bottom pb-2"
                            style="column-gap: 20px;">
                            <div>
                                {{-- <div class="d-inline me-3 fw-normal small text-secondary opacity-75">Format Buku</div>
                                <div class="d-inline me-3 fw-normal small text-secondary opacity-75">Deskripsi Buku</div>
                                <div class="d-inline me-3 fw-normal small text-secondary opacity-75">Detail Buku</div>
                                <div class="d-inline me-3 fw-normal small text-secondary opacity-75">Review</div> --}}
                            </div>
                        </div>
                        <div class="text-dark my-3 fw-bold">Buku Fisik Yang Tersedia</div>
                        <div class="format-buku row g-2">
                            <div class="col-12 col-md-3">
                                <div class="card border-primary">
                                    <a href="{{ $buku->shopee }}" target="_blank" class="card-body m-0 py-1 text-decoration-none">
                                        <img src="{{ asset('image/shopee.png') }}" height="50" alt="" srcset="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="card border-primary">
                                    <a href="{{ $buku->bukalapak }}}" target="_blank" class="card-body m-0 py-1 text-decoration-none">
                                        <img src="{{ asset('image/bukalapak.jpg') }}" height="50" alt="" srcset="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="card border-primary">
                                    <a href="{{ $buku->tokopedia }}" target="_blank" class="card-body m-0 py-1 text-decoration-none">
                                        <img src="{{ asset('image/tokopedia.png') }}" height="50" alt="" srcset="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="format-buku d-flex" style="column-gap: 12px">
                            @auth
                                    @if(Auth::user()->bukuaccess($buku) == 0)
                                    <div class="card border-primary">
                                        <a href="#" class="card-body m-0 py-1 text-decoration-none">
                                            <div class="fw-bold text-dark">Ebook</div>
                                            <div class="small text-secondary opacity-75">Mulai dari</div>
                                            <div class="text-primary">{{ $buku->rupiah($buku->harga_asli) }}</div>
                                        </a>
                                    </div>
                                    @endif
                            @else
                                <div class="card border-primary">
                                    <a href="{{ route('login') }}" class="card-body m-0 py-1 text-decoration-none">
                                        <div class="fw-bold text-dark">Ebook</div>
                                        <div class="small text-secondary opacity-75">Mulai dari</div>
                                        <div class="text-primary">{{ $buku->rupiah($buku->harga_asli) }}</div>
                                    </a>
                                </div>
                            @endauth
                            <div class="card border-primary">
                                <a href="#" class="card-body m-0 py-1 text-decoration-none">
                                    <div class="fw-bold text-dark">Buku</div>
                                    <div class="small text-secondary opacity-75">Mulai dari</div>
                                    <div class="text-primary">Rp. 200.00</div>
                                </a>
                            </div>
                        </div> -->
                        <div class="text-dark my-3 fw-bold">Deskripsi</div>
                        <div class="fw-light">
                            {!! nl2br($buku->deskripsi) !!}
                        </div>
                        <div class="text-dark my-3 fw-bold">Sinopsis</div>
                        <div class="fw-light">
                            {!! $buku->sinopsis !!}
                        </div>
                        <div class="my-3">
                            <div class="fw-bold text-dark mb-3">Detail</div>
                            <div class="row">
                                <div class="col-6 col-md-6">
                                    <div class="mb-2">
                                        <div class="small text-secondary">Jumlah Halaman</div>
                                        <div class="small text-dark">{{ $buku->halaman }} Halaman </div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="small text-secondary">Tanggal Terbit</div>
                                        <div class="small text-dark">{{ $buku->created_at->format('d F, Y') }}</div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="small text-secondary">ISBN</div>
                                        <div class="small text-dark">{{ $buku->isbn }}</div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="small text-secondary">Bahasa</div>
                                        <div class="small text-dark">{{ $buku->bahasa }}</div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6">
                                    <div class="mb-2">
                                        <div class="small text-secondary">Penerbit</div>
                                        <div class="small text-dark">{{ $buku->penerbit }}</div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="small text-secondary">Berat</div>
                                        <div class="small text-dark">{{ $buku->berat }} kg</div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="small text-secondary">Lebar</div>
                                        <div class="small text-dark">{{ $buku->lebar }} cm</div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="small text-secondary">Panjang</div>
                                        <div class="small text-dark">{{ $buku->panjang }} cm</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="fw-bold border-bottom pb-2">
                            Review
                        </div>
                        <div class="py-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis optio tempora ab maiores
                            nam, harum earum magnam accusamus eius tenetur vitae id eos exercitationem amet nemo quia
                            obcaecati aut rem reprehenderit autem? Ipsum aut reprehenderit blanditiis ratione libero
                            obcaecati tenetur dignissimos sed neque, aliquid illo non quod esse soluta, possimus
                            perferendis. Delectus amet similique porro cum cupiditate aperiam provident incidunt
                            voluptate tenetur? Illum saepe in sunt magni numquam vitae deserunt quisquam suscipit.
                            Libero error ipsum laudantium vero commodi, quidem totam odit cumque eveniet excepturi
                            dolorem est modi, doloremque ut dolore reiciendis! Nam et culpa officia dolorem iste
                            necessitatibus odit aspernatur.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="fw-bold mb-3">
                    E-Book Serupa
                </div>
                <div class="row">
                    @foreach($ebook as $e)
                    <div class="col-6 col-sm-4 col-md-12">
                        <div class="card shadow-sm border-0 mb-2" style="max-width: 540px; border-radius: 0.25rem ;">

                            <div class="row g-0">
                                <div class="col-md-4">
                                    <a href="{{ route('detail.buku',$e->id) }}">
                                        <img src="{{ $e->picture }}" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title line-clamp-1" style="font-size: 16px;">{{ $e->name }}</h5>
                                        <p class="card-text line-clamp-2" style="font-size: 12px">{{ $e->deskripsi }}
                                        </p>
                                        <p class="card-text"><small
                                                class="small text-primary">{{ $e->rupiah($e->harga_asli) }}</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>

    </div>
</x-app-layout>
