<x-app-layout>
    <div class="container-fluid">
        <div class="row mx-50" style="column-gap: 30px">
            <div class="col-12 col-md-8 ">
                <div style="margin: 0; min-height: 25rem" class="mb-5 d-flex bg-blue-200 rounded align-items-center">
                    <img src="{{asset('image/image 7.png')}}" class="img" style="border-radius: 0px;" alt="...">
                </div>
            {{-- </div>
            <div class="col-12 col-md-5"> --}}
                <div class="fs-5 text-secondary opacity-75">
                    John Doe
                </div>
                <div class="fs-3 fw-md text-dark mb-4">
                    No Coding No Money 
                </div>
                <div class="d-flex align-items-center border-bottom pb-2" style="column-gap: 20px;">
                    <div class="fw-normal small text-secondary opacity-75">Format Buku</div>
                    <div class="fw-normal small text-secondary opacity-75">Deskripsi Buku</div>
                    <div class="fw-normal small text-secondary opacity-75">Detail Buku</div>
                    <div class="fw-normal small text-secondary opacity-75">Review</div>
                </div>
                <div class="text-dark my-3 fw-bold">Format Buku Yang Tersedia</div>
                <div class="format-buku d-flex" style="column-gap: 12px">
                    <div class="card border-primary">
                        <div class="card-body m-0 py-1">
                            <div class="fw-bold text-dark">Ebook</div>
                            <div class="small text-secondary opacity-75">Mulai dari</div>
                            <div class="text-primary">Rp. 120.00</div>
                        </div>
                    </div>
                    <div class="card border-primary">
                        <div class="card-body m-0 py-1">
                            <div class="fw-bold text-dark">Buku</div>
                            <div class="small text-secondary opacity-75">Mulai dari</div>
                            <div class="text-primary">Rp. 200.00</div>
                        </div>
                    </div>
                </div>
                <div class="text-dark my-3 fw-bold">Deskripsi</div>
                <div class="fw-light">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, deserunt alias totam ipsum beatae soluta. Molestias dolores ex, assumenda mollitia et cupiditate, illo quisquam possimus quo nam culpa dolor dolore?
                </div>
                <div class="my-3">
                    <div class="fw-bold text-dark mb-3">Detail</div>
                    <div class="row">
                        <div class="col-6 col-md-6">
                            <div class="mb-2">
                                <div class="small text-secondary">Jumlah Halaman</div>
                                <div class="small text-dark">520.0</div>
                            </div>
                            <div class="mb-2">
                                <div class="small text-secondary">Tanggal Terbit</div>
                                <div class="small text-dark">14 Januari 2021</div>
                            </div>
                            <div class="mb-2">
                                <div class="small text-secondary">ISBN</div>
                                <div class="small text-dark">9786020650352</div>
                            </div>
                            <div class="mb-2">
                                <div class="small text-secondary">Bahasa</div>
                                <div class="small text-dark">Indonesia</div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6">
                            <div class="mb-2">
                                <div class="small text-secondary">Penerbit</div>
                                <div class="small text-dark">Gramedia Pustaka Utama</div>
                            </div>
                            <div class="mb-2">
                                <div class="small text-secondary">Berat</div>
                                <div class="small text-dark">0.46 kg</div>
                            </div>
                            <div class="mb-2">
                                <div class="small text-secondary">Lebar</div>
                                <div class="small text-dark">13.5 cm</div>
                            </div>
                            <div class="mb-2">
                                <div class="small text-secondary">Panjang</div>
                                <div class="small text-dark">20.0 cm</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="fw-bold border-bottom pb-2">
                            Review
                        </div>
                        <div class="py-2">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis optio tempora ab maiores nam, harum earum magnam accusamus eius tenetur vitae id eos exercitationem amet nemo quia obcaecati aut rem reprehenderit autem? Ipsum aut reprehenderit blanditiis ratione libero obcaecati tenetur dignissimos sed neque, aliquid illo non quod esse soluta, possimus perferendis. Delectus amet similique porro cum cupiditate aperiam provident incidunt voluptate tenetur? Illum saepe in sunt magni numquam vitae deserunt quisquam suscipit. Libero error ipsum laudantium vero commodi, quidem totam odit cumque eveniet excepturi dolorem est modi, doloremque ut dolore reiciendis! Nam et culpa officia dolorem iste necessitatibus odit aspernatur.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="fw-bold mb-3">
                    eBook Serupa
                </div>
                <div class="row">
                    <div class="col-6 col-sm-4 col-md-12">
                        <div class="card mb-2" style="max-width: 540px; border-radius: 0.25rem ;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                <img src="{{ asset('image/image 7.png') }}" class="img-fluid">
                                </div>
                                <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title line-clamp-1" style="font-size: 16px;">No Coding</h5>
                                    <p class="card-text line-clamp-2" style="font-size: 12px">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="small text-primary">Rp. 200.000</small></p>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-12">
                        <div class="card mb-2" style="max-width: 540px; border-radius: 0.25rem ;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                <img src="{{ asset('image/image 7.png') }}" class="img-fluid">
                                </div>
                                <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title line-clamp-1" style="font-size: 16px;">No Coding</h5>
                                    <p class="card-text line-clamp-2" style="font-size: 12px">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="small text-primary">Rp. 200.000</small></p>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
        
    </div>
</x-app-layout>