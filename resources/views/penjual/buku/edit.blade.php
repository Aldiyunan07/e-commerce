<x-penjual-layout>
    @section('content')
    <x-breadcrumb links="{{ route('penjual.dashboard') }}">
        <li class="breadcrumb-item"><a href="{{ route('penjual.listbuku') }}">Toko Saya</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Buku</li>
    </x-breadcrumb>
    <x-header title="Edit Buku" description="Disini anda dapat mengedit buku."></x-header>
    <div class="card border-0 shadow mb-4">
        <div class="card-body">
            <form action="{{ route('penjual.updatebuku',$buku->id) }}" enctype="multipart/form-data" method="post">
                @csrf
                @method('patch')
                @include('penjual.buku.form_control')
                <a href="{{ route('penjual.listbuku') }}" class="btn btn-danger btn-sm mt-3"> Kembali </a>
                <button type="submit" class="btn btn-info btn-sm mt-3"> Simpan </button>
            </form>
        </div>
    </div>
    @endsection
</x-penjual-layout>
