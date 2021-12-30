<nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
    <div class="container-fluid px-0">
        <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
            <div class="d-flex align-items-center">
                <!-- Search form -->
                <!-- / Search form -->
            </div>
            <!-- Navbar links -->
            <ul class="navbar-nav align-items-center">
                <li class="nav-item dropdown ms-lg-3">
                    <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <div class="media d-flex align-items-center">
                            <img class="avatar rounded-circle" alt="Image placeholder"
                                src="{{ asset('image/avatar.png') }}">
                            <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                                <span class="mb-0 font-small fw-bold text-gray-900">{{ Auth::guard('admin')->user()->name  }} </span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.profile') }}">
                            <i class="bi bi-person-circle me-3"></i>
                            Update Profile
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('admin.profile') }}#change-password">
                            <i class="bi bi-key me-3"></i>
                            Change Password
                        </a>
                        <div role="separator" class="dropdown-divider my-1"></div>
                        <form action="{{ route('admin.logout') }}" method="post">
                            @csrf
                            <a class="dropdown-item d-flex align-items-center" href="#" onclick="event.preventDefault(); this.closest('form').submit();">
                                <i class="bi bi-box-arrow-left me-3 text-danger"></i>
                                Logout
                            </a>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
