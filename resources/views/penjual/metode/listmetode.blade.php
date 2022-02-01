<x-penjual-layout>
    @section('content')
    <x-header title="Metode Pembayaran" description="Disini anda dapat melihat Metode Pembayaran anda.">
        <a role="button" data-bs-toggle="modal" data-bs-target="#create"
            class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                </path>
            </svg>
            Tambah 
        </a>
        <!-- Modal Content -->
        <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="modal-default"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="get" action="{{ route('penjual.tambahmetode') }}">
                        @csrf
                        <div class="modal-header">
                            <h2 class="h6 modal-title">Tambah Metode Pembayaran</h2>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="kategori" class="form-label">E-Wallet</label>
                                <select name="wallet" id="" class="form-control">
                                    <option disabled selected> Pilih E-Wallet </option>
                                    <option value="dana"> DANA </option>
                                    <option value="gopay"> GOPAY </option>
                                    <option value="ovo"> OVO </option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="kategori" class="form-label">Number</label>
                                <input type="text" autocomplete="off" name="number" id="" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger "
                                data-bs-dismiss="modal">Kembali</button>
                            <button type="submit" class="btn ms-auto btn-info">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </x-header>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap mb-0 rounded">
                    <thead class="thead-light">
                        <tr>
                            <th class="border-0 rounded-start">#</th>
                            <th class="border-0">Thumbnail</th>
                            <th class="border-0">E-Wallet</th>
                            <th class="border-0">Nomor</th>
                            <th class="border-0">Di buat</th>
                            <th class="border-0 rounded-end text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($metode as $n => $k)
                        <tr>
                            <td>{{ $n + 1 }}</td>
                            <td>
                                @if($k->wallet == "dana")
                                    <img src="{{ asset('image/dana.png') }}" height="25" width="80" alt="">
                                @elseif($k->wallet == "gopay")
                                    <img src="{{ asset('image/gopay.png') }}" height="25" width="80" alt="">
                                @else
                                    <img src="{{ asset('image/ovo.png') }}" height="25" width="80" alt="">
                                @endif
                            </td>
                            <td>{{ ucfirst($k->wallet) }}</td>
                            <td>{{ $k->number }}</td>
                            <td> {{ $k->created_at->format('d F, Y') }} </td>
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
                                    <form method="get" action="{{ route('penjual.updatemetode',$k->id) }}">
                                        @csrf
                                        <div class="modal-header">
                                            <h2 class="h6 modal-title">Edit Metode Pembayaran</h2>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="kategori" class="form-label">Metode Pembayaran</label>
                                                <input type="text" class="form-control" id="wallet"
                                                    value="{{ $k->wallet }}" readonly name="wallet">
                                            </div>
                                            <div class="mb-3">
                                                <label for="kategori" class="form-label">Nomor E-Wallet</label>
                                                <input type="text" class="form-control" id="number"
                                                    value="{{ $k->number }}" name="number">
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
                                            Apakah anda yakin ingin menghapus {{ ucfirst($k->wallet) }} ?
                                        </div>
                                        <div class="d-flex justify-content-center align-items-center my-4"
                                            style="column-gap: 5px">
                                            <form action="{{ route('penjual.deletemetode',$k->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <div>
                                                    <button type="submit" class="btn btn-success text-white">Hapus</button>
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
    </div>
    @endsection
</x-penjual-layout>
