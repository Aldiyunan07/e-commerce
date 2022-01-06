<x-app-layout>
    <x-slot name="header">
        <h1 class="header-primary mb-3" style="font-weight: 800; color: #34364a; font-size: 32px;">
            Semua Buku
        </h1>
        <p class="fw-light">
            Temukan buku yang anda suka disini
        </p>
    </x-slot>
    <div class="container-fluid">
        <section class="mx-50 my-5 mb-3" id="content">
            <div class="row">
                @foreach($buku as $b)
                <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                    <div class="mb-3" style="max-width: 100%; ">
                        <div class="card border-0 shadow-sm row g-0">
                            <a href="{{ route('detail.buku',$b->id) }}" class="card-header d-flex align-items-center card-header-custom" style="height: 250px;">
                                <img src="{{$b->picture}}" class="card-img-top img" style="border-radius: 6px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.04); max-height: 230px;" alt="...">
                            </a>
                            <div class="card-body" style="height: 150px">
                                <a href="#" class="card-text line-clamp-1 text-decoration-none lh-lg"><small class="text-muted">{{ $b->penulis }}</small></a>
                                <a href="#" class="card-title font-custom h5 text-decoration-none line-clamp-2">{{ $b->name }}</a>
                                <p class="card-text text-primary position-absolute" >{{ $b->rupiah($b->harga_asli) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>
</x-app-layout>
