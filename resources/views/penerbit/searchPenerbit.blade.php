<x-app-layout>
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="row">
                <div class="col-md-12">
                    <div class="card" style="width: 50rem;">
                        <div class="card-header text-center">
                            <h4>
                                Cari Progress Buku
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('cari.progress') }}" method="get">
                                <div class="input-group mb-3">
                                    <select name="cari" id="" class="form-control">
                                        <option value="">  Pilih Buku Yang Ingin Anda Cari </option>
                                        @foreach($listpenerbit as $p)
                                        <option value="{{ $p->id }}"> {{ $p->judul_buku }} </option>
                                        @endforeach
                                    </select>
                                    <button type="submit" class="btn btn-primary"> Cari </button>
                                </div>
                            </form>
                            @if(isset($progress))
                            @foreach($progress as $p)
                            <div class="text-center">
                                <h4 class="p-2"> "{{ $p->penerbit->judul_buku }}" </h4>
                            </div>
                            <div class="alert {{ $p->naskah == 'on' ? 'alert-success' : 'alert-secondary' }} "
                                role="alert">
                                <i
                                    class="bi {{ $p->naskah == 'on' ? 'bi-check-circle-fill' : 'bi-check-circle' }}  me-2"></i>
                                Penulisan Naskah
                            </div>
                            <div class="alert {{ $p->administrasi == 'on' ? 'alert-success' : 'alert-secondary' }} "
                                role="alert">
                                <i
                                    class="bi {{ $p->administrasi == 'on' ? 'bi-check-circle-fill' : 'bi-check-circle' }}  me-2"></i>
                                Cek Administrasi
                            </div>
                            <div class="alert {{ $p->antrian == 'on' ? 'alert-success' : 'alert-secondary' }} "
                                role="alert">
                                <i
                                    class="bi {{ $p->antrian == 'on' ? 'bi-check-circle-fill' : 'bi-check-circle' }}  me-2"></i>
                                Antrian Layout & Desain
                            </div>
                            <div class="alert {{ $p->layout == 'on' ? 'alert-success' : 'alert-secondary' }} "
                                role="alert">
                                <i
                                    class="bi {{ $p->layout == 'on' ? 'bi-check-circle-fill' : 'bi-check-circle' }}  me-2"></i>
                                Proses Layout
                            </div>
                            <div class="alert {{ $p->desain == 'on' ? 'alert-success' : 'alert-secondary' }} "
                                role="alert">
                                <i
                                    class="bi {{ $p->desain == 'on' ? 'bi-check-circle-fill' : 'bi-check-circle' }}  me-2"></i>
                                Proses Desain
                            </div>
                            <div class="alert {{ $p->harga !== null ? 'alert-success' : 'alert-secondary' }} "
                                role="alert">
                                <i
                                    class="bi {{ $p->harga !== null ? 'bi-check-circle-fill' : 'bi-check-circle' }}  me-2"></i>
                                Informasi Harga ({{ $p->rupiah($p->harga) }})
                            </div>
                            <div class="alert {{ $p->deal_harga !== null ? 'alert-success' : 'alert-secondary' }} "
                                role="alert">
                                <i
                                    class="bi {{ $p->deal_harga !== null ? 'bi-check-circle-fill' : 'bi-check-circle' }}  me-2"></i>
                                Deal Harga ({{ $p->rupiah($p->deal_harga) }})
                            </div>
                            <div class="alert {{ $p->masuk !== null ? 'alert-success' : 'alert-secondary' }} "
                                role="alert">
                                <i
                                    class="bi {{ $p->masuk !== null ? 'bi-check-circle-fill' : 'bi-check-circle' }}  me-2"></i>
                                Tanggal Masuk ISBN {{ $p->masuk !== null ? $p->masuk : '' }}
                            </div>
                            <div class="alert {{ $p->keluar !== null ? 'alert-success' : 'alert-secondary' }} "
                                role="alert">
                                <i
                                    class="bi {{ $p->keluar !== null ? 'bi-check-circle-fill' : 'bi-check-circle' }}  me-2"></i>
                                Tanggal Keluar ISBN {{ $p->keluar !== null ? $p->keluar : '' }}
                            </div>
                            <div class="alert {{ $p->produksi !== null ? 'alert-success' : 'alert-secondary' }} "
                                role="alert">
                                <i
                                    class="bi {{ $p->produksi !== null ? 'bi-check-circle-fill' : 'bi-check-circle' }}  me-2"></i>
                                Mulai Proses Produksi
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
