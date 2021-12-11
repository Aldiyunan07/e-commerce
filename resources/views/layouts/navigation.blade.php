<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
    <div class="container-fluid mx-50">
        <a class="navbar-brand font-logo d-flex align-items-center justify-content-start"
            style="margin-right: 8rem; width:8rem;" href="/">
            <img src="{{asset('/image/logo.png')}}" alt="" width="36" height="36" class="me-1">
            <span
                style="background: -webkit-linear-gradient(90.87deg, #365AA3 6.64%, #4370CD 100%);-webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                {{ config('app.name') }}
            </span>
        </a>
        {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    </button> --}}
        <div class="d-lg-none">
            <a class="navbar-toggler-icon" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                aria-controls="offcanvasExample"></a>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <a class="navbar-brand font-logo d-flex align-items-center justify-content-start"
                        style="margin-right: 8rem; width:8rem;" href="#">
                        <img src="{{asset('image/logo.png')}}" alt="" width="36" height="36" class="me-1">
                        <span
                            style="background: -webkit-linear-gradient(90.87deg, #365AA3 6.64%, #4370CD 100%);-webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                            {{ config('app.name') }}
                        </span>
                    </a>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body px-0">
                    <ul class="list-group" style="border-radius:0">
                        <li class="list-group-item">
                            <form action="{{ route('search') }}" method="post">
                                @csrf
                                <div class="input-group" style="width: 100%">
                                    <input type="search" name="search" id="" class="form-control bg-blue-200"
                                        style="border: none; border-radius: 50px 0 0 50px" placeholder="Cari buku"
                                        aria-label="Cari buku" aria-describedby="button-addon2">
                                    <button type="submit" class="btn bg-blue-200 m-0 pe-3 text-secondary"
                                        style="border-radius: 0 50px 50px 0;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path
                                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('allBooks') }}" class="text-decoration-none text-dark">Wishlist</a>
                        </li>
                        <li class="list-group-item">
                            <a href="" class="text-decoration-none text-dark">Buku Saya</a>
                        </li>
                        <li class="list-group-item">
                            <a href="" class="text-decoration-none text-dark">Pesanan Saya</a>
                        </li>

                        <li class="list-group-item">
                            <a href="" class="text-decoration-none text-dark">Masuk</a>
                        </li>
                        <li class="list-group-item">
                            <a href="" class="text-decoration-none text-dark">Daftar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- <div class="dropdown">
            <span class="navbar-toggler-icon" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"></span>
          
            <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg" style="width: 15rem; font-size: 15px;" aria-labelledby="dropdownMenuLink">
              <li><a style="padding: 0.5rem 1rem 0.5rem 1rem" class="dropdown-item active" href="{{ route('home') }}">Beranda</a>
        </li>
        <li><a style="padding: 0.5rem 1rem 0.5rem 1rem" class="dropdown-item" href="#">Buku Saya</a></li>
        <li>
            <hr class="dropdown-divider" />
        </li>
        @auth
        <li><a style="padding: 0.5rem 1rem 0.5rem 1rem"
                class="dropdown-item d-flex align-items-center line-clamp-1 text-capitalize" href="#"><span><img
                        class="me-1 rounded-circle" width="25" height="25" {{ Auth::user()->picture !== '' ? Auth::user()->Picture : 'https://www.gravatar.com/avatar/e2bf8f75fd55aaff7c9a55b3fb78627c?d=mm&s=150' }}
                        src=""
                        alt=""></span>{{ Auth::user()->name }}</a></li>
        <li><a style="padding: 0.5rem 1rem 0.5rem 1rem" class="dropdown-item" href="#">Change Password</a></li>
        <li><a style="padding: 0.5rem 1rem 0.5rem 1rem" class="dropdown-item" href="#">Wishlist</a></li>
        <li><a style="padding: 0.5rem 1rem 0.5rem 1rem" class="dropdown-item" href="#">Buku Saya</a></li>
        <li><a style="padding: 0.5rem 1rem 0.5rem 1rem" class="dropdown-item" href="#">Pesanan Saya</a></li>
        <li>
            <hr class="dropdown-divider" />
        </li>
        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a style="padding: 0.5rem 1rem 0.5rem 1rem" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                    {{ __('Log Out') }}
                </a>
            </form>
        </li>
        @else
        <li><a style="padding: 0.5rem 1rem 0.5rem 1rem" class="dropdown-item" href="#">Login</a></li>
        <li><a style="padding: 0.5rem 1rem 0.5rem 1rem" class="dropdown-item" href="#">Register</a></li>
        @endauth
        </ul>
    </div>
    </div> --}}
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="width: 100%;">
            {{-- <li class="nav-item">
                <a class="nav-link font-custom" href="{{ route('dashboard') }}">Buku Saya</a>
            </li> --}}
            <li class="input-group" style="width: 60%">
                <form action="{{ route('search') }}" method="post">
                    @csrf
                    <div class="input-group" style="width: 100%">
                        <input type="search" name="search" autocomplete="off" id="" class="form-control bg-white px-4 shadow-sm"
                            style="border: none; border-radius: 50px 0 0 50px" placeholder="Cari buku"
                            aria-label="Cari buku" aria-describedby="button-addon2">
                        <button type="submit" class=" btn bg-white shadow-sm m-0 pe-3 text-secondary"
                            style="border-radius: 0 50px 50px 0;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </button>
                    </div>
                </form>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link font-custom" href="{{ route('dashboard') }}">Penulis</a>
            </li> --}}
            {{-- <li class="nav-item">
                <a class="nav-link font-custom" href="{{ route('dashboard') }}">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M20.487 17.14L16.422 13.444C16.2299 13.2693 15.9774 13.1762 15.7178 13.1842C15.4583 13.1922 15.212 13.3008 15.031 13.487L12.638 15.948C12.062 15.838 10.904 15.477 9.71201 14.288C8.52001 13.095 8.15901 11.934 8.05201 11.362L10.511 8.968C10.6974 8.78712 10.8061 8.54082 10.8142 8.2812C10.8222 8.02159 10.7289 7.76904 10.554 7.57699L6.85901 3.51299C6.68405 3.32035 6.44089 3.2035 6.18116 3.18725C5.92143 3.17101 5.66561 3.25665 5.46801 3.42599L3.29801 5.28699C3.12512 5.46051 3.02193 5.69145 3.00801 5.93599C2.99301 6.18599 2.70701 12.108 7.29901 16.702C11.305 20.707 16.323 21 17.705 21C17.907 21 18.031 20.994 18.064 20.992C18.3085 20.9783 18.5393 20.8747 18.712 20.701L20.572 18.53C20.742 18.333 20.8283 18.0774 20.8124 17.8177C20.7965 17.558 20.6798 17.3148 20.487 17.14Z"
                    fill="#38426C" />
            </svg>
            (0351) 1450-39
            </a>
            </li> --}}
        </ul>
        @auth
        <ul class="navbar-nav d-flex align-items-center">
            <li class="nav-item dropdown">
                <a class="nav-link font-custom text-capitalize" style="white-space: nowrap" href="#" id="navbarDropdown"
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ Auth::user()->picture !== '' ? Auth::user()->Avatar : 'https://www.gravatar.com/avatar/e2bf8f75fd55aaff7c9a55b3fb78627c?d=mm&s=150' }}"
                        class="rounded-circle me-2" width="30" height="30" alt="">
                    {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg" style="width: 15rem; font-size: 15px;"
                    aria-labelledby="navbarDropdown">
                    <li><a style="padding: 0.5rem 1rem 0.5rem 1rem" class="dropdown-item"
                            href="{{ route('update.profile') }}">Profile Information</a></li>
                    <li><a style="padding: 0.5rem 1rem 0.5rem 1rem" class="dropdown-item"
                            href="{{ route('change.password') }}">Change Password</a></li>
                    <li><a style="padding: 0.5rem 1rem 0.5rem 1rem" class="dropdown-item"
                            href="{{ route('listwhistlist') }}">Wishlist</a></li>
                    <li><a style="padding: 0.5rem 1rem 0.5rem 1rem" class="dropdown-item"
                            href="{{ route('listmybook') }}">Buku Saya </a></li>

                    @if( Auth::user()->pesanansaya(Auth::user()->id) > 0 )
                    <li><a style="padding: 0.5rem 1rem 0.5rem 1rem" class="dropdown-item"
                            href="{{ route('my.orders') }}">Pesanan Saya</a></li>
                    @endif
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a style="padding: 0.5rem 1rem 0.5rem 1rem" class="dropdown-item"
                                href="{{ route('logout') }}" onclick="event.preventDefault();
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
