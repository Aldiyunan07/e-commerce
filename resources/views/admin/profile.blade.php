<x-admin-layout>
    @section('content')
        <x-header title="Informasi Profil" description="Disini anda bisa mengedit profil ." />
            <div class="row">
                <div class="col-12 col-xl-8">
                    <div class="card card-body border-0 shadow mb-4">
                        <h2 class="h5 mb-4">Informasi Profil</h2>
                        <form method="post" action="{{ route('admin.profilUpdate',Auth::guard('admin')->user()->id) }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label for="first_name">Nama Lengkap</label>
                                        <input class="form-control" name="name" id="first_name" type="text" value="{{ Auth::guard('admin')->user()->name }}" required="">
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
                                        <input class="form-control" name="email" id="last_name" type="text" value="{{ Auth::guard('admin')->user()->email }}" required="">
                                        @error('email')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row align-items-center">
                                <div class="col-md-6 mb-3">
                                    <label for="birthday">Birthday</label>
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                        </span>
                                        <input data-datepicker="" class="form-control datepicker-input" id="birthday" type="text" placeholder="dd/mm/yyyy" required="">                                               
                                     </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="gender">Gender</label>
                                    <select class="form-select mb-0" id="gender" aria-label="Gender select example">
                                        <option selected="">Gender</option>
                                        <option value="1">Female</option>
                                        <option value="2">Male</option>
                                    </select>
                                </div>
                            </div> -->
                            <!-- <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input class="form-control" id="email" type="email" placeholder="name@company.com" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input class="form-control" id="phone" type="number" placeholder="+12-345 678 910" required="">
                                    </div>
                                </div>
                            </div> -->
                            <div class="mt-3">
                                <button class="btn btn-gray-800 mt-2 animate-up-2" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                    <div class="card card-body border-0 shadow mb-4" id="change-password">
                        <h2 class="h5 mb-4">Ubah Password</h2>
                        <form method="post" action="{{ route('admin.changePassword',Auth::guard('admin')->user()->id) }}"> 
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div>
                                        <label for="first_name">Password Baru</label>
                                        <input class="form-control" name="new_password" id="first_name" type="password" placeholder="" >
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
                                        <input class="form-control" name="password_confirmation" id="last_name" type="password" placeholder="" >
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
                                    <h4 class="h3">{{ Auth::guard('admin')->user()->name }}</h4>
                                    <h5 class="fw-normal">Pustaka Aksara</h5>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
    @endsection
</x-admin-layout>