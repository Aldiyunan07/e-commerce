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
                <li class="breadcrumb-item"><a href="{{ route('admin.penerbit') }}">List Penerbit</a></li>
                <li class="breadcrumb-item"><a href="#">Detail Penerbit</a></li>
            </ol>
        </nav>
    </div>
    <div class="card border-0 shadow mb-4">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h1 class="h4">Detail Penerbit</h1>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-4 d-flex justify-content-center text-center" >
                    <div class="img mt-3">
                        <img src="{{ $penerbit->gravatar() }}" class="rounded-circle alt="">                        
                        <h5 class="mt-2"> {{ $penerbit->nama }} </h5>
                        <h6 class="mt-2"> {{ $penerbit->email }} </h6>
                        <a href="mailto:{{ $penerbit->email }}" class="btn btn-success mt-2 text-white"> Kirim Review Balasan</a> <br/>
                    </div>
                </div>
                <div class="col-4">
                    <div class="">
                        <label for=""> Nama Lengkap </label>
                        <h6> {{ $penerbit->nama }},{{ $penerbit->gelar }} </h6>
                    </div>

                    <div class="mt-3">
                        <label for=""> Jenis Kelamin </label>
                        <h6> {{ ucfirst($penerbit->jk) }} </h6>
                    </div>

                    <div>
                        <label for=""> Status </label>
                        <h6> {{ ucfirst($penerbit->status) }} </h6>
                    </div>
                    <div class="mt-3">
                        <label for=""> Judul Buku </label>
                        <h6> {{ $penerbit->judul_buku }} </h6>
                    </div>

                    <div class="mt-3">
                        <label for=""> Tempat Kerja </label>
                        <h6> {{ $penerbit->institusi }} </h6>
                    </div>

                    <div class="mt-3">
                        <label for=""> Jasa </label>
                        <h6> {{ $penerbit->jasa }} </h6>
                    </div>

                </div>
                <div class="col-4">

                <div class="mt-3">
                        <label for=""> No Telepon / Whatsapp </label>
                        <h6> {{ $penerbit->no_hp }} </h6>
                    </div>
                    


                    <div class="mt-3">
                        <label for=""> Pekerjaan </label>
                        <h6> {{ $penerbit->pekerjaan }} </h6>
                    </div>

                    <div class="mt-3">
                        <label for=""> Kode Pos </label>
                        <h6> {{ $penerbit->kode_pos }} </h6>
                    </div>
                    <div class="mt-3">
                        <label for=""> Ukuran </label>
                        <h6> {{ $penerbit->ukuran }} CM </h6>
                    </div>

                    <div class="mt-3">
                        <label for=""> Jumlah Halaman </label>
                        <h6> {{ $penerbit->jumlah_halaman }} Halaman </h6>
                    </div>

                </div>

            </div>
        </div>
    </div>
    @endsection
</x-admin-layout>
