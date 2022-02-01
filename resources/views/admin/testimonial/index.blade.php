<x-admin-layout>
    @section('content')
    <x-header title="List Testimonial" description="Disini anda dapat melihat testimonial dari klien" />
    <div class="card border-0 shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap mb-0 rounded" width="100%">
                    <thead class="thead-light">
                        <tr>
                            <th class="border-0 rounded-start">#</th>
                            <th class="border-0">Nama</th>
                            <th class="border-0">Email</th>
                            <th class="border-0">Pesan</th>
                            <th class="border-0">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($testimonial as $n => $b)
                        <!-- Item -->
                        <tr>
                            <td><a href="#" class="text-primary fw-bold">{{ $n + 1 }} </a> </td>
                            <td>
                                <a role="button" data-bs-toggle="modal" data-bs-target="#modal{{ $b->id }}">
                                    {{ $b->user->name }} </a>
                                <div class="modal fade" id="modal{{ $b->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="modal-default" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2 class="h6 modal-title">Detail Testimonial</h2>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-2">
                                                    <label for="" class="mb-2 fs-6"> FullName </label>
                                                    <input type="text" name="" class="form-control" value="{{ $b->fullname }}" readonly id="">
                                                </div>
                                                <div class="mb-2">
                                                    <label for="" class="mb-2 fs-6"> Email </label>
                                                    <input type="text" name="" class="form-control" value="{{ $b->email }}" readonly id="">
                                                </div>
                                                <label class="mb-2 fs-6" for=""> Pesan </label>
                                                <textarea name="" rows="5" readonly class="form-control">{{ $b->pesan }}</textarea>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger ms-auto"
                                                    data-bs-dismiss="modal">Kembali</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                {{ $b->email }}
                            </td>
                            <td>
                                <span class="text-muted">{{ substr($b->pesan,0,20) }}<span>
                            </td>
                            <td>
                                @if($b->status == "proses")
                                <a href="{{ route('admin.testimonial.accept',$b->id) }}"
                                    class="me-2 btn btn-success btn-sm text-white">Terima</a>
                                <a href="{{ route('admin.testimonial.deny',$b->id) }}"
                                    class="btn btn-danger btn-sm">Tolak</a>
                                @elseif($b->status == "terima")
                                <a href="{{ route('admin.testimonial.deny',$b->id) }}"
                                    class="me-2 btn btn-success btn-sm text-white">Terima</a>
                                @else
                                <a href="{{ route('admin.testimonial.accept',$b->id) }}"
                                    class="btn btn-danger btn-sm">Tolak</a>
                                @endif
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
                <div
                    class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
                    <!-- <div class="fw-normal small mt-4 mt-lg-0">Showing <b>5</b> out of <b>25</b> entries</div> -->
                </div>
            </div>
        </div>
    </div>
    @endsection
</x-admin-layout>
