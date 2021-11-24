<x-penjual-layout>
    @section('content')
        <x-header title="Detail" description="Disini anda dapat melihat detail buku."></x-header>
        <div class="row">
            <div class="col-md-9">
                <div class="card mb-3">
                    <div class="card-body">
                        <h3>{{ $buku->name }} </h3>
                        <div class="d-flex justify-content-between">
                            <div class="text-muted">{{ $buku->penulis }}</div>
                            <div class="text-muted">{{ ucfirst($buku->status) }}</div>
                        </div>
                        <div class="fw-bold my-3">Deskripsi</div>
                        <div class="fw-light"> {{ $buku->deskripsi }} </div>
                        <div class="my-3">
                            <div class="fw-bold text-dark mb-3">Detail</div>
                            <div class="row">
                                <div class="col-6 col-md-6">
                                    <div class="mb-2">
                                        <div class="small text-muted">Jumlah Halaman</div>
                                        <div class="small text-dark">{{ $buku->halaman }} Halaman </div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="small text-muted">Tanggal Terbit</div>
                                        {{-- <div class="small text-dark">{{ $buku->created_at->format('d F, Y') }}</div> --}}
                                    </div>
                                    <div class="mb-2">
                                        <div class="small text-muted">ISBN</div>
                                        <div class="small text-dark">{{ $buku->isbn }}</div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="small text-muted">Bahasa</div>
                                        <div class="small text-dark">{{ $buku->bahasa }}</div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6">
                                    <div class="mb-2">
                                        <div class="small text-muted">Penerbit</div>
                                        <div class="small text-dark">{{ $buku->penerbit }}</div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="small text-muted">Berat</div>
                                        <div class="small text-dark">{{ $buku->berat }} kg</div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="small text-muted">Lebar</div>
                                        <div class="small text-dark">{{ $buku->lebar }} cm</div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="small text-muted">Panjang</div>
                                        <div class="small text-dark">{{ $buku->panjang }} cm</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('penjual.listbuku') }}" class="btn btn-danger">Kembali</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ $buku->Picture }}" class="mb-3" alt="">
                        @if($buku->status == "proses")
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('admin.book.terima',$buku->id) }}" class="btn btn-info"> Terima </a>
                            <a href="{{ route('admin.book.tolak',$buku->id) }}" class="btn btn-danger"> Tolak </a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endsection
</x-penjual-layout>