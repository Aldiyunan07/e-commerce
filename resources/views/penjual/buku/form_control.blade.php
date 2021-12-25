<div class="row">
    <div class="col-md-6">
        <div class="mb-4">
            <label for="name">Nama Buku</label>
            <input type="text" value="{{ old('name') ?? $buku->name }}" name="name" class="form-control" id="name">
            @error('name')
            <div class="text-danger"> {{ $message }} </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="gambar">Gambar</label>
            <input type="file" name="gambar" class="form-control" id="gambar">
            @error('gambar')
            <div class="text-danger"> {{ $message }} </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="name">Kategori</label>
            <select name="kategori" class="form-control" id="">
                <option disabled selected> Pilih kategori </option>
                @foreach($kategori as $k)
                <option {{ $k->id == $buku->kategori_id ? 'selected' : '' }} value="{{ $k->id }}">
                    {{ $k->kategori }} </option>
                @endforeach
            </select>
            @error('kategori')
            <div class="text-danger"> {{ $message }} </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="berat"> Berat </label>
            <div class="input-group">
                <input type="number" value="{{ old('berat') ?? $buku->berat }}" min="0" name="berat" class="form-control">
                <span class="input-group-text" id="basic-addon2"> g </span>
            </div>
            @error('berat')
            <div class="text-danger"> {{ $message }} </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="harga">Lebar</label>
            <div class="input-group">
                <input type="lebar" value="{{ old('lebar') ?? $buku->lebar }}" min="0" name="lebar" class="form-control" id="lebar">
                <span class="input-group-text" id="basic-addon2">cm</span>
            </div>
            @error('lebar')
            <div class="text-danger"> {{ $message }} </div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="harga">Harga</label>
            <div class="input-group">
            <span class="input-group-text" id="basic-addon2"> Rp. </span>
            <input type="number" name="harga" class="form-control" id="harga"
                    value="{{ old('harga_awal') ?? $buku->harga_awal }}">
            </div>
            @error('harga')
            <div class="text-danger"> {{ $message }} </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="shopee">Link Shopee</label>
            <input type="shopee" name="shopee" class="form-control" id="shopee"
                value="{{ old('shopee') ?? $buku->shopee }}">
            @error('shopee')
            <div class="text-danger"> {{ $message }} </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="tokopedia">Link Tokopedia</label>
            <input type="tokopedia" name="tokopedia" class="form-control" id="tokopedia"
                value="{{ old('tokopedia') ?? $buku->tokopedia }}">
            @error('tokopedia')
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
    <div class="col-md-6">
        <div class="mb-4">
            <label for="penulis">Penulis</label>
            <input type="text" name="penulis" class="form-control" value="{{ old('penulis') ?? $buku->penulis }}"
                id="penulis">
            @error('penulis')
            <div class="text-danger"> {{ $message }} </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="ebook">Ebook</label>
            <input type="file" name="ebook" class="form-control" id="ebook">
            @error('ebook')
            <div class="text-danger"> {{ $message }} </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="penerbit">Penerbit</label>
            <input type="text" name="penerbit" value="{{ old('penerbit') ?? $buku->penerbit }}" class="form-control"
                id="penerbit">
            @error('penerbit')
            <div class="text-danger"> {{ $message }} </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="isbn">No ISBN</label>
            <input type="number" value="{{ old('isbn') ?? $buku->isbn }}" name="isbn" class="form-control" id="isbn">
            @error('isbn')
            <div class="text-danger"> {{ $message }} </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="panjang">Panjang</label>
            <div class="input-group">
                <input type="number" value="{{ old('panjang') ?? $buku->panjang }}" min="0" name="panjang" class="form-control"
                    id="panjang">
                    <span class="input-group-text" id="basic-addon2">cm</span>
            </div>
            @error('panjang')
            <div class="text-danger"> {{ $message }} </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="harga">Diskon</label>
            <div class="input-group">
                <input type="number" name="diskon" class="form-control" value="{{ old('buku') ?? $buku->diskon }}"
                    id="diskon">
                    <span class="input-group-text" id="basic-addon2"> % </span>
            </div>
            @error('diskon')
            <div class="text-danger"> {{ $message }} </div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="jumlah">Jumlah Halaman</label>
            <input type="number" name="halaman" class="form-control" id="halaman"
                value="{{ old('halaman') ?? $buku->halaman }}">
            @error('halaman')
            <div class="text-danger"> {{ $message }} </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="bukalapak">Link Bukalapak</label>
            <input type="text" name="bukalapak" class="form-control" id="bukalapak"
                value="{{ old('bukalapak') ?? $buku->bukalapak }}">
            @error('bukalapak')
            <div class="text-danger"> {{ $message }} </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="sinopsis">Sinopsis Buku </label>
            <textarea name="sinopsis" class="form-control"> {{ $buku->sinopsis }} </textarea>
            @error('sinopsis')
            <div class="text-danger"> {{ $message }} </div>
            @enderror
        </div>
    </div>
</div>
