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
                <li class="breadcrumb-item"><a href="#">List Penerbit</a></li>
            </ol>
        </nav>
    </div>
    <div class="card border-0 shadow mb-4">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h1 class="h4">List Penerbit</h1>
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
                            <th class="border-0">Whatsapp</th>
                            <th class="border-0">Pekerjaan</th>
                            <th class="border-0">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($penerbit as $n => $p)
                        <tr>
                            <td class="border-0 rounded-start">{{ $n + 1 }} </td>
                            <td class="border-0"> <a href="{{ route('admin.detail.penerbit',$p->id) }}" class="text-info"> {{ $p->nama }}
                                </a> </td>
                            <td class="border-0">{{ substr($p->judul_buku,0,20) }}</td>
                            <td class="border-0">{{ $p->no_hp }}</td>
                            <td class="border-0">{{ $p->pekerjaan }}</td>
                            <td class="border-0">
                                @if($p->status == "terima")
                                <button role="button" data-bs-toggle="modal" data-bs-target="#modal{{ $p->id }}"
                                    class="btn btn-success text-white btn-sm"> Terima </button>
                                @elseif($p->status == "tolak")
                                <a href="{{ route('admin.penerbit.accept',$p->id) }}" class="btn btn-danger btn-sm"> Tolak </a>
                                @else
                                <div class="d-flex">
                                    <a href="{{ route('admin.penerbit.accept',$p->id) }}" class="btn text-white btn-success btn-sm me-2"> Terima </a>
                                <button role="button" data-bs-toggle="modal" data-bs-target="#modal{{ $p->id }}"
                                    class="btn btn-danger text-white btn-sm"> Tolak </button>
                                </div>

                                @endif
                            </td>
                        </tr>
                        <div class="modal fade" id="modal{{ $p->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="modal-default" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <form action="{{ route('admin.penerbit.declined',$p->id) }}" method="post">
                                    @csrf
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5> Tolak Penerbit </h5>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-2">
                                                Berikan alasan mengapa anda menolak
                                            </div>
                                            <textarea name="alasan" class="form-control"></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <div class="d-flex justify-content-between align-items-center "
                                                style="column-gap: 5px">
                                                <div>
                                                    <button type="button" class="btn btn-primary"
                                                        data-bs-dismiss="modal">Batal</button>
                                                </div>
                                                <div>
                                                    <button type="submit"
                                                        class="btn btn-danger text-white">Tolak</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div
            class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
            {{ $penerbit->links() }}
        </div>
    </div>
    @endsection
</x-admin-layout>
