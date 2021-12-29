<x-app-layout>
    @section('swiper')
    <style>
        .select2-dropdown {
            border: 1px solid #eceef3!important;
            border-radius: 0.5rem!important;
            margin-top: 3px!important;
        }
        .select2-selection--single {
            border: 1px solid #eceef3!important;
            border-radius: 0.5rem!important;
            height: 40px!important;
            padding-top: 5px!important;
            padding-left: 5px!important; 
        }
        .select2-selection__arrow {
            top: 5px!important;
            right: 5px!important;
        }
        .select2-search__field {
            outline: none;
            border: 1px solid #eceef3!important;
            border-radius: 0.5rem!important;
            padding: 6px 0.7rem!important;
        }
        .select2-results__option {
            padding: 6px 0.9rem!important;
        }
        .timeline_area {
            position: relative;
            z-index: 1;
        }
        .single-timeline-area {
            position: relative;
            z-index: 1;
            padding-left: 4rem;
        }
        @media only screen and (max-width: 575px) {
            .single-timeline-area {
                padding-left: 100px;
            }
        }
        .single-timeline-area .timeline-date {
            position: absolute;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 1;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -ms-grid-row-align: center;
            align-items: center;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            padding-right: 60px;
        }
        @media only screen and (max-width: 575px) {
            .single-timeline-area .timeline-date {
                width: 100px;
            }
        }
        .single-timeline-area .timeline-date::after {
            position: absolute;
            width: 3px;
            height: 100%;
            content: "";
            background-color: #ebebeb;
            top: 0;
            right: 30px;
            z-index: 1;
        }
        .single-timeline-area .timeline-date::before {
            position: absolute;
            width: 11px;
            height: 11px;
            border-radius: 50%;
            background-color: #0d6efd;
            content: "";
            top: 50%;
            right: 26px;
            z-index: 5;
            margin-top: -5.5px;
        }
        .single-timeline-area .timeline-date p {
            margin-bottom: 0;
            color: #020710;
            font-size: 13px;
            text-transform: uppercase;
            font-weight: 500;
        }
        .single-timeline-area .single-timeline-content {
            position: relative;
            z-index: 1;
            padding: 30px 30px 25px;
            border-radius: 6px;
            margin-bottom: 15px;
            margin-top: 15px;
            -webkit-box-shadow: inset 0 0.25rem 1rem 0 rgba(47, 91, 234, 0.125);
            box-shadow: inset 0 0.25rem 1rem 0 rgba(47, 91, 234, 0.125);
            border: 0;
        }
        @media only screen and (max-width: 575px) {
            .single-timeline-area .single-timeline-content {
                padding: 20px;
            }
        }
        .single-timeline-area .single-timeline-content .timeline-icon {
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
            width: 30px;
            height: 30px;
            -webkit-box-flex: 0;
            -ms-flex: 0 0 30px;
            flex: 0 0 30px;
            text-align: center;
            max-width: 30px;
            border-radius: 50%;
            margin-right: 15px;
        }
        .single-timeline-area .single-timeline-content .timeline-icon i {
            color: #ffffff;
            line-height: 30px;
        }
        .single-timeline-area .single-timeline-content .timeline-text h6 {
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
        }
        .single-timeline-area .single-timeline-content .timeline-text p {
            font-size: 13px;
            margin-bottom: 0;
        }
        .single-timeline-area .single-timeline-content:hover .timeline-icon,
        .single-timeline-area .single-timeline-content:focus .timeline-icon {
            background-color: #020710;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @endsection
    @push('swiper')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.select2js').select2({
                placeholder: "Cari Buku Anda",
                allowClear: true
            });
        });
    </script>
    @endpush
    <div class="container">
        <x-slot name="header">
            <h1 class="header-primary mb-3" style="font-weight: 800; color: #34364a; font-size: 32px;">
                Cek Progress
            </h1>
            <p class="fw-light text-dark">
                Cek progress penerbitan Anda disini
            </p>
        </x-slot>
        <div class="container">
            <section>
                <div class="row">
                    <x-side-guest />
                    <div class="col-12 col-lg-9">
                        <div class="card card-body border-0 shadow-sm p-4 mb-3">
                            <form action="{{ route('page.progress') }}" method="GET">
                                <div class="d-flex align-items-center" style="column-gap: 0.3rem">
                                    <select name="cari" id="cari" class="select2js form-control rounded-pill">
                                        @foreach($listpenerbit as $p)
                                        <option value="{{ $p->id }}">{{ $p->judul_buku }}</option>
                                        @endforeach
                                    </select>
                                    <button class="btn btn-primary rounded">Cari</button>
                                </div>
                            </form>
                        </div>
                        @isset($progress)
                        <div class="card card-body border-0 shadow-sm p-4">
                            <div class="timeline_area section_padding_130">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-12 col-sm-8 col-lg-6">
                                            <div class="section_heading text-center">
                                                <h6><sup><div class="bi bi-quote"></div></sup>{{ $penerbit->judul_buku }}</h6>
                                                <div class="line"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="apland-timeline-area">
                                                <div class="single-timeline-area">
                                                    <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;"></div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                                                @if ($progress->naskah == "on")
                                                                <div class="timeline-icon bg-success"><i class="bi bi-check-lg" aria-hidden="true"></i></div>
                                                                @else
                                                                <div class="timeline-icon bg-danger"><i class="bi bi-x-lg" aria-hidden="true"></i></div>
                                                                @endif
                                                                <div class="timeline-text">
                                                                    <h6>Penulisan Naskah</h6>
                                                                    @if ($progress->naskah == "on")
                                                                    <p>Selesai</p>
                                                                    @else
                                                                    <p>Belum</p>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="apland-timeline-area">
                                                <div class="single-timeline-area">
                                                    <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;"></div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                                                @if ($progress->administrasi == "on")
                                                                <div class="timeline-icon bg-success"><i class="bi bi-check-lg" aria-hidden="true"></i></div>
                                                                @else
                                                                <div class="timeline-icon bg-danger"><i class="bi bi-x-lg" aria-hidden="true"></i></div>
                                                                @endif
                                                                <div class="timeline-text">
                                                                    <h6>Cek Administrasi</h6>
                                                                    @if ($progress->administrasi == "on")
                                                                    <p>Selesai</p>
                                                                    @else
                                                                    <p>Belum</p>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="apland-timeline-area">
                                                <div class="single-timeline-area">
                                                    <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;"></div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                                                @if ($progress->antrian == "on")
                                                                <div class="timeline-icon bg-success"><i class="bi bi-check-lg" aria-hidden="true"></i></div>
                                                                @else
                                                                <div class="timeline-icon bg-danger"><i class="bi bi-x-lg" aria-hidden="true"></i></div>
                                                                @endif
                                                                <div class="timeline-text">
                                                                    <h6>Antrian Layout & Desain</h6>
                                                                    @if ($progress->antrian == "on")
                                                                    <p>Selesai</p>
                                                                    @else
                                                                    <p>Belum</p>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="apland-timeline-area">
                                                <div class="single-timeline-area">
                                                    <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;"></div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                                                @if ($progress->layout == "on")
                                                                <div class="timeline-icon bg-success"><i class="bi bi-check-lg" aria-hidden="true"></i></div>
                                                                @else
                                                                <div class="timeline-icon bg-danger"><i class="bi bi-x-lg" aria-hidden="true"></i></div>
                                                                @endif
                                                                <div class="timeline-text">
                                                                    <h6>Proses Layout</h6>
                                                                    @if ($progress->layout == "on")
                                                                    <p>Selesai</p>
                                                                    @else
                                                                    <p>Belum</p>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="apland-timeline-area">
                                                <div class="single-timeline-area">
                                                    <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;"></div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                                                @if ($progress->harga !== null)
                                                                <div class="timeline-icon bg-success"><i class="bi bi-check-lg" aria-hidden="true"></i></div>
                                                                @else
                                                                <div class="timeline-icon bg-danger"><i class="bi bi-x-lg" aria-hidden="true"></i></div>
                                                                @endif
                                                                <div class="timeline-text">
                                                                    <h6>Informasi Harga</h6>
                                                                    <p>{{ $progress->rupiah($progress->harga) }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="apland-timeline-area">
                                                <div class="single-timeline-area">
                                                    <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;"></div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                                                @if ($progress->deal_harga !== null)
                                                                <div class="timeline-icon bg-success"><i class="bi bi-check-lg" aria-hidden="true"></i></div>
                                                                @else
                                                                <div class="timeline-icon bg-danger"><i class="bi bi-x-lg" aria-hidden="true"></i></div>
                                                                @endif
                                                                <div class="timeline-text">
                                                                    <h6>Deal Harga</h6>
                                                                    <p>{{ $progress->rupiah($progress->deal_harga) }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="apland-timeline-area">
                                                <div class="single-timeline-area">
                                                    <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;"></div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                                                @if ($progress->masuk !== null)
                                                                <div class="timeline-icon bg-success"><i class="bi bi-check-lg" aria-hidden="true"></i></div>
                                                                @else
                                                                <div class="timeline-icon bg-danger"><i class="bi bi-x-lg" aria-hidden="true"></i></div>
                                                                @endif
                                                                <div class="timeline-text">
                                                                    <h6>Tanggal Masuk ISBN</h6>
                                                                    <p>{{ $progress->masuk !== null ? $progress->masuk : '-' }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="apland-timeline-area">
                                                <div class="single-timeline-area">
                                                    <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;"></div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                                                @if ($progress->keluar !== null)
                                                                <div class="timeline-icon bg-success"><i class="bi bi-check-lg" aria-hidden="true"></i></div>
                                                                @else
                                                                <div class="timeline-icon bg-danger"><i class="bi bi-x-lg" aria-hidden="true"></i></div>
                                                                @endif
                                                                <div class="timeline-text">
                                                                    <h6>Tanggal Keluar ISBN</h6>
                                                                    <p>{{ $progress->keluar !== null ? $progress->keluar : '-' }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="apland-timeline-area">
                                                <div class="single-timeline-area">
                                                    <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;"></div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                                                @if ($progress->produksi !== null)
                                                                <div class="timeline-icon bg-success"><i class="bi bi-check-lg" aria-hidden="true"></i></div>
                                                                @else
                                                                <div class="timeline-icon bg-danger"><i class="bi bi-x-lg" aria-hidden="true"></i></div>
                                                                @endif
                                                                <div class="timeline-text">
                                                                    <h6>Mulai Proses Produksi</h6>
                                                                    <p>{{ $progress->produksi !== null ? $progress->produksi : '-' }}</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endisset
                    </div>
                </div>
            </section>
        </div>
        {{-- <div class="row">
            <div class="col-md-8">
                <div class="text-justify">
                    Bagi Anda yang saat ini sedang dalam proses menerbitkan buku di Penerbit Pustaka Aksara dapat
                    mengecek secara langsung progress atau kemajuan dari buku Anda.

                    Terdapat beberapa proses dari mulai Anda mengirim naskah kepada kami hingga proses produksi dan siap
                    dikirim ke tempat Anda.
                    <br />
                    Untuk mengetahui progress buku Anda sampai di tahap apa dapat memerika melalui tools dibawah ini
                    dengan cara :
                    <br />
                    <ol>
                        <li>Ketikkan “Judul Naskah” Anda di kolom “Masukkan judul buku Anda disini!”.</li>
                        <li>Tekan “Cari” dan akan muncul hasilnya.</li>
                        <li>Kini Anda sudah tahu buku Anda sampai di tahap apa.</li>
                    </ol>
                    <a href="{{ route('cari.progress') }}" class="btn btn-primary btn-sm"> Cek Buku Anda Disini </a>
                    <br />
                    <b>Ada pertanyaan atau butuh bantuan? Hubungi Konsultan Penerbitan Kami dibawah in</b>
                </div>
            </div>
        </div> --}}
    </div>
</x-app-layout>
