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
                <li class="breadcrumb-item"><a href="#">List Progress Buku</a></li>
            </ol>
        </nav>
    </div>
    <div class="card border-0 shadow mb-4">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h1 class="h4">List Progress Buku</h1>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap  mb-0 rounded">
                    <thead class="text-white bg-primary">
                        <tr>
                            <th class="border-0 rounded-start">#</th>
                            <th class="border-0">Nama Lengkap</th>
                            <th class="border-0">Judul Buku</th>
                            <th class="border-0">Jasa </th>
                            <th class="border-0">Jumlah Halaman</th>
                            <th class="border-0">Opsi</th>
                            <!-- <th class="border-0 rounded-end">Opsi</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($progress as $n => $p)
                        <tr>
                            <td class="border-0 rounded-start">{{ $n + 1 }} </td>
                            <td class="border-0"> <a href="{{ route('admin.detail.penerbit',$p->id) }}"> {{ $p->penerbit->nama }} </a> </td>
                            <td class="border-0">{{ substr($p->penerbit->judul_buku,0,20) }}</td>
                            <td class="border-0">{{ $p->penerbit->jasa }}</td>
                            <td class="border-0">{{ $p->penerbit->jumlah_halaman }} Halaman</td>
                            <td class="border-0"> <a href="{{ route('admin.edit.progress',$p->id) }}" class="btn btn-info btn-sm"> Edit </a> </td>
                            <!-- <td class="border-0 rounded-end">#</td> -->
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        <div class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
            {{ $progress->links() }}
            <!-- <div class="fw-normal small mt-4 mt-lg-0">Showing <b>5</b> out of <b>25</b> entries</div> -->
        </div>
    </div>
    @endsection
</x-admin-layout>