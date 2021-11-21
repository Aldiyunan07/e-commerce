<x-guest-layout>
    <x-content-guest header="Lupa Password">
        <x-auth-session-status class="mb-4" status="{{session('status')}}" />
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <!-- Email Address -->
            <div class="mb-3">
                <label for="email" class="form-label text-dark fw-bold opacity-75">Email</label>
                <input type="email" name="email" value="{{old('email')}}" id="email" class="form-control border-0 p-3 px-4" style="background-color: #F3F3F3" placeholder="Masukan Email" required autofocus>
                @error('email')
                <span class="small text-danger my-1">
                    {{ $message}}
                </span>
                @enderror
                <div class="flex justify-content-start mt-1">
                    <span class="text-dark fw-light opacity-75 small"><a href="{{ route('login') }}" class="text-decoration-none">Login </a> disini !</span>
                </div>
            </div>
            <div class="d-grid mb-3">
                <button class="btn btn-primary fw-bold border-0 p-3 px-4">Kirim Link</button>
            </div>
        </form>
    </x-content-guest>
</x-guest-layout>
