{{-- <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav> --}}
<nav class="navbar navbar-expand-lg navbar-light bg-white mx-50">
    <div class="container-fluid">
      <a class="navbar-brand font-logo d-flex align-items-center justify-content-start" style="margin-right: 8rem; width:8rem;" href="#"> 
      <img src="{{asset('/image/logo.png')}}" alt="" width="36" height="36" class="me-1"> 
      <span style="background: -webkit-linear-gradient(90.87deg, #365AA3 6.64%, #4370CD 100%);-webkit-background-clip: text; -webkit-text-fill-color: transparent;">
          {{ config('app.name') }}
      </span>  
      </a>
      {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    </button> --}}
    <div class="d-lg-none">
        <div class="dropdown">
            <span class="navbar-toggler-icon" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"></span>
            {{-- <a class="btn btn-secondary" href="#" >
              Dropdown link
            </a> --}}
          
            <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg" style="width: 15rem; font-size: 15px;" aria-labelledby="dropdownMenuLink">
              <li><a style="padding: 0.5rem 1rem 0.5rem 1rem" class="dropdown-item active" href="#">Beranda</a></li>
              <li><a style="padding: 0.5rem 1rem 0.5rem 1rem" class="dropdown-item" href="#">Katalog</a></li>
              <li><a style="padding: 0.5rem 1rem 0.5rem 1rem" class="dropdown-item" href="#">Penulis</a></li>
              <li><a style="padding: 0.5rem 1rem 0.5rem 1rem" class="dropdown-item" href="#">Best Seller</a></li>
              <li><a style="padding: 0.5rem 1rem 0.5rem 1rem" class="dropdown-item border-bottom" href="#">Buku Saya</a></li>
              <li><a style="padding: 0.5rem 1rem 0.5rem 1rem" class="dropdown-item" href="#">Login</a></li>
              <li><a style="padding: 0.5rem 1rem 0.5rem 1rem" class="dropdown-item" href="#">Register</a></li>
            </ul>
          </div>
        </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="width: 100%;">
            <li class="nav-item">
                <a class="nav-link font-custom" href="{{ route('home') }}">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link font-custom" href="{{ route('dashboard') }}">Katalog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link font-custom" href="{{ route('dashboard') }}">Penulis</a>
            </li>
            <li class="nav-item">
                <a class="nav-link font-custom" href="{{ route('dashboard') }}">Best Seller</a>
            </li>
            <li class="nav-item">
                <a class="nav-link font-custom" href="{{ route('dashboard') }}">Buku Saya</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link font-custom" href="{{ route('dashboard') }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.487 17.14L16.422 13.444C16.2299 13.2693 15.9774 13.1762 15.7178 13.1842C15.4583 13.1922 15.212 13.3008 15.031 13.487L12.638 15.948C12.062 15.838 10.904 15.477 9.71201 14.288C8.52001 13.095 8.15901 11.934 8.05201 11.362L10.511 8.968C10.6974 8.78712 10.8061 8.54082 10.8142 8.2812C10.8222 8.02159 10.7289 7.76904 10.554 7.57699L6.85901 3.51299C6.68405 3.32035 6.44089 3.2035 6.18116 3.18725C5.92143 3.17101 5.66561 3.25665 5.46801 3.42599L3.29801 5.28699C3.12512 5.46051 3.02193 5.69145 3.00801 5.93599C2.99301 6.18599 2.70701 12.108 7.29901 16.702C11.305 20.707 16.323 21 17.705 21C17.907 21 18.031 20.994 18.064 20.992C18.3085 20.9783 18.5393 20.8747 18.712 20.701L20.572 18.53C20.742 18.333 20.8283 18.0774 20.8124 17.8177C20.7965 17.558 20.6798 17.3148 20.487 17.14Z" fill="#38426C"/>
                    </svg>
                    (0351) 1450-39
                </a>
            </li> --}}
        </ul>
        @auth
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
        
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>     
        @else
        <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link font-custom-guest" href="{{ route('login') }}">Masuk</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link font-custom-guest" style="opacity: 40%;">/</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font-custom" href="{{ route('register') }}">Daftar</a>
            </li>
        </ul>
        @endauth

      </div>
    </div>
  </nav>