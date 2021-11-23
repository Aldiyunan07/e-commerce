<x-admin-layout>
    @section('content')
    <x-header title="Edit Buku" description="Disini anda dapat mengedit list buku." />
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow components-section">
                <form action="{{ route('admin.book.update',$buku->id) }}" enctype="multipart/form-data" method="post">
                <div class="card-body">
                    @method('patch')    
                    @include('admin.books._form_control')
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('admin.books') }}" class="btn btn-danger">Kembali</a>
                            <button type="submit" class="btn btn-info">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
</x-admin-layout>