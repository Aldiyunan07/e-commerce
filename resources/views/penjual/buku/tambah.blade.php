<x-penjual-layout>
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
                <li class="breadcrumb-item"><a href="#">Toko Saya</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Buku</li>
            </ol>
        </nav>
    </div>
    <div class="card border-0 shadow mb-4">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h1 class="h4">Tambah Buku</h1>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('penjual.insertbuku') }}" enctype="multipart/form-data" method="post">
                @csrf
                @include('penjual.buku.form_control')
                <a href="{{ route('penjual.listbuku') }}" class="btn btn-danger btn-sm mt-3"> Kembali </a>
                <button type="submit" class="btn btn-info btn-sm mt-3"> Simpan </button>
            </form>
        </div>
    </div>
    @endsection
</x-penjual-layout>
