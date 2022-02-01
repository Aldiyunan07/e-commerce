@section('swiper')
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
@endsection
@push('swiper')
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: false,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });

</script>
@endpush
<x-app-layout>
    @if ($message = Session::get('success'))
    <div class="fixed-top min-vh-100" style="backdrop-filter: blur(4px); z-index: 9999;">
        <div class="row min-vh-100 align-items-center justify-content-center">
            <div class="col-12 col-lg-5">
                <div class="card card-body border-0 py-4 px-5 text-center shadow-lg">
                    <div class="fw-bold fs-4 mb-3">Terima Kasih Telah Mendaftar</div>
                    <p class="fw-light mb-4">
                        Terima kasih telah mendaftarmenjadi penulis di penerbit di Penerbit Buku Pustaka Aksara. Anda masuk waiting list untuk menerbitkan buku. Segera Customer Care kami akan menghubungi anda untuk konfirmasi dan Penjelasan ulang tentang Penerbit Buku Pustaka Aksara.
                    </p>
                    <a href="{{ route('welcome') }}" class="btn btn-primary">Kembali ke Beranda</a>
                </div>
            </div>
        </div>
    </div>
    @endif
    <x-slot name="header">
        <h1 class="header-primary mb-3" style="font-weight: 800; color: #34364a; font-size: 32px;">
            Daftar Menjadi Penulis
        </h1>
        <p class="fw-light text-dark">
            Lengkapi form yang sudah disediakan dengan baik
        </p>
    </x-slot>
    <div class="container">
        <section>
            <div class="row">
                <x-side-guest />
                <div class="col-12 col-lg-9">
                    <div class="card card-body border-0 shadow-sm p-4">
                        <form action="{{ route('submit.penerbit') }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="nama"> Nama Lengkap <span class="text-danger">*</span> </label>
                                <input type="text" autocomplete="off" name="nama" id="" class="form-control mt-2">
                                @error('nama')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="gelar"> Gelar </label></br>
                                <small> <i> Silahkan masukan jika ada </i></small>
                                <input type="text" name="gelar" id="" autocomplete="off" class="form-control mt-2">
                            </div>
                            <div class="mb-3">
                                <label for="no hp"> No Handphone / Whatsapp <span class="text-danger">*</span> </label>
                                <input type="text" name="whatsapp" id="" autocomplete="off" class="form-control mt-2">
                                @error('whatsapp')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="nama"> Email <span class="text-danger">*</span> </label><br/>
                                <small> <i> Email aktif </i> </small>
                                <input type="email" name="email" id="" autocomplete="off" class="form-control mt-2">
                                @error('email')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="jk"> Jenis Kelamin <span class="text-danger">*</span> </label>
                                <select name="jk" id="" class="form-control mt-2">
                                    <option disabled selected>Pilih Salah Satu</option>
                                    <option value="laki-laki"> Laki Laki </option>
                                    <option value="perempuan"> Perempuan </option>
                                </select>
                                @error('jk')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="nama"> Institusi <span class="text-danger">*</span> </label><br/>
                                <small> <i> Tempat Kerja </i> </small>
                                <input type="text" name="institusi" id="" autocomplete="off" class="form-control mt-2">
                                @error('institusi')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="institusi"> Pekerjaan <span class="text-danger">*</span> </label><br/>
                                <small> <i> Jenis Pekerjaan </i> </small>
                                <select name="job" id="" class="form-control mt-2">
                                    <option disabled selected>Pilih Salah Satu</option>
                                    <option value="Dosen"> Dosen </option>
                                    <option value="Guru"> Guru </option>
                                    <option value="Wirausaha"> Wirausaha </option>
                                    <option value="Pengajar"> Pengajar </option>
                                    <option value="Mahasiswa S2/S3"> Mahasiswa S2/S3 </option>
                                    <option value="Profesi Hukum"> Profesi Hukum </option>
                                    <option value="Perawat"> Perawat </option>
                                    <option value="Dokter Ahli"> Dokter Ahli </option>
                                    <option value="Pejabat"> Pejabat </option>
                                    <option value="Perpolitikan"> Perpolitikan </option>
                                    <option value="Motivator"> Motivator </option>
                                    <option value="Widyaiswara"> Widyaiswara </option>
                                    <option value="lainnya"> Lainnya </option>
                                </select>
                                @error('job')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="institusi"> Lainnya </label><br/>
                                <small> <i> Jenis pekerjaan lain </i> </small>
                                <input type="text" name="lainnya" id="" autocomplete="off" class="form-control mt-2">
                                @error('lainnya')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="judul buku"> Judul Buku <span class="text-danger">*</span> </label><br/>
                                
                                <input type="text" name="judul_buku" id="" autocomplete="off" class="form-control mt-2">
                                @error('judul_buku')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="kode pos"> Kode Pos <span class="text-danger">*</span> </label><br/>
                                <small> <i> Tempat tinggal anda sekarang </i> </small>
                                <input type="number" name="kode_pos" id="" class="form-control mt-2" autocomplete="off">
                                @error('kode_pos')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="jasa"> Jasa yang dipilih <span class="text-danger">*</span> </label>
                                <select name="jasa" id="" class="form-control mt-2">
                                    <option disabled selected> Pilih Salah Satu</option>
                                    <option value="Menerbitkan Buku"> Menerbitkan Buku </option>
                                    <option value="Mencetak Buku"> Mencetak Buku </option>
                                </select>
                                @error('jasa')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="ukuran"> Ukuran Buku <span class="text-danger">*</span> </label>
                                <select name="size" id="" class="form-control mt-2">
                                    <option disabled selected> Pilih Salah Satu </option>
                                    <option value="14 x 20"> A5 (14 x 20) </option>
                                    <option value="15.5 x 23"> Unesco (15.5 x 23) </option>
                                    <option value="18 x 25"> B5 (18 x 25) </option>
                                </select>
                                @error('size')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="ukuran"> Custom Ukuran Buku <span class="text-danger">*</span> </label>
                                <input type="text" autocomplete="off" name="custom" id="" class="form-control">
                                @error('custom')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="jumlah_halaman"> Jumlah Halaman <span class="text-danger">*</span> </label><br/>
                                <small> <i> Jumlah halaman yang ingin dicetak  </i> </small>
                                <input type="number" name="jumlah_halaman" id="" class="form-control mt-2" autocomplete="off">
                                @error('jumlah_halaman')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                Silahkan <b> Cek Kembali </b> data diri anda <br/>
                                <span class="text-danger"> * </span>Apabila data diri yang Anda masukkan sudah benar, silahkan kirimkan ebook yang ingin anda terbitkan ke email <b> penerbitpustakaaksara@gmail.com </b>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg fs-6 mb-3"> Daftar </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    {{-- <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-8">
                <div class="card border-0 shadow-sm">
                    <div class="card-header text-center">
                        <h4>
                            FORM DAFTAR MENJADI PENULIS
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('submit.penerbit') }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="nama"> Nama Lengkap <span class="text-danger">*</span> </label>
                                <input type="text" name="nama" id="" class="form-control mt-2">
                                @error('nama')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="gelar"> Gelar </label></br>
                                <small> <i> Silahkan masukan jika ada </i></small>
                                <input type="text" name="gelar" id="" class="form-control mt-2">
                            </div>
                            <div class="mb-3">
                                <label for="no hp"> No Handphone / Whatsapp <span class="text-danger">*</span> </label>
                                <input type="text" name="whatsapp" id="" class="form-control mt-2">
                                @error('whatsapp')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="nama"> Email <span class="text-danger">*</span> </label><br/>
                                <small> <i> Email aktif </i> </small>
                                <input type="email" name="email" id="" class="form-control mt-2">
                                @error('email')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="usia"> Usia <span class="text-danger">*</span> </label>
                                <select name="usia" id="" class="form-control mt-2">
                                    <option disabled selected>Pilih Salah Satu</option>
                                    <option value="18 - 24"> 18 - 24 </option>
                                    <option value="25 - 34"> 25 - 34 </option>
                                    <option value="35 - 44"> 35 - 44 </option>
                                    <option value="45 - 54"> 45 - 54 </option>
                                    <option value="55 - 64"> 55 - 64 </option>
                                    <option value="65+"> 65+ </option>
                                </select>
                                @error('usia')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="jk"> Jenis Kelamin <span class="text-danger">*</span> </label>
                                <select name="jk" id="" class="form-control mt-2">
                                    <option disabled selected>Pilih Salah Satu</option>
                                    <option value="laki-laki"> Laki Laki </option>
                                    <option value="perempuan"> Perempuan </option>
                                </select>
                                @error('jk')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="nama"> Institusi <span class="text-danger">*</span> </label><br/>
                                <small> <i> Tempat Kerja </i> </small>
                                <input type="text" name="institusi" id="" class="form-control mt-2">
                                @error('institusi')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="institusi"> Pekerjaan <span class="text-danger">*</span> </label><br/>
                                <small> <i> Jenis Pekerjaan </i> </small>
                                <select name="job" id="" class="form-control mt-2">
                                    <option disabled selected>Pilih Salah Satu</option>
                                    <option value="Dosen"> Dosen </option>
                                    <option value="Guru"> Guru </option>
                                    <option value="Wirausaha"> Wirausaha </option>
                                    <option value="Pengajar"> Pengajar </option>
                                    <option value="Mahasiswa S2/S3"> Mahasiswa S2/S3 </option>
                                    <option value="Profesi Hukum"> Profesi Hukum </option>
                                    <option value="Perawat"> Perawat </option>
                                    <option value="Dokter Ahli"> Dokter Ahli </option>
                                    <option value="Pejabat"> Pejabat </option>
                                    <option value="Perpolitikan"> Perpolitikan </option>
                                    <option value="Motivator"> Motivator </option>
                                    <option value="Widyaiswara"> Widyaiswara </option>
                                    <option value="lainnya"> Lainnya </option>
                                </select>
                                @error('job')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="institusi"> Lainnya </label><br/>
                                <small> <i> Jenis pekerjaan lain </i> </small>
                                <input type="text" name="lainnya" id="" class="form-control mt-2">
                                @error('lainnya')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="judul buku"> Judul Buku <span class="text-danger">*</span> </label><br/>
                                
                                <input type="text" name="judul_buku" id="" class="form-control mt-2">
                                @error('judul_buku')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="judul buku"> Upload File Buku <span class="text-danger">*</span> </label><br/>
                                
                                <input type="file" name="file" id="" class="form-control mt-2">
                                @error('file')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="kode pos"> Kode Pos <span class="text-danger">*</span> </label><br/>
                                <small> <i> Tempat tinggal anda sekarang </i> </small>
                                <input type="number" name="kode_pos" id="" class="form-control mt-2">
                                @error('kode_pos')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="jasa"> Jasa yang dipilih <span class="text-danger">*</span> </label>
                                <select name="jasa" id="" class="form-control mt-2">
                                    <option disabled selected> Pilih Salah Satu</option>
                                    <option value="Menerbitkan Buku"> Menerbitkan Buku </option>
                                    <option value="Mencetak Buku"> Mencetak Buku </option>
                                </select>
                                @error('jasa')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="ukuran"> Ukuran Buku <span class="text-danger">*</span> </label>
                                <select name="ukuran" id="" class="form-control mt-2">
                                    <option disabled selected> Pilih Salah Satu </option>
                                    <option value="A5"> A5 (14 x 20) </option>
                                    <option value="Unesco"> Unesco (15.5 x 23) </option>
                                    <option value="B5"> B5 (18 x 25) </option>
                                </select>
                                @error('ukuran')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="jumlah_halaman"> Jumlah Halaman <span class="text-danger">*</span> </label><br/>
                                <small> <i> Jumlah halaman yang ingin dicetak  </i> </small>
                                <input type="number" name="jumlah_halaman" id="" class="form-control mt-2">
                                @error('jumlah_halaman')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="jumlah_halaman"> Jumlah Cetakan <span class="text-danger">*</span> </label><br/>
                                <small> <i> Jumlah etakan yang ingin dicetakan </i> </small>
                                <input type="number" name="jumlah_cetakan" id="" class="form-control mt-2">
                                @error('jumlah_cetakan')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                Silahkan <b> Cek Kembali </b> data diri anda <br/>
                                Apabila data diri yang Anda masukkan sudah benar, silahkan Anda <b> KLIK TOMBOL DAFTAR </b> di bawah ini.
                            </div>
                            <button type="submit" class="btn btn-danger mb-3"> Daftar </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</x-app-layout>
