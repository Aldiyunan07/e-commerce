<x-admin-layout>
    @section('content')
    <x-header title="List User" description="Disini anda dapat melihat semua list penjual." />
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
                @foreach ($user as $n => $p)
                <tr>
                    <td><span class="fw-bold">{{ $n + 1 }}</span></td>
                    <td>
                        <span class="fw-normal">{{ $p->name }}</span>
                    </td>
                    <td><span class="fw-normal">{{ $p->email }}</span></td>
                    <td><span class="fw-normal">{{ $p->no_telp }}</span></td>
                    <td><span class="fw-normal">{{ $p->created_at->format('d F, Y')}}</span></td>
                    <td class="text-end">
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="bi bi-three-dots-vertical"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="{{ route('admin.detailuser',$p->id) }}">Detail</a>
                                </li>
                                <li><a class="dropdown-item text-danger" role="button" data-bs-toggle="modal"
                                        data-bs-target="#modal{{ $p->id }}">Delete</a>
                                </li>
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
                                    <form action="{{ route('admin.deleteuser',$p->id) }}" method="post">
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
            {{ $user->links() }}
            <!-- <div class="fw-normal small mt-4 mt-lg-0">Showing <b>5</b> out of <b>25</b> entries</div> -->
        </div>
    </div>
    @endsection

</x-admin-layout>
