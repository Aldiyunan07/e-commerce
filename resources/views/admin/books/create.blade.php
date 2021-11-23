<x-admin-layout>
    @section('content')
    <x-header title="Tambah Buku" description="Disini anda dapat menambahkan list buku." />
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow components-section">
                <div class="card-body">
                    <form action="#">
                        @include('admin.books._form_control')
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('admin.books') }}" class="btn btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-info">Tambah</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
</x-admin-layout>