<x-admin-layout>
    @section('content')
    <x-header title="Tambah Penjual" description="Disini anda dapat menambahkan data penjual" />
    <div class="card border-0 shadow mb-4">
        <div class="card-body py-5">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <form action="{{ route('admin.insertpenjual') }}" method="post">
                        @include('admin.penjual._form_control')
                        <small id="emailHelp" class="form-text text-muted">*Password otomatis akan menjadi password default</small>
                        <div>
                            <a href="{{ route('admin.listpenjual') }}" class="btn btn-danger btn-sm mt-3"> Kembali </a>
                            <button type="submit" class="btn btn-info btn-sm mt-3"> Simpan </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
</x-admin-layout>
