<x-guest-layout>
    <x-content-guest header="Masuk" >
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label text-dark fw-bold opacity-75">Email</label>
                <input type="email" name="email" value="{{old('email')}}" id="email" class="form-control border-0 p-3 px-4" style="background-color: #F3F3F3" placeholder="Masukan Email" required autofocus>
                @error('email')
                <span class="small text-danger my-1">
                    {{ $message}}
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label text-dark fw-bold opacity-75">Password</label>
                <input type="password" name="password" id="password" class="form-control border-0 p-3 px-4" style="background-color: #F3F3F3" placeholder="Masukan Password" required autocomplete="current-password">
            </div>
            <div class="mb-3">
                <input type="checkbox" name="remember" id="remember" class="form-check-input">
                <label for="remember" class="form-check-label text-dark fw-light opacity-75 small">Remember Me</label>
            </div>
            <div class="d-grid mb-3">
                <button class="btn btn-primary fw-bold border-0 p-3 px-4">Masuk</button>
            </div>
            <div>
                <span class="form-check-label text-dark fw-light opacity-75 small">Belum mempunyai akun? <a href="{{ route('register') }}" class="text-decoration-none fw-normal">Daftar</a> atau <a href="{{ route('password.request') }}" class="text-decoration-none fw-normal">Lupa Password ?</a></span>
            </div>
        </form>
    </x-content-guest>
</x-guest-layout>
