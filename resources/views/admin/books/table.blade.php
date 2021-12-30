<x-admin-layout>
    @section('content')
    <x-header title="List Buku" description="Disini anda dapat melihat semua list buku.">
        
    </x-header>
    <div class="card border-0 shadow mb-4">
        <div class="card-body">
            <div class="table-responsive" style="min-height: 250px">
                <table class="table table-centered table-nowrap mb-0 rounded">
                    <thead class="thead-light">
                        <tr>
                            <th class="border-0 rounded-start">#</th>
                            <th class="border-0">Judul Buku</th>
                            <th class="border-0">Penjual</th>
                            <th class="border-0">Harga</th>
                            <th class="border-0">Status</th>
                            <th class="border-0 rounded-end">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($buku as $n => $b)
                        <tr>
                            <td> {{ $n + 1 }} </td>
                            <td> <a href="{{ route('admin.book.show', $b->id) }}" class="text-info">{{ $b->name }}</a></td>
                            <td> {{ $b->penjual->name }} </td>
                            <td> {{ $b->rupiah($b->harga_asli) }} </td>
                            <td>
                                @if($b->status == "terima")
                                    <div class="badge bg-info"> Terima </div>
                                @elseif($b->status == "proses")
                                    <div class="badge bg-success"> Proses </div>
                                @else
                                    <div class="badge bg-danger"> Tolak </div>
                                @endif
                            
                            </td>
                            <td class="text-end">
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="{{ route('admin.book.edit',$b->id) }}">Edit</a>
                                        </li>
                                        <li><a class="dropdown-item text-danger" role="button" data-bs-toggle="modal"
                                                data-bs-target="#modal{{ $b->id }}">Delete</a>

                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <div class="modal fade" id="modal{{ $b->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="modal-default" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="d-flex flex-nowrap justify-content-center align-items-center">
                                            <i class="bi bi-question-circle" style="font-size: 100px"></i>
                                        </div>
                                        <div class="d-block text-center">
                                            Apakah anda yakin ingin menghapus {{ $b->name }} ?
                                        </div>
                                        <div class="d-flex justify-content-center align-items-center my-4"
                                            style="column-gap: 5px">
                                            <form action="{{ route('admin.book.delete',$b->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <div>
                                                    <button type="submit"
                                                        class="btn btn-success text-white">Iya</button>
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
                <div
            class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
            {{ $buku->links() }}
            <!-- <div class="fw-normal small mt-4 mt-lg-0">Showing <b>5</b> out of <b>25</b> entries</div> -->
        </div>
            </div>
        </div>
    </div>
    @endsection
</x-admin-layout>
