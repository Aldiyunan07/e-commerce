<x-admin-layout>
    @section('content')
        <x-header title="Detail" description="Disini anda dapat melihat detail buku."></x-header>
        <div class="row">
            <div class="col-md-9">
                <div class="card mb-3">
                    <div class="card-body">
                        <h3>Lorem ipsum</h3>
                        <div class="text-muted">John doe</div>
                        <div class="fw-bold my-3">Deskripsi</div>
                        <div class="fw-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusantium praesentium facere nulla fugit dignissimos. Facere, deserunt, accusantium aut cumque nam nulla alias corrupti inventore vero sint voluptate distinctio natus doloribus.</div>
                        <div class="my-3">
                            <div class="fw-bold text-dark mb-3">Detail</div>
                            <div class="row">
                                <div class="col-6 col-md-6">
                                    <div class="mb-2">
                                        <div class="small text-muted">Jumlah Halaman</div>
                                        <div class="small text-dark">520.0</div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="small text-muted">Tanggal Terbit</div>
                                        <div class="small text-dark">14 Januari 2021</div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="small text-muted">ISBN</div>
                                        <div class="small text-dark">9786020650352</div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="small text-muted">Bahasa</div>
                                        <div class="small text-dark">Indonesia</div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-6">
                                    <div class="mb-2">
                                        <div class="small text-muted">Penerbit</div>
                                        <div class="small text-dark">Gramedia Pustaka Utama</div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="small text-muted">Berat</div>
                                        <div class="small text-dark">0.46 kg</div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="small text-muted">Lebar</div>
                                        <div class="small text-dark">13.5 cm</div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="small text-muted">Panjang</div>
                                        <div class="small text-dark">20.0 cm</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('admin.books') }}" class="btn btn-danger">Kembali</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ asset('image/image 7.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    @endsection
</x-admin-layout>