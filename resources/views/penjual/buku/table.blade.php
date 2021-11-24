<x-penjual-layout>
    @section('content')
    <x-breadcrumb links="{{ route('penjual.dashboard') }}">
        <li class="breadcrumb-item">Toko saya</li>
    </x-breadcrumb>
    <x-header title="Toko Saya" description="">
        <a href="{{ route('penjual.tambahbuku') }}" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                </path>
            </svg>
            Tambah Buku
        </a>
    </x-header>
    <div class="card border-0 shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap  mb-0 rounded">
                    <thead class="thead-light">
                        <tr>
                            <th class="border-0 rounded-start">#</th>
                            <th class="border-0">Judul Buku</th>
                            <th class="border-0">Status</th>
                            <th class="border-0">Harga</th>
                            <th class="border-0">Di Buat Pada</th>
                            <th class="border-0 rounded-end text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($buku as $n => $b)
                        <tr>
                            <td> {{ $n + 1 }} </td>
                            <td> 
                                <a href="{{ route('penjual.listbuku.show', $b->id) }}" class="text-info">
                                    {{ $b->name }}
                                </a>
                            </td>
                            <td>
                            @if($b->status == "proses")
                            <div class="badge bg-info badge-sm"> Proses </div>
                            @elseif($b->status == "tolak")
                            <div class="badge bg-danger badge-sm"> Tolak </div>
                            
                            @else
                            <div class="badge bg-success badge-sm"> Terima </div>
                            @endif    
                            </td>
                            <td> {{ $b->rupiah($b->harga_asli) }} </td>
                            <td> {{ $b->created_at->format('d F, Y') }} </td>
                            <td class="text-end">
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="{{ route('penjual.editbuku',$b) }}">Edit</a></li>
                                    <li><a class="dropdown-item text-danger" role="button" data-bs-toggle="modal" data-bs-target="#modal{{ $b->id }}">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal Content -->
                        <div class="modal fade" id="modal{{ $b->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="modal-default" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="d-flex flex-nowrap justify-content-center align-items-center">
                                            <i class="bi bi-question-circle" style="font-size: 100px"></i>
                                        </div>
                                        <div class="d-block text-center">
                                            Apakah anda yakin ingin menghapus buku {{ $b->name }} ? 
                                        </div>
                                        <div class="d-flex justify-content-center align-items-center my-4"
                                            style="column-gap: 5px">
                                            <form action="{{ route('penjual.deletebuku',$b->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <div>
                                                    <button type="submit" class="btn btn-success text-white">Iya</button>
                                                </div>
                                            </form>
                                            <div>
                                                <button type="button" class="btn btn-danger"
                                                    data-bs-dismiss="modal">Tidak</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection
</x-penjual-layout>