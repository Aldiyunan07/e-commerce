<x-app-layout>
    <x-slot name="header">
        <h1 class="header-primary mb-3" style="font-weight: 800; color: #34364a; font-size: 32px;">
            Profile Information
        </h1>
        <p class="fw-light text-dark">
            Lengkapi profil Anda agar orang lain <br>tahu siapa Anda
        </p>
    </x-slot>
    <div class="container">
        <div class="row">
            <x-side />
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <form class="row g-3" method="post" enctype="multipart/form-data" action="{{ route('update.profil',Auth::user()->id) }}">
                            @csrf
                            <div class="col-md-6">
                              <label for="name" class="form-label font-custom">Nama Lengkap</label>
                              <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" placeholder="Masukan Nama Lengkap">
                              @error('name')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                              @enderror
                              <!-- <div class="text-danger">
                                  Contoh lamun error
                              </div> -->
                            </div>
                            <div class="col-md-6">
                              <label for="email" class="form-label font-custom">Email</label>
                              <input type="email" class="form-control" name="email" placeholder="Masukan Email" value="{{ Auth::user()->email }}">
                              @error('email')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                              @enderror
                            </div>
                            <div class="col-md-6">
                                <span class="form-label font-custom">
                                    Jenis Kelamin
                                </span>
                                <div class="form-check">
                                    <input class="form-check-input" name="jk" value="laki-laki" type="radio" {{ Auth::user()->jk == 'laki-laki' ? 'checked' : '' }}  id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                      Laki Laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="perempuan" name="jk" id="flexRadioDefault2" {{ Auth::user()->jk == 'perempuan' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                      Perempuan
                                    </label>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                              <label for="email" class="form-label font-custom">Poto Profil</label>
                              <input type="file" class="form-control" name="foto" >
                              @error('foto')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                              @enderror
                            </div>
                            <div class="col-md-6">
                            <div class="mb-3">
                                  <label for="inputCity" class="form-label font-custom">Tanggal Lahir</label>
                                  <input type="date" value="{{ Auth::user()->ttl }}" name="tanggal_lahir" class="form-control" id="inputCity">
                                  @error('tanggal_lahir')
                                    <div class="text-danger">
                                    {{ $message }}
                                    </div>
                                  @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                            <div class="mb-3">
                                  <label for="inputCity" class="form-label font-custom">No Telepon / Whatsapp</label>
                                  <input type="text" class="form-control" name="no_telp" value="{{ Auth::user()->no_telp }}" id="inputCity" placeholder="Masukan No Telepon / Whatsapp">
                                  @error('no_telp')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                              @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                            <div class="mb-3">
                                    <label for="exampleDataList" class="form-label font-custom">Profesi atau Pekerjaan</label>
                                    <input class="form-control" name="profesi" value="{{ Auth::user()->profesi }}" list="datalistOptions" id="exampleDataList" placeholder="Masukan Pekerjaan">
                                    @error('profesi')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                              @enderror
                                    <datalist id="datalistOptions">
                                      <option value="San Francisco">
                                      <option value="New York">
                                      <option value="Seattle">
                                      <option value="Los Angeles">
                                      <option value="Chicago">
                                    </datalist>
                                </div>
                            </div>
                            <div class="col-md-6">
                            <div class="mb-3">
                                  <label for="inputCity" class="form-label font-custom">Alamat</label>
                                    <textarea name="alamat" class="form-control">{{ nl2br(Auth::user()->alamat) }}</textarea>
                                    @error('alamat')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                              @enderror
                                </div>
                            </div>
                            <div class="col-12">
                              <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>