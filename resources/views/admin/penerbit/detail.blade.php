div<x-admin-layout>
    @section('content')
    <div class="py-4">
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
                        <a href="mailto:{{ $penerbit->email }}" class="btn btn-info btn-sm mt-2 text-white"> Lihat Buku</a>
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

                    <div class="mt-3">
                        <label for=""> No Telepon / Whatsapp </label>
                        <h6> {{ $penerbit->no_hp }} </h6>
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
                    <div>
                        <label for=""> Email </label>
                        <h6> {{ $penerbit->email }} </h6>
                    </div>

                    <div class="mt-3">
                        <label for=""> Usia </label>
                        <h6> {{ $penerbit->usia }} Tahun </h6>
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
                        <label for=""> Jumlah Cetakan </label>
                        <h6> {{ $penerbit->jumlah_cetakan }} Cetak </h6>
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
