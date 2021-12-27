<x-penjual-layout>
    @section('content')
    <x-breadcrumb links="{{ route('penjual.dashboard') }}">
        <li class="breadcrumb-item">Pesanan</li>
    </x-breadcrumb>
    <x-header title="Pesanan" description="Disini anda dapat melihat list pesanan." />
    <div class="card border-0 shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap mb-0 rounded">
                    <thead class="thead-light">
                        <tr>
                            <th class="border-0 rounded-start">#</th>
                            <th class="border-0">User</th>
                            <th class="border-0">Judul Buku</th>
                            <th class="border-0">Harga</th>
                            <th class="border-0">Status</th>
                            <th class="border-0">Tanggal </th>
                            <th class="border-0 rounded-end">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($buy as $n => $b)
                        <tr>
                            <td> {{ $n + 1 }} </td>
                            <td> {{ $b->user->name }} </td>
                            <td> <a href="{{ route('penjual.listbuku.show', $b->id) }}" class="text-info"> {{ $b->buku->name }}</a> </td>
                            <td> {{ $b->buku->rupiah($b->buku->harga_asli) }} </td>
                            <td> {{ $b->status }} </td>
                            <td> {{ $b->created_at->format('d M, Y') }} </td>
                            <td>
                                @if($b->status == "proses")
                                    <a href="{{ route('penjual.konfirmasi.listbuy',$b->id) }}" class="btn btn-info btn-sm"> Konfirmasi </a>
                                @else
                                    <a href="{{ route('penjual.unkonfirmasi.listbuy',$b->id) }}" class="btn text-white btn-success btn-sm" disabled> Sudah Terkonfirmasi </a>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection
</x-penjual-layout>
