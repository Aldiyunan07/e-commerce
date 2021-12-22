<nav class="navbar navbar-expand-lg navbar-light bg-transparent">
    <div class="container-fluid mx-50">
        <a class="navbar-brand font-logo d-flex align-items-center justify-content-start"
            style="margin-right: 8rem; width:8rem;" href="/">
            <img src="{{asset('/image/mini-logo.png')}}" alt="" width="40" height="40" class="me-1">
            <span
                style="background: -webkit-linear-gradient(90.87deg, #365AA3 6.64%, #4370CD 100%);-webkit-background-clip: text; -webkit-text-fill-color: transparent;">
                Pustaka Aksara
            </span>
        </a>
        @guest
        <div class="d-lg-none">
            <div class="dropdown">
                <a href="#" class="btn btn-link text-dark" role="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-list fs-4"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end border-0 shadow mt-2" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                    <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                </ul>
            </div>
        </div>
        @endguest
        @auth
        <div class="d-lg-none">
            <a class="navbar-toggler-icon" data-bs-toggle="offcanvas" href="#offcanvasBottom" role="button"
                aria-controls="offcanvasBottom"></a>
            <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="offcanvasBottom"
                aria-labelledby="offcanvasBottomLabel">
                <div class="offcanvas-header border-bottom py-3">
                    <h5 class="offcanvas-title text-dark fs-6" id="offcanvasBottomLabel">Menu Utama</h5>
                    <a role="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></a>
                </div>
                <div class="offcanvas-body small px-3 py-0">
                    <div class="border-bottom py-3">
                        <div class="row">
                            <div class="col-2 col-sm-2 col-md-1 col-lg-1">
                                <img src="{{ Auth::user()->Avatar }}" class="rounded-circle" width="50" height="50"
                                    alt="">
                            </div>
                            <div class="col-8 col-sm-8 col-md-10 col-lg-10">
                                <div class="fw-bold fs-5">{{ Auth::user()->name }}</div>
                                <div class="text-secondary small">{{ Auth::user()->email }}</div>
                            </div>
                            <div class="col-2 col-sm-2 col-md-1 col-lg-1">
                                <a href="{{ route('update.profile') }}" class="text-decoration-none text-dark">
                                    <i class="bi bi-gear fs-3"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="pt-3">
                        <span class="fw-bold small d-block">
                            Aktivitas saya
                        </span>
                        <div class="my-3">
                            @if( Auth::user()->pesanansaya(Auth::user()->id) > 0 )
                            <a href="{{ route('my.orders') }}"
                                class="text-decoration-none text-dark d-flex align-items-center mb-2"
                                style="column-gap: 0.7rem">
                                <i class="bi bi-receipt d-flex-shrink-0 fs-5"></i>
                                <span class="fs-6"> Daftar Pesanan </span>
                            </a>
                            @endif
                            <a href="{{ route('listwhistlist') }}"
                                class="text-decoration-none text-dark d-flex align-items-center mb-2"
                                style="column-gap: 0.7rem">
                                <i class="bi bi-heart d-flex-shrink-0 fs-5"></i>
                                <span class="fs-6"> Wishlist </span>
                            </a>
                            <a href="#" class="text-decoration-none text-dark d-flex align-items-center mb-2"
                                style="column-gap: 0.7rem">
                                <i class="bi bi-star d-flex-shrink-0 fs-5"></i>
                                <span class="fs-6"> Ulasan </span>
                            </a>
                            <a href="{{ route('listmybook') }}"
                                class="text-decoration-none text-dark d-flex align-items-center mb-2"
                                style="column-gap: 0.7rem">
                                <i class="bi bi-journal-bookmark d-flex-shrink-0 fs-5"></i>
                                <span class="fs-6"> Buku saya </span>
                            </a>

                        </div>
                    </div>
                    <div class="border-bottom pt-3">
                        <span class="fw-bold small d-block">
                            Pengaturan Akun
                        </span>
                        <div class="my-3">
                            <a href="#" class="text-decoration-none text-dark d-flex align-items-center mb-2"
                                style="column-gap: 0.7rem">
                                <i class="bi bi-person d-flex-shrink-0 fs-5"></i>
                                <span class="fs-6"> Informasi Profil </span>
                            </a>
                            <a href="#" class="text-decoration-none text-dark d-flex align-items-center mb-2"
                                style="column-gap: 0.7rem">
                                <i class="bi bi-key d-flex-shrink-0 fs-5"></i>
                                <span class="fs-6"> Ganti Password </span>
                            </a>

                        </div>
                    </div>
                    <div class="pt-3">
                        <a href="#" class="text-decoration-none text-dark d-flex align-items-center mb2"
                            style="column-gap: 0.7rem">
                            <i class="bi bi-box-arrow-right d-flex-shrink-0 fs-5 text-danger"></i>
                            <span class="fs-6 text-danger"> Keluar </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endauth
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="width: 100%;">
                <li class="input-group" style="width: 60%">
                    <form action="{{ route('search') }}" method="post">
                        @csrf
                        <div class="input-group" style="width: 100%">
                            <input type="search" name="search" autocomplete="off" id=""
                                class="form-control bg-white px-4 shadow-sm"
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
            </ul>
            @auth
            <ul class="navbar-nav d-flex align-items-center">
                <li class="nav-item dropdown">
                    <a class="nav-link font-custom text-capitalize" style="white-space: nowrap" href="#"
                        id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ Auth::user()->picture !== '' ? Auth::user()->Avatar : 'https://ecs7.tokopedia.net/img/cache/300/default_picture_user/default_toped-14.jpg' }}"
                            class="rounded-circle me-2" width="30" height="30" alt="">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg"
                        style="width: 15rem; font-size: 15px;" aria-labelledby="navbarDropdown">
                        <li>
                            <a style="padding: 0.5rem 1rem 0.5rem 1rem d-flex align-items-center" class="dropdown-item"
                                href="{{ route('update.profile') }}">
                                <i class="bi bi-person d-flex-shrink-0 fs-5"></i>
                                <span class="ms-2">
                                    Profile Information
                                </span>
                            </a>
                        </li>
                        <li>
                            <a style="padding: 0.5rem 1rem 0.5rem 1rem d-flex align-items-center" class="dropdown-item"
                                href="{{ route('change.password') }}">
                                <i class="bi bi-key d-flex-shrink-0 fs-5"></i>
                                <span class="ms-2">
                                    Change Password
                                </span>
                            </a>
                        </li>
                        <li>
                            <a style="padding: 0.5rem 1rem 0.5rem 1rem" class="dropdown-item"
                                href="{{ route('listwhistlist') }}">
                                <i class="bi bi-heart d-flex-shrink-0 fs-5"></i>
                                <span class="ms-2">
                                    Wishlist
                                </span>
                            </a>
                        </li>
                        <li>
                            <a style="padding: 0.5rem 1rem 0.5rem 1rem" class="dropdown-item"
                                href="{{ route('listmybook') }}">
                                <i class="bi bi-journal-bookmark d-flex-shrink-0 fs-5"></i>
                                <span class="ms-2">
                                    Buku Saya
                                </span>
                            </a>
                        </li>
                        @if( Auth::user()->pesanansaya(Auth::user()->id) > 0 )
                        <li>
                            <a style="padding: 0.5rem 1rem 0.5rem 1rem" class="dropdown-item"
                                href="{{ route('my.orders') }}">
                                <i class="bi bi-receipt d-flex-shrink-0 fs-5"></i>
                                <span class="ms-2">
                                    Daftar Pesanan
                                </span>
                            </a>
                        </li>
                        @endif
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a style="padding: 0.5rem 1rem 0.5rem 1rem " class="dropdown-item text-danger"
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    <i class="bi bi-box-arrow-right d-flex-shrink-0 fs-5"></i>
                                    <span class="ms-2">
                                        Log Out
                                    </span>
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
