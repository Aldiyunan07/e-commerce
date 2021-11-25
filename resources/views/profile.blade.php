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
                        <form class="row g-3">
                            <div class="col-md-6">
                              <label for="name" class="form-label font-custom">Nama Lengkap</label>
                              <input type="text" class="form-control is-invalid" id="name" placeholder="Masukan Nama Lengkap">
                              <div class="invalid-feedback">
                                  Contoh lamun error
                              </div>
                            </div>
                            <div class="col-md-6">
                              <label for="email" class="form-label font-custom">Email</label>
                              <input type="email" class="form-control" id="email" placeholder="Masukan Email">
                            </div>
                            <div class="col-12">
                                <span class="form-label font-custom">
                                    Jenis Kelamin
                                </span>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                      Laki-laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                      Perempuan
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="col-md-6">
                                  <label for="inputCity" class="form-label font-custom">Tanggal Lahir</label>
                                  <input type="date" class="form-control" id="inputCity">
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="col-md-6">
                                  <label for="inputCity" class="form-label font-custom">No Telepon / Whatsapp</label>
                                  <input type="text" class="form-control" id="inputCity" placeholder="Masukan No Telepon / Whatsapp">
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="col-md-6">
                                    <label for="exampleDataList" class="form-label font-custom">Profesi atau Pekerjaan</label>
                                    <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Masukan Pekerjaan">
                                    <datalist id="datalistOptions">
                                      <option value="San Francisco">
                                      <option value="New York">
                                      <option value="Seattle">
                                      <option value="Los Angeles">
                                      <option value="Chicago">
                                    </datalist>
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