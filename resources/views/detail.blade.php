<x-app-layout>
    <div class="container-fluid">
        <section class="mx-50">
            <div class="row">
                <div class="col-12 col-md-3">
                    <div class="pt-4 sticky-top">
                        <div style="margin: 0; height: auto"
                            class="mb-3 d-flex bg-white shadow-sm rounded align-items-center">
                            <img src="{{$buku->picture}}" height="300" class="img-thumbnail rounded border-0" alt="...">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="pt-4">
                        <div class="mb-3">
                            <div class="d-flex justify-content-between align-items-start">
                                <div>
                                    <div class="fs-6 text-secondary opacity-75 fw-light">
                                        {{ $buku->penulis }}
                                    </div>
                                    <div class="fs-4 fw-md text-dark mb-2">
                                        {{ $buku->name }}
                                    </div>
                                    <div class="fs-5 fw-md mb-4 cc">
                                        {{ $buku->rupiah($buku->harga_asli) }}
                                        @if($buku->diskon > 0)
                                        <sub class="fw-light text-decoration-line-through text-secondary">
                                            {{ $buku->rupiah($buku->harga_awal) }}</s>
                                            @endif
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="d-flex flex-column justify-content-center">
                                        @auth
                                        @if(Auth::user()->checkwhistlist($buku) == 1)
                                        <a href="{{ route('unwhistlist',$buku->id) }}"
                                            class="text-secondary  text-decoration-none" title="Hapus dari Wishlist">
                                            <i class="bi bi-heart-fill fs-5 text-danger"></i>
                                        </a>
                                        @else
                                        <a href="{{ route('whistlist',$buku->id) }}"
                                            class="text-secondary text-decoration-none" title="Tambahkan ke Wishlist">
                                            <i class="bi bi-heart fs-5 text-secondary"></i>
                                        </a>
                                        @endif
                                        @else
                                        <a href="{{ route('login') }}" class="text-secondary text-decoration-none"
                                            title="Tambah ke Wishlist">
                                            <i class="bi bi-heart fs-5 text-primary"></i>
                                        </a>
                                        @endauth
                                        <a href="#" class="text-secondary text-decoration-none" title="Bagikan"
                                            role="button" data-bs-toggle="modal" data-bs-target="#share">
                                            <i class="bi bi-share-fill fs-5 text-secondary"></i>
                                        </a>
                                        <a href="https://wa.me/{{ $buku->penjual->whatsapp }}"
                                            class="text-secondary text-decoration-none" title="Chat langsung">
                                            <i class="bi bi-whatsapp fs-5 text-success"></i>
                                        </a>
                                    </div>

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
                            <div class="my-3">
                                <div class="fw-base text-dark mb-3">Detail</div>
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
                                            <div class="small text-dark">{{ ucfirst($buku->bahasa) }}</div>
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
                                    <div class="text-dark my-3 fw-base text-dark">Deskripsi</div>
                                    <div class="fw-light">
                                        {!! nl2br($buku->deskripsi) !!}
                                    </div>
                                    <div class="text-dark my-3 fw-base text-dark">Sinopsis</div>
                                    <div class="fw-light" style="text-align: justify;">
                                        {!! nl2br($buku->sinopsis) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="d-flex align-items-center justify-content-between border-bottom pb-2 mb-3" style="column-gap: 20px;">
                        </div>
                        <!-- <div class="card shadow-sm">
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
                        </div> --}}
                    </div>
                </div>
                <div class="col-12 col-md-3 d-md-block d-none">
                    <div class="pt-4 sticky-top">
                        <div class="card card-body border-0 shadow-sm p-4">
                            <div class="text-secondary">Beli buku sekarang juga!</div>
                            <hr>
                            <div class="row gx-1">
                                <div class="col-6">
                                    <div class="d-grid">
                                        <a href="#" class="btn btn-outline-primary btn-sm rounded-pill" role="button"
                                            data-bs-toggle="modal" data-bs-target="#book">Beli Buku Fisik</a>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-grid">
                                        @auth
                                        @if(Auth::user()->bukuaccess($buku) == 0)
                                        <a href="{{route('belisekarang',$buku->id)}}"
                                            class="btn btn-primary btn-sm rounded-pill">Beli Sekarang</a>
                                        @else
                                        <a href="{{route('lihatbuku',$buku->id)}}"
                                            class="btn btn-primary btn-sm rounded-pill">Lihat Buku</a>
                                        @endif
                                        @else
                                        <a href="{{route('login')}}" class="btn btn-primary btn-sm rounded-pill">Beli
                                            Sekarang</a>

                                        @endauth
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-md-none d-block fixed-bottom p-0">
                    <div class="card card-body border-0 rounded-0 rounded-top m-0 shadow-sm p-4">
                        <div class="text-secondary">Beli buku sekarang juga!</div>
                        <hr>
                        <div class="row gx-1">
                            <div class="col-6">
                                <div class="d-grid">
                                    <a href="#" class="btn btn-outline-primary btn-sm rounded-pill" role="button"
                                        data-bs-toggle="modal" data-bs-target="#book">Beli Buku Fisik</a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-grid">
                                    @auth
                                    @if(Auth::user()->bukuaccess($buku) == 0)
                                    <a href="{{route('belisekarang',$buku->id)}}"
                                        class="btn btn-primary btn-sm rounded-pill">Beli Sekarang</a>
                                    @else
                                    <a href="{{route('lihatbuku',$buku->id)}}"
                                        class="btn btn-primary btn-sm rounded-pill">Lihat Buku</a>
                                    @endif
                                    @else
                                    <a href="{{route('login')}}" class="btn btn-primary btn-sm rounded-pill">Beli
                                        Sekarang</a>

                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
    <div class="modal fade" id="share" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 p-4">
                <div class="d-flex justify-content-start" style="column-gap: 2rem">
                    <button type="button" class="btn-close bi bi-close" data-bs-dismiss="modal"></button>
                    <div class="modal-title" id="staticBackdropLabel">Bagikan Buku</div>
                </div>
                <div class="modal-body">
                    <div class="px-4 pt-5 d-flex justify-content-between align-items-start" style="column-gap: 2.5rem;">
                        <div>
                            <a href="mailto:?subject=Saya Ingin Kamu Melihat Ini&amp;body=Ayo Temukan Buku anda Disini https://pustakaaksara.co.id/e-commerce/view/{{ $buku->id }}"
                                class="d-flex flex-column justify-content-center text-decoration-none text-dark"
                                target="_blank">
                                <i class="bi bi-envelope fs-2 text-dark text-center"></i>
                            </a>
                            <div class="small fw-light">Email</div>
                        </div>
                        <div>
                            <a href="http://www.facebook.com/sharer.php?u=https://pustakaaksara.co.id"
                                class="d-flex flex-column justify-content-center text-decoration-none text-dark"
                                target="_blank">
                                <i class="bi bi-facebook fs-2 text-primary text-center"></i>
                            </a>
                            <div class="small fw-light">Facebook</div>
                        </div>
                        <div>
                            <a href="{{ $buku->bukalapak }}"
                                class="d-flex flex-column justify-content-center text-decoration-none d-flex flex-column text-dark"
                                target="_blank">
                                <i class="bi bi-twitter fs-2 text-info text-center"></i>
                            </a>
                            <div class="small fw-light">Twitter</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="book" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 p-4">
                <div class="d-flex justify-content-start" style="column-gap: 2rem">
                    <button type="button" class="btn-close bi bi-close" data-bs-dismiss="modal"></button>
                    <div class="modal-title" id="staticBackdropLabel">Beli Buku Fisik</div>
                </div>
                <div class="modal-body">
                    <div class="px-4 pt-5 d-flex justify-content-between align-items-center"
                        style="column-gap: 2.5rem;">
                        @if($buku->tokopedia == "" && $buku->shopee == "" && $buku->bukalapak == "")
                        <div class=" p-4 text-center"> Ups, Maaf Untuk Saat Ini Belum Ada Buku Fisik Yang Bisa Di Beli
                        </div>
                        @else
                        @if($buku->tokopedia !== null)
                        <a href="{{ $buku->tokopedia }}" target="_blank">
                            <img src="{{ asset('image/Tokopedia.png') }}" width="50" class="img-fluid" alt="">
                        </a>
                        @endif
                        @if($buku->shopee !== null)
                        <a href="{{ $buku->shopee }}" target="_blank">
                            <img src="{{ asset('image/Shopee.png') }}" width="50" class="img-fluid" alt="">
                        </a>
                        @endif
                        @if($buku->bukalapak !== null)
                        <a href="{{ $buku->bukalapak }}" target="_blank">
                            <img src="{{ asset('image/Bukalapak.png') }}" width="50" class="img-fluid" alt="">
                        </a>
                        @endif
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
