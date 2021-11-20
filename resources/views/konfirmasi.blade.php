<x-app-layout>
    <x-slot name="header" >
        <h2> Tunggu Konfirmasi </h2>
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
                        </table>
                        *Pembelian anda sedang kami proses. Moho ditunggu konfirmasi dari pihak toko nya. Jika anda tidak sabar, Silahkan hubungi penjual buku nya <a target="_blank" href="https://wa.me/{{ $buku->penjual->whatsapp }}?text=Hallo+saya+sudah+membeli+buku+{{ $buku->name }}+mohon+di+konfirmasi+secepatnya" > klik disini </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>