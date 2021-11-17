<x-guest-layout>
    <x-content-guest header="Lupa Password">
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
            </div>
            <div class="d-grid mb-3">
                <button class="btn btn-primary fw-bold border-0 p-3 px-4">Kirim Link</button>
            </div>
        </form>
    </x-content-guest>
</x-guest-layout>
