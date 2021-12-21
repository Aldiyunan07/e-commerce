<div class="col-lg-3 sidebar">
    <ul class="list-group shadow-sm py-3 bg-white sticky-top">
        <li class="list-group-item border-0 py-3 px-4">
            <a href="{{ route('update.profile') }}" class="text-dark text-decoration-none d-flex align-items-center">
                <i class="bi bi-person d-flex-shrink-0 fs-5"></i>
                <span class="ms-2">
                    Profile Information
                </span>
            </a>
        </li>
        <li class="list-group-item border-0 py-3 px-4">
            <a href="{{ route('change.password') }}" class="text-dark text-decoration-none d-flex align-items-center">
                <i class="bi bi-key d-flex-shrink-0 fs-5"></i>
                <span class="ms-2">
                    Change Password
                </span>
            </a>
        </li>
        <li class="list-group-item border-0 py-3 px-4">
            <a href="{{ route('listwhistlist') }}" class="text-dark text-decoration-none d-flex align-items-center">
                <i class="bi bi-heart d-flex-shrink-0 fs-5"></i>
                <span class="ms-2">
                    Wishlist
                </span>
            </a>
        </li>
        <li class="list-group-item border-0 py-3 px-4">
            <a href="{{ route('my.orders') }}" class="text-dark text-decoration-none d-flex align-items-center">
                <i class="bi bi-receipt d-flex-shrink-0 fs-5"></i>
                <span class="ms-2">
                    Daftar Pesanan
                </span>
            </a>
        </li>
        <li class="list-group-item border-0 py-3 px-4">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="text-danger text-decoration-none d-flex align-items-center" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                    <i class="bi bi-box-arrow-right d-flex-shrink-0 fs-5 text-danger"></i>
                    <span class="ms-2">
                        Log Out
                    </span>
                </a>
            </form>
        </li>
    </ul>
</div>