<x-penjual-layout>
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
                <li class="breadcrumb-item"><a href="#">Toko Saya</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Buku</li>
            </ol>
        </nav>
    </div>
    <div class="card border-0 shadow mb-4">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h1 class="h4">Edit Buku</h1>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('penjual.updatebuku',$buku->id) }}" enctype="multipart/form-data" method="post">
                @csrf
                @method('patch')
                <div class="row">
                    <div class="col-md-5">
                        <div class="mb-4">
                            <label for="name">Nama Buku</label>
                            <input type="text" value="{{ old('name') ?? $buku->name }}" name="name" class="form-control" id="name">
                            @error('name')
                            <div class="text-danger"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="name">Kategori</label>
                            <select name="kategori" class="form-control" id="">
                                <option disabled selected> Pilih kategori </option>
                                @foreach($kategori as $k)
                                    <option {{ $k->id == $buku->kategori_id ? 'selected' : '' }}  value="{{ $k->id }}"> {{ $k->kategori }} </option>
                                @endforeach
                            </select>
                            @error('kategori')
                            <div class="text-danger"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="harga">Diskon</label>
                            <input type="number" name="diskon" class="form-control" value="{{ old('buku') ?? $buku->diskon }}" id="diskon">
                            @error('diskon')
                            <div class="text-danger"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="penulis">Penulis</label>
                            <input type="text" name="penulis" class="form-control" value="{{ old('penulis') ?? $buku->penulis }}" id="penulis">
                            @error('penulis')
                            <div class="text-danger"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control"> {{ $buku->deskripsi }} </textarea>
                            @error('deskripsi')
                            <div class="text-danger"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="mb-4">
                            <label for="gambar">Gambar</label>
                            <input type="file" name="gambar" class="form-control" id="gambar">
                            @error('gambar')
                            <div class="text-danger"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="jumlah">Jumlah Halaman</label>
                            <input type="number" name="halaman" class="form-control" id="halaman" value="{{ old('halaman') ?? $buku->halaman }}">
                            @error('halaman')
                            <div class="text-danger"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="harga">Harga</label>
                            <input type="number" name="harga" class="form-control" id="harga" value="{{ old('harga_awal') ?? $buku->harga_awal }}">
                            @error('harga')
                            <div class="text-danger"> {{ $message }} </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="bahasa">Bahasa</label>
                            <input type="text" name="bahasa" class="form-control" id="bahasa" value="{{ old('bahasa') ?? $buku->bahasa }}" >
                            @error('bahasa')
                            <div class="text-danger"> {{ $message }} </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <a href="{{ route('penjual.listbuku') }}" class="btn btn-danger btn-sm mt-3"> Kembali </a>
                <button type="submit" class="btn btn-info btn-sm mt-3"> Simpan </button>
            </form>
        </div>
    </div>
    @endsection
</x-penjual-layout>
