<x-app-layout>
    <x-slot name="header">
        <h2> Beli Sekarang </h2>
    </x-slot>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td rowspan="4"> <img src="{{ $buku->Picture }}" width="100" alt=""> </td>
                                <td> Nama Buku </td>
                                <td> {{ $buku->name }} </td>
                            </tr>
                            <tr>
                                <td> Penulis </td>
                                <td> {{ $buku->penulis }} </td>
                            </tr>
                            <tr>
                                <td> Harga </td>
                                <td> {{ $buku->rupiah($buku->harga_asli) }} </td>
                            </tr>
                            <tr>
                                <td> Kategori </td>
                                <td> {{ $buku->kategori->kategori }} </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href="{{ route('dashboard') }}" class="btn btn-danger"> Batal </a>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"> Beli Sekarang </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Pemberitahuan </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Apakah anda sudah melakukan transfer?
                                                </div>
                                                <form action="{{ route('buynow',$buku->id) }}" method="post">
                                                    @csrf
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">Belum</button>
                                                        <button type="submit" class="btn btn-primary">Sudah</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h6>
                            Transfer Pembayaran
                        </h6>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <td> Nomor BCA (PT. ALIM RUGI) </td>
                                <td> : 98263498364932864 </td>
                            </tr>
                            <tr>
                                <td> Nomor BNI (PT. ALIM RUGI) </td>
                                <td> : 98263498364932864 </td>
                            </tr>
                            <tr>
                                <td> Nomor BRI (PT. ALIM RUGI) </td>
                                <td> : 98263498364932864 </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
