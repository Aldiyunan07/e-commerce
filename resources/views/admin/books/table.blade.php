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
                            <th class="border-0">Thumbnail</th>
                            <th class="border-0">Nama</th>
                            <th class="border-0">Penjual</th>
                            <th class="border-0">Harga</th>
                            <th class="border-0">Di Buat Pada</th>
                            <th class="border-0 rounded-end">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($buku as $n => $b)
                        <tr>
                            <td> {{ $n + 1 }} </td>
                            <td> <img src="{{ $b->Picture }}" width="100" class="img-alt"> </td>
                            <td> {{ $b->name }} </td>
                            <td> {{ $b->penjual->name }} </td>
                            <td> {{ $b->rupiah($b->harga_asli) }} </td>
                            <td> {{ $b->created_at->format('d F, Y') }} </td>
                            <td class="text-end">
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-three-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item"
                                                href="{{ route('admin.book.show',$b->id) }}">Detail</a>
                                        </li>
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
            </div>
        </div>
    </div>
    @endsection
</x-admin-layout>
