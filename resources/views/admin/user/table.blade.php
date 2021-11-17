<x-admin-layout>
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
                <li class="breadcrumb-item"><a href="#">Data Akun</a></li>
                <li class="breadcrumb-item active" aria-current="page">Akun User</li>
            </ol>
        </nav>
        <!-- <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Akun Penjual</h1>
                <p class="mb-0">Dozens of reusable components built to provide buttons, alerts, popovers, and more.</p>
            </div>
        </div> -->
    </div>
    <div class="card border-0 shadow mb-4">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h1 class="h4">Akun User</h1>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap  mb-0 rounded">
                    <thead class="text-white bg-primary">
                        <tr>
                            <th class="border-0 rounded-start">#</th>
                            <th class="border-0">Nama</th>
                            <th class="border-0">Email</th>
                            <th class="border-0">No Telepon</th>
                            <th class="border-0">Bergabung sejak</th>
                            <th class="border-0 rounded-end">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $n => $p)
                            <tr>

                                <td> {{ $n + 1 }} </td>
                                <td> {{ $p->name }} </td>
                                <td> {{ $p->email }} </td>
                                <td> {{ $p->no_telp }} </td>
                                <td> {{ $p->created_at->format('d F, Y')}} </td>
                                <td>
                                    <a href="{{ route('admin.detailuser',$p->id) }}" class="btn btn-success btn-sm text-white"> Detail </a>
                                    <!-- <a href="{{ route('admin.editpenjual',$p->id) }}" class="btn btn-sm btn-info" type="button"> Edit </a> -->
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal{{$p->id}}">Hapus</button>
                                    <div class="modal fade" id="modal{{ $p->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h2 class="h6 modal-title">Hapus Akun Penjual ?</h2>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p> Apakah anda yakin ingin menghapus akun {{ $p->name }} ? </p>
                                                </div>
                                                <form action="{{ route('admin.deleteuser',$p->id) }}" method="post">
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

</x-admin-layout>
