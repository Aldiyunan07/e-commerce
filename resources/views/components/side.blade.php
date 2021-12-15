<div class="col-lg-3">
    <ul class="list-group shadow-sm py-3 bg-white mb-3">
        <li class="list-group-item border-0 py-3 px-4"><a href="{{ route('update.profile') }}" class="text-dark text-decoration-none">Profile Information</a></li>
        <li class="list-group-item border-0 py-3 px-4"><a href="{{ route('change.password') }}" class="text-dark text-decoration-none">Change Password</a></li>
        <li class="list-group-item border-0 py-3 px-4"><a href="{{ route('listwhistlist') }}" class="text-dark text-decoration-none">Wishlist</a></li>
        <li class="list-group-item border-0 py-3 px-4"><a href="{{ route('my.orders') }}" class="text-dark text-decoration-none">Pesanan Saya</a></li>
        <li class="list-group-item border-0 py-3 px-4">
        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="text-danger text-decoration-none"href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
        </li>
    </ul>
</div>