<x-penjual-layout>
    @section('content')
        <x-header title="Informasi Profil" description="Disini anda bisa mengedit profil ." />
            <div class="row">
                <div class="col-12 col-xl-8">
                    <div class="card card-body border-0 shadow mb-4">
                        <h2 class="h5 mb-4">Informasi Profil</h2>
                        <form method="post" action="{{ route('penjual.profilUpdate',Auth::guard('penjual')->user()->id) }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label for="first_name">Nama Lengkap</label>
                                        <input class="form-control" name="name" id="name" type="text" value="{{ Auth::guard('penjual')->user()->name }}" required="">
                                        @error('name')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label for="last_name">Email</label>
                                        <input class="form-control" name="email" id="last_name" type="text" value="{{ Auth::guard('penjual')->user()->email }}" required="">
                                        @error('email')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-6 mb-3">
                                    <label for="birthday">No Telepon / WhatsApp</label>
                                    <div class="input-group">
                                        <input type="text" name="whatsapp" value="{{ Auth::guard('penjual')->user()->whatsapp }}" id="" class="form-control">
                                        @error('whatsapp')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mt-3">
                                <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                    <div class="card card-body border-0 shadow mb-4" id="change-password">
                        <h2 class="h5 mb-4">Ubah Password</h2>
                        <form method="post" action="{{ route('penjual.changePassword',Auth::guard('penjual')->user()->id) }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label for="first_name">Password Baru</label>
                                        <input class="form-control" id="first_name" name="new_password" type="password" placeholder="" >
                                        @error('new_password')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label for="last_name">Konfirmasi Password</label>
                                        <input class="form-control" id="last_name" name="password_confirmation" type="password" placeholder="" >
                                        @error('password_confirmation')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        @if(session()->has('error'))
                                            <div class="text-danger">
                                                {{ session()->get('error') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-xl-4">
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="card shadow border-0 text-center p-0">
                                <div class="profile-cover rounded-top"></div>
                                <div class="card-body pb-5">
                                    <img src="{{ asset('image/avatar.png') }}" class="avatar-xl rounded-circle mx-auto mt-n7 mb-4" alt="Neil Portrait">
                                    <h4 class="h3">{{ Auth::guard('penjual')->user()->name }}</h4>
                                    <h5 class="fw-normal">Pustaka Aksara</h5>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
    @endsection
</x-penjual-layout>