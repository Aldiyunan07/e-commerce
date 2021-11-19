<x-app-layout>
    <x-slot name="header">
        <h2>
            Toko Buku
        </h2>
    </x-slot>

    <div class="container">
        <div class="row">
            @foreach($buku as $b)
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <div class="mb-3" style="max-width: 100%; ">
                    <div class="card shadow shadow-lg border-0 shadow-sm row g-0">
                        <a href="#" class="card-header border-0 d-flex align-items-center card-header-custom"
                            style="height: 250px;">
                            <img src="{{ $b->Picture }}" class="card-img-top img" alt="...">
                        </a>
                        <div class="card-body" style="height: 150px">
                            <a href="#" class="card-text line-clamp-1 text-decoration-none lh-lg"><small
                                    class="text-muted">{{ $b->penulis }}</small></a>
                            <a href="#"
                                class="card-title font-custom h5 text-decoration-none line-clamp-2">{{ $b->name }}</a>
                            <p class="card-text text-primary">{{ $b->rupiah($b->harga_asli) }}</p>
                            @if(Auth::user()->bukuaccess($b) == 1 )
                                <a href="" class="btn btn-success btn-sm"> Lihat Buku </a>
                            @else
                                <a href="{{ route('belisekarang',$b->id) }}" class="btn btn-primary btn-sm"> Beli Sekarang </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
