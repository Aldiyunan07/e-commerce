<x-admin-layout>
    @section('content')
    <x-header title="List Kategori" description="Disini anda dapat melihat semua kategori.">
        <a role="button" data-bs-toggle="modal" data-bs-target="#create"
            class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                </path>
            </svg>
            Tambah Kategori
        </a>
        <!-- Modal Content -->
        <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="modal-default"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form method="post" action="{{ route('admin.categories.insert') }}">
                        @csrf
                        <div class="modal-header">
                            <h2 class="h6 modal-title">Tambah Kategori</h2>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="kategori" class="form-label">Kategori</label>
                                <input type="text" class="form-control" id="kategori" name="kategori"
                                    placeholder="Masukan Nama Kategori" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info">Tambah</button>
                            <button type="button" class="btn btn-danger ms-auto"
                                data-bs-dismiss="modal">Kembali</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </x-header>
    <div class="card">
        <div class="card-body">
            <table class="table table-centered table-nowrap mb-0 rounded">
                <thead class="thead-light">
                    <tr>
                        <th class="border-0 rounded-start">#</th>
                        <th class="border-0">Nama Kategori</th>
                        <th class="border-0">Dipakai</th>
                        <th class="border-0">Dibuat sejak</th>
                        <th class="border-0 rounded-end text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kategori as $n => $k)
                    <tr>
                        <td>{{ $n + 1 }}</td>
                        <td>{{ $k->kategori }}</td>
                        <td>{{ $k->buku->count() }}</td>
                        <td>{{ $k->created_at->format('d F, Y') }}</td>
                        <td class="text-end">
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                    <li>
                                        <a class="dropdown-item" role="button"  data-bs-toggle="modal" data-bs-target="#update{{ $k->id }}">Edit</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-danger" role="button" data-bs-toggle="modal" data-bs-target="#delete{{ $k->id }}">Delete</a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <!-- Edit Content -->
                    <div class="modal fade" id="update{{ $k->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-default"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <form method="post" action="{{ route('admin.categories.update',$k->id) }}">
                                    @csrf 
                                    @method('patch')
                                    <div class="modal-header">
                                        <h2 class="h6 modal-title">Edit Kategori</h2>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="kategori" class="form-label">Kategori</label>
                                            <input type="text" class="form-control" id="kategori"
                                                placeholder="Masukan Nama Kategori" name="kategori" value="{{ $k->kategori }}" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-info">Update</button>
                                        <button type="button" class="btn btn-danger ms-auto"
                                            data-bs-dismiss="modal">Kembali</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="delete{{ $k->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-default"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="d-flex flex-nowrap justify-content-center align-items-center">
                                        <i class="bi bi-question-circle" style="font-size: 100px"></i>
                                    </div>
                                    <div class="d-block text-center">
                                        Apakah anda yakin ingin menghapus kategori {{ $k->kategori }} ?
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center my-4"
                                        style="column-gap: 5px">
                                        <form action="{{ route('admin.categories.delete',$k->id) }}" method="post">
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
                    <!-- Modal Content -->
                </tbody>
            </table>
        </div>
    </div>
    @endsection
</x-admin-layout>
