<x-admin-layout>
    @section('content')
    <x-breadcrumb link="{{ route('admin.dashboard') }}">
        <li class="breadcrumb-item">Owner</li>
    </x-breadcrumb>
    <x-header title="List Penjual" description="Disini anda dapat melihat semua list penjual.">
        <a href="{{ route('admin.tambahpenjual') }}" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
                </path>
            </svg>
            Tambah Penjual
        </a>
        {{-- Optional mun rek dipake uncomment wee --}}
        {{-- <div class="btn-group ms-2 ms-lg-3">
            <button type="button" class="btn btn-sm btn-outline-gray-600">Share</button>
            <button type="button" class="btn btn-sm btn-outline-gray-600">Export</button>
        </div> --}}

    </x-header>
    <div class="card card-body border-0 shadow table-wrapper table-responsive" style="min-height: 200px">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="border-gray-200">#</th>
                    <th class="border-gray-200">Nama</th>
                    <th class="border-gray-200">Email</th>
                    <th class="border-gray-200">Telepon / Whatsapp</th>
                    <th class="border-gray-200">Bergabung Sejak</th>
                    <th class="border-gray-200 text-end">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penjual as $n => $p)
                <tr>
                    <td><span class="fw-bold">{{ $n + 1 }}</span></td>
                    <td>
                        <span class="fw-normal">{{ $p->name }}</span>
                    </td>
                    <td><span class="fw-normal">{{ $p->email }}</span></td>
                    <td><span class="fw-normal">{{ $p->whatsapp }}</span></td>
                    <td><span class="fw-normal">{{ $p->created_at->format('d F, Y')}}</span></td>
                    <td class="text-end">
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="{{ route('admin.editpenjual',$p->id) }}">Edit</a>
                                </li>
                                <li><a class="dropdown-item text-danger" role="button" data-bs-toggle="modal"
                                        data-bs-target="#modal{{ $p->id }}">Delete</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <!-- Modal Content -->
                <div class="modal fade" id="modal{{ $p->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="modal-default" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="d-flex flex-nowrap justify-content-center align-items-center">
                                    <i class="bi bi-question-circle" style="font-size: 100px"></i>
                                </div>
                                <div class="d-block text-center">
                                    Apakah anda yakin ingin menghapus {{ $p->name }} ?
                                </div>
                                <div class="d-flex justify-content-center align-items-center my-4"
                                    style="column-gap: 5px">
                                    <form action="{{ route('admin.hapuspenjual',$p->id) }}" method="post">
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
        <div
            class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
            {{ $penjual->links() }}
            <!-- <div class="fw-normal small mt-4 mt-lg-0">Showing <b>5</b> out of <b>25</b> entries</div> -->
        </div>
    </div>
    @endsection

</x-admin-layout>
