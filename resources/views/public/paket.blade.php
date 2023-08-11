@extends('public.layouts.app')
@push('css')
@endpush
@section('content')
    <div class="" id="paket"></div>
    <section class="text-center container py-5">
        <div class="d-flex flex-column flex-md-row align-items-center justify-content-center">
            <div class="text-end col-8 col-md-4">
                <img src="/images/paket.svg" alt="" class="img-fluid" />
            </div>
            <div class="text-md-start">
                <img src="/images/path.svg" alt="" />
                <h1 class="text-danger">
                    <div class="display-5 fw-bold">#PilihPaketMu</div>
                    <div class="display-5 fw-bold">SekarangJuga</div>
                    <div class="display-5 fw-bold">BersamaBignet</div>
                </h1>
            </div>
        </div>
    </section>
    <section class="container text-center py-5">
        <h3 class="fw-bold mb-3">
            Pilihan Paket <span class="text-danger">BIGNET</span>
        </h3>
        <p class="text-muted lh-sm opacity-75">
            Berbagai Paket yang dapat sesuai dengan layanan kebutuhan internet dan
            multimedia anda
        </p>

        <div class="row mb-3">
            @foreach ($pakets as $i => $paket)
                <div class="col-lg-6 px-3 mb-3">
                    <div class="d-flex gap-0 rounded-4 shadow-lg overflow-hidden">
                        <div class="col-6 p-4 bg-white">
                            <div class="d-flex gap-3 align-items-start flex-md-column justify-content-center">
                                <img src="/images/logo/big-warna-full.png" alt="logo bignet" height="70" />
                                <div class="text-start lh-1">
                                    <h4>{{ $paket->title }}</h4>
                                    <small class="fs-6">{{ $paket->subtitle }}</small>
                                </div>
                            </div>
                            <div class="d-flex mt-3 justify-content-between flex-md-column align-items-start gap-3">
                                <div class="text-start">
                                    <div>
                                        Up To
                                        <strong class="text-danger">{{ $paket->kecepatan }} Mbps</strong>
                                    </div>
                                    <div>Download/Upload</div>
                                    <div>Unlimited Quota</div>
                                </div>
                                <div class="mb-2">
                                    <strong class="text-danger fw-bold display-5">{{ $paket->harga }}rb</strong>
                                    /Bulan
                                </div>
                            </div>
                        </div>
                        <div class="col-6 p-4">
                            <div class="d-flex flex-column justify-content-center align-items-center h-100">
                                <h4 class="mb-3">Whats Included</h4>
                                @php($paket->include = explode(', ', $paket->include))
                                @foreach ($paket->include as $include)
                                    <div class="d-flex gap-2 mb-2">
                                        <div class="text-start text-danger">
                                            <i class="fa-solid fa-circle-check fa-xl d-inline-block"></i>
                                        </div>
                                        <div class="text-start">
                                            {{ $include }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-danger px-5 mt-n4">Daftar Paket</button>
                </div>
            @endforeach
        </div>
        <div class="" id="promo"></div>
    </section>
    <section class="text-center container py-5">
        <div class="d-flex flex-column flex-md-row align-items-center justify-content-center">
            <div class="text-md-end">
                <h1 class="text-danger">
                    <div class="display-5 fw-bold">#Internetnya</div>
                    <div class="display-5 fw-bold">Keluarga</div>
                </h1>
                <img src="/images/path.svg" alt="" />
            </div>
            <div class="text-start col-8 col-md-4">
                <img src="/images/promo.svg" alt="" class="img-fluid" />
            </div>
        </div>
    </section>
    <section class="container text-center py-5">
        <h3 class="fw-bold mb-3">
            Pilihan Paket <span class="text-danger">BIGNET</span>
        </h3>
        <p class="text-muted lh-sm opacity-75">
            Berbagai Paket yang dapat sesuai dengan layanan kebutuhan
            internet dan multimedia anda
        </p>
        <div class="row">
            @foreach ($promos as $i => $promo)
                <div class="col-md-6 col-lg-3 {{ $i % 2 == 0 ? 'offset-lg-3' : '' }} ">
                    <div class="rounded-4 shadow-lg p-4 ">
                        <div class="d-flex gap-3 align-items-end align-items-center flex-md-column justify-content-center">
                            <img src="/images/logo/big-warna-full.png" alt="logo bignet" height="70">
                            <div class="fs-5 text-start text-md-center lh-1">
                                <h4>{{ $promo->title }}</h4>
                                <small class="fs-6">{{ $promo->subtitle }}</small>
                            </div>
                        </div>
                        <div class="d-flex mt-3 justify-content-between flex-md-column align-items-center gap-3">
                            <div class="">
                                <div>Up To <strong class="text-danger">{{ $promo->kecepatan }} Mbps</strong></div>
                                <div>Download/Upload</div>
                                <div>Unlimited Quota</div>
                            </div>
                            <div class="flex-grow-1">
                                <div class="mb-2"><strong
                                        class="text-danger fw-bold display-5">{{ $promo->harga }}rb</strong> /Bulan</div>
                                <button class="btn btn-danger w-100">Daftar Paket</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
@push('js')
    <script>
        // inits

        // functions
        function deviceTransform() {
            if (detectBreakpoint() <= 2) {} else {}
        }

        // caller

        // listeners
        window.addEventListener("resize", function() {
            deviceTransform();
        });

        document.addEventListener("DOMContentLoaded", function() {
            deviceTransform();
        });
    </script>
@endpush
