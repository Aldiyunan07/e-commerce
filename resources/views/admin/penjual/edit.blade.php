<x-admin-layout>
    @section('content')
    <x-header title="Edit Penjual" description="Disini anda dapat mengedit data penjual" />
    <div class="card border-0 shadow mb-4">
        <div class="card-body py-5">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <form action="{{ route('admin.updatepenjual',$penjual->id) }}" method="post">
                        @include('admin.penjual._form_control')
                        @method('patch')
                        <a href="{{ route('admin.listpenjual') }}" class="btn btn-danger btn-sm mt-3"> Kembali </a>
                        <button type="submit" class="btn btn-info btn-sm mt-3"> Simpan </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
</x-admin-layout>
