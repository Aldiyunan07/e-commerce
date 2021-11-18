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
                <li class="breadcrumb-item"><a href="#">Toko saya</a></li>
            </ol>
        </nav>
    </div>
    <div class="card border-0 shadow mb-4">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h1 class="h4">Toko Saya</h1>
                <a href="{{ route('penjual.tambahbuku') }}" class="btn text-white btn-sm btn-success"> Tambah Buku Baru </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap  mb-0 rounded">
                    <thead class="text-white bg-primary">
                        <tr>
                            <th class="border-0 rounded-start">#</th>
                            <th class="border-0">Thumbnail</th>
                            <th class="border-0">Nama</th>
                            <th class="border-0">Harga</th>
                            <th class="border-0">Terjual</th>
                            <th class="border-0">Di Buat Pada</th>
                            <th class="border-0 rounded-end">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($buku as $n => $b)
                        <tr>
                            <td> {{ $n + 1 }} </td>
                            <td> <img src="{{ $b->Picture }}" width="100" class="img-alt">  </td>
                            <td> {{ $b->name }} </td>
                            <td> {{ $b->rupiah($b->harga_asli) }} </td>
                            <td> 2 Buku </td>
                            <td> {{ $b->created_at->format('d F, Y') }} </td>
                            <td>
                                <a href="{{ route('penjual.editbuku',$b) }}" class="btn btn-info btn-sm"> Edit </a>
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal{{$b->id}}">Hapus</button>
                                    <div class="modal fade" id="modal{{ $b->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h2 class="h6 modal-title">Hapus Buku ?</h2>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p> Apakah anda yakin ingin menghapus buku {{ $b->name }} ? </p>
                                                </div>
                                                <form action="{{ route('penjual.deletebuku',$b->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-sm btn-info" data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection
</x-penjual-layout>