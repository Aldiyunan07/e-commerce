<x-guest-layout>
    <x-content-guest header="Reset Password">
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div class="mb-3">
                <label for="email" class="form-label text-dark fw-bold opacity-75">Email</label>
                <input id="email" class="form-control border-0 p-3 px-4" style="background-color: #F3F3F3" type="email" name="email" value="{{old('email', $request->email)}}" required autofocus />
                @error('email')
                <span class="small text-danger my-1">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="password" class="form-label text-dark fw-bold opacity-75">Password</label>
                <input id="password" class="form-control border-0 p-3 px-4" style="background-color: #F3F3F3" type="password" name="password" required />
                @error('password')
                <span class="small text-danger my-1">
                    {{ $message }}
                </span>
                @enderror
            </div>

            <!-- Confirm Password -->
            <div class="mb-3">
                <label for="password_confirmation" class="form-label text-dark fw-bold opacity-75">Confirm Password</label>
                <input id="password_confirmation" class="form-control border-0 p-3 px-4" style="background-color: #F3F3F3" type="password" name="password_confirmation" required />
            </div>
            <div class="d-grid mb-3">
                <button class="btn btn-primary fw-bold border-0 p-3 px-4">Reset Password</button>
            </div>
        </form>
    </x-content-guest>
</x-guest-layout>
