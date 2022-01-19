<x-admin-layout>
    @section('content')
    <div class="py-4">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="#">
                        <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="#">Progress Buku</a></li>
            </ol>
        </nav>
    </div>
    <div class="card border-0 shadow mb-4">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h1 class="h4">Progress Buku " {{ $progress->penerbit->judul_buku }} "</h1>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.update.progress',$progress->id) }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="row container d-flex justify-content-center">
                    <div class="col-md-4">
                        <label for=""> Naskah </label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" {{ $progress->naskah == "on" ? 'checked' : '' }} name="naskah" type="checkbox" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Penulisan Naskah</label>
                        </div>

                        <label for="" class="mt-2"> Administrasi </label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" {{ $progress->administrasi == "on" ? 'checked' : '' }} name="administrasi" type="checkbox"
                                id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Cek Administrasi</label>
                        </div>

                        <label for="" class="mt-2"> Informasi Harga </label>
                        <div class="input-group">
                            <div class="input-group-text">Rp</div>
                            <input type="number" value="{{ old('masuk') ?? $progress->harga }}" class="form-control" name="harga" id="autoSizingInputGroup"
                                placeholder="">
                        </div>
                        <label for="" class="mt-2"> Tanggal Masuk ISBN </label>
                        <div class="input-group">
                            <input type="date" value="{{ old('masuk') ?? $progress->masuk }}" class="form-control" name="masuk" id="autoSizingInputGroup"
                                placeholder="">
                        </div>

                        <label for="" class="mt-2"> Antrian Layout & Desain </label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" {{ $progress->antrian == "on" ? 'checked' : '' }} type="checkbox" name="antrian" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault"> Cek Antrian</label>
                        </div>

                        <label for="" class="mt-2"> Upload Laporan </label>
                        <input type="file" name="gambar" class="form-control" id="">

                    </div>
                    <div class="col-md-4">
                        <label for=""> Proses Layout </label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" {{ $progress->proses == "on" ? 'checked' : '' }} name="layout" type="checkbox" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Layout</label>
                        </div>
                        <label for="" class="mt-2"> Desain Cover </label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" {{ $progress->cover == "on" ? 'checked' : '' }} name="cover" type="checkbox" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Cover</label>
                        </div>
                        <label for="" class="mt-2"> Deal Harga </label>
                        <div class="input-group">
                            <div class="input-group-text">Rp</div>
                            <input type="number" value="{{ old('deal_harga') ?? $progress->deal_harga }}" name="deal_harga" class="form-control" id="autoSizingInputGroup"
                                placeholder="">
                        </div>
                        <label for="" class="mt-2"> Tanggal Keluar ISBN </label>
                        <div class="input-group">
                            <input type="date" value="{{ old('keluar') ?? $progress->keluar }}" name="keluar" class="form-control" id="autoSizingInputGroup"
                                placeholder="">
                        </div>
                        <label for="" class="mt-2"> Proses Produksi </label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" {{ $progress->produksi == "on" ? 'checked' : '' }} name="produksi" type="checkbox" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault"> Mulai Proses Produksi</label>
                        </div>

                    </div>

                </div>
                <div class="d-flex mb-3 me-3 mt-3 justify-content-end mt-3">
                    <a href="{{ route('admin.progres.buku') }}" class="btn btn-danger me-2 btn-sm"> Kembali </a>
                    <button type="submit" class="btn btn-info btn-sm">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
    @endsection
</x-admin-layout>
