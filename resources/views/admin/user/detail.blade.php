<x-admin-layout>
    @section('content')
    <div class="py-4">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="#">
                        <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="#">Data Akun</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail User</li>
            </ol>
        </nav>
        <!-- <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Akun Penjual</h1>
                <p class="mb-0">Dozens of reusable components built to provide buttons, alerts, popovers, and more.</p>
            </div>
        </div> -->
    </div>

    <div class="row">
        <div class="col-12 col-xl-8">
            <div class="card border-0 shadow mb-3">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h5> Detail User </h5>
                        <a href="{{ route('admin.listuser') }}" class="btn text-white btn-success btn-sm"> Kembali </a>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div>
                                    <label for="first_name">Nama</label>
                                    <input class="form-control" value="{{ $user->name }}" disabled id="first_name" type="text" placeholder="Enter your first name" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div>
                                    <label for="last_name">Email</label>
                                    <input class="form-control" value="{{ $user->email }}" disabled id="last_name" type="text" placeholder="Also your last name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="email">Profesi</label>
                                    <input class="form-control" value="{{ $user->profesi }}" disabled id="email" placeholder="*Belum diisi" type="email"  required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="phone">Alamat</label>
                                    <input class="form-control" value="{{ $user->alamat }}" id="phone" type="text" disabled placeholder="*Belum diisi" required>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-4">
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="card shadow border-0 text-center p-0">
                        <div class="profile-cover rounded-top" data-background="{{ asset('admin/assets/img/profile-cover.jpg') }}"></div>
                        <div class="card-body pb-5">
                            <img src="{{ asset('admin/assets/img/team/profile-picture-1.jpg') }}" class="avatar-xl rounded-circle mx-auto mt-n7 mb-4" alt="Neil Portrait">
                            <h4 class="h3">{{ $user->name }}</h4>
                            <h5 class="fw-normal">{{ $user->profesi }} </h5>
                            <p class="text-gray mb-4">{{ $user->alamat }}</p>
                            <a class="btn btn-sm btn-gray-800 d-inline-flex align-items-center me-2" href="#">
                                <svg class="icon icon-xs me-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path></svg>
                                Connect
                            </a>
                            <a class="btn btn-sm btn-secondary" href="#">Send Message</a>
                        </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</x-admin-layout>