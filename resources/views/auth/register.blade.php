<x-guest-layout>
    <x-content-guest header="Daftar">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3">
                {{-- <label for="password" class="form-label text-dark fw-bold opacity-75">Password</label> --}}
                <input autocomplete="off" type="text" name="name" id="name" value="{{ old('name') }}" class="form-control border-0 p-3 px-4" style="background-color: #F3F3F3" placeholder="Nama" required autofocus>
                @error('name')
                <span class="small text-danger my-1">
                    {{ $message}}
                </span>
                @enderror
            </div>
            <div class="mb-3">
                {{-- <label for="email" class="form-label text-dark fw-bold opacity-75">Email</label> --}}
                <input type="email" autocomplete="off" name="email" value="{{old('email')}}" id="email" class="form-control border-0 p-3 px-4" style="background-color: #F3F3F3" placeholder="Email" required >
                @error('email')
                <span class="small text-danger my-1">
                    {{ $message}}
                </span>
                @enderror
            </div>
            <div class="mb-3">
                {{-- <label for="whatsapp" class="form-label text-dark fw-bold opacity-75">Whatsapp</label> --}}
                <input type="text" autocomplete="off" name="no_telp" value="{{old('no_telp')}}" id="whatsapp" class="form-control border-0 p-3 px-4" style="background-color: #F3F3F3" placeholder="Whatsapp" required >
                @error('no_telp')
                <span class="small text-danger my-1">
                    {{ $message}}
                </span>
                @enderror
            </div>
            <div class="mb-3">
                {{-- <label for="password" class="form-label text-dark fw-bold opacity-75">Password</label> --}}
                <input type="password" name="password" id="password" class="form-control border-0 p-3 px-4" style="background-color: #F3F3F3" placeholder="Password" required>
                @error('password')
                <span class="small text-danger my-1">
                    {{ $message}}
                </span>
                @enderror
            </div>
            <div class="mb-3">
                {{-- <label for="password" class="form-label text-dark fw-bold opacity-75">Password</label> --}}
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control border-0 p-3 px-4" style="background-color: #F3F3F3" placeholder="Konfirmasi Password" required>
            </div>                    
            <div class="d-grid mb-3">
                <button class="btn btn-primary fw-bold border-0 p-3 px-4">Daftar</button>
            </div>
            <div>
                <span class="form-check-label text-dark fw-light opacity-75 small">Sudah mempunyai akun? <a href="{{ route('login') }}" class="text-decoration-none fw-normal">Masuk</a></span>
            </div>
        </form>
    </x-content-guest>
</x-guest-layout>
