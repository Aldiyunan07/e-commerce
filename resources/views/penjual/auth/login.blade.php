<x-guest-layout>
    <x-content-guest header="Login Karyawan">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('penjual.penjuallogin') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-3">
                <x-label for="email" class="form-label text-dark fw-bold opacity-75" :value="__('Email')" />

                <x-input id="email" autocomplete="off" class="form-control border-0 p-3 px-4" style="background-color: #F3F3F3" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mb-3">
                <x-label for="password" class="form-label text-dark fw-bold opacity-75" :value="__('Password')" />

                <x-input id="password" class="form-control border-0 p-3 px-4" style="background-color: #F3F3F3"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="mb-3">
                <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                <label for="remember_me" class="form-check-label text-dark fw-light opacity-75 small">{{ __('Remember me') }}</label>
            </div>
            
            <div class="d-grid mb-3">
                <x-button class="btn btn-primary fw-bold border-0 p-3 px-4">
                    Masuk
                </x-button>
            </div>
            <div class="d-flex justify-content-between">
                <span></span>
                <a href="{{ route('login') }}" style="text-decoration:none;"> Login sebagai user </a>
            </div>
        </form>
    </x-content-guest>
</x-guest-layout>
