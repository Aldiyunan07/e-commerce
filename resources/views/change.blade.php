<x-app-layout>
    <x-slot name="header">
        <h1 class="header-primary mb-3" style="font-weight: 800; color: #34364a; font-size: 32px;">
            Change Password
        </h1>
        <p class="fw-light text-dark">
            Disini Anda dapat mengubah password
        </p>
    </x-slot>
    <div class="container">
        <div class="row">
            <x-side />
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <form class="row g-3" method="post" action="{{ route('ubah.password',Auth::user()->id) }}">
                            @csrf
                            <div class="mb-3">
                                <div class="col-md-6">
                                  <label for="name" class="form-label font-custom">New Password</label>
                                  <input type="text" name="password" class="form-control" id="name" placeholder="">
                                  @error('password')
                                  <div class="text-danger">
                                      {{ $message }}
                                  </div>
                                  @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="col-md-6">
                                  <label for="password_confirmation" class="form-label font-custom">Password Confirmation</label>
                                  <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="">
                                    @error('password_confirmation')
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