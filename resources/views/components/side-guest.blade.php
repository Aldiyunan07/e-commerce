<div class="col-lg-3 sidebar">
    <ul class="list-group shadow-sm py-2 bg-white sticky-top">
        <li class="list-group-item border-0 py-3 px-4">
            <a href="{{ route('update.profile') }}" class="text-dark text-decoration-none d-flex align-items-center">
                <i class="bi bi-book d-flex-shrink-0 fs-5"></i>
                <span class="ms-2">
                    Daftar Menerbitkan
                </span>
            </a>
        </li>
        <li class="list-group-item border-0 py-3 px-4">
            <a href="{{ '#' }}" class="text-dark text-decoration-none d-flex align-items-center">
                <i class="bi bi-search d-flex-shrink-0 fs-5"></i>
                <span class="ms-2">
                    Cek Progress
                </span>
            </a>
        </li>
        @auth
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
        @endauth
    </ul>
</div>