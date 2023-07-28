@extends('public.layouts.app')

@push('css')
@endpush

@section('content')
<section class="text-center container py-5">
    <div class="d-flex flex-column flex-md-row align-items-center justify-content-center">
        <div class="text-end col-8 col-md-4">
            <img src="/images/paket.svg" alt="" class="img-fluid">
        </div>
        <div class="text-md-start">
            <img src="/images/path.svg" alt="">
            <h1 class="text-danger">
                <div class="display-5 fw-bold">#PilihPaketMu</div>
                <div class="display-5 fw-bold">SekarangJuga</div>
                <div class="display-5 fw-bold">BersamaBignet</div>
            </h1>
        </div>
    </div>
</section>
<section class="container text-center py-5">
    <h3 class="fw-bold mb-3">Pilihan Paket <span class="text-danger">BIGNET</span></h3>
    <p class="text-muted lh-sm opacity-75">Berbagai Paket yang dapat sesuai dengan layanan kebutuhan internet dan
        multimedia anda</p>
    <div class="row mb-3">
        <div class="col-md-6 px-3">
            <div class="d-flex gap-0 rounded-4 shadow-lg overflow-hidden">
                <div class="col-6  p-4 bg-white">
                    <div class="d-flex gap-3 align-items-start flex-md-column justify-content-center">
                        <img src="/images/logo/big-warna-full.png" alt="logo bignet" height="70">
                        <div class="text-start lh-1">
                            <h4>Paket <strong>Dasar 1</strong></h4>
                            <small class="fs-6">Full Fiber To The Home</small>
                        </div>
                    </div>
                    <div class="d-flex mt-3 justify-content-between flex-md-column align-items-start gap-3">
                        <div class="text-start">
                            <div>Up To <strong class="text-danger">10 Mbps</strong></div>
                            <div>Download/Upload</div>
                            <div>Unlimited Quota</div>
                        </div>
                        <div class="mb-2"><strong class="text-danger fw-bold display-5">150rb</strong> /Bulan</div>
                    </div>
                </div>
                <div class="col-6 p-4">
                    <div class="d-flex flex-column justify-content-center align-items-center h-100">
                        <h4 class="mb-3">What's Included</h4>
                        <div class="d-flex gap-2 mb-2">
                            <div class="text-start text-danger">
                                <i class="fa-solid fa-circle-check fa-xl d-inline-block"></i>
                            </div>
                            <div class="text-start">
                                Up to <strong>250,000</strong>
                                tracked visits
                            </div>
                        </div>
                        <div class="d-flex gap-2 mb-2">
                            <div class="text-start text-danger">
                                <i class="fa-solid fa-circle-check fa-xl d-inline-block"></i>
                            </div>
                            <div class="text-start">
                                Up to <strong>250,000</strong>
                                tracked visits
                            </div>
                        </div>
                        <div class="d-flex gap-2 mb-2">
                            <div class="text-start text-danger">
                                <i class="fa-solid fa-circle-check fa-xl d-inline-block"></i>
                            </div>
                            <div class="text-start">
                                Up to <strong>250,000</strong>
                                tracked visits
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <button class="btn btn-danger px-5 mt-n4">Daftar Paket</button>
        </div>
        
        <div class="col-md-6 px-3">
            <div class="d-flex gap-0 rounded-4 shadow-lg overflow-hidden">
                <div class="col-6  p-4 bg-white">
                    <div class="d-flex gap-3 align-items-start flex-md-column justify-content-center">
                        <img src="/images/logo/big-warna-full.png" alt="logo bignet" height="70">
                        <div class="text-start lh-1">
                            <h4>Paket <strong>Dasar 1</strong></h4>
                            <small class="fs-6">Full Fiber To The Home</small>
                        </div>
                    </div>
                    <div class="d-flex mt-3 justify-content-between flex-md-column align-items-start gap-3">
                        <div class="text-start">
                            <div>Up To <strong class="text-danger">10 Mbps</strong></div>
                            <div>Download/Upload</div>
                            <div>Unlimited Quota</div>
                        </div>
                        <div class="mb-2"><strong class="text-danger fw-bold display-5">150rb</strong> /Bulan</div>
                    </div>
                </div>
                <div class="col-6 p-4">
                    <div class="d-flex flex-column justify-content-center align-items-center h-100">
                        <h4 class="mb-3">What's Included</h4>
                        <div class="d-flex gap-2 mb-2">
                            <div class="text-start text-danger">
                                <i class="fa-solid fa-circle-check fa-xl d-inline-block"></i>
                            </div>
                            <div class="text-start">
                                Up to <strong>250,000</strong>
                                tracked visits
                            </div>
                        </div>
                        <div class="d-flex gap-2 mb-2">
                            <div class="text-start text-danger">
                                <i class="fa-solid fa-circle-check fa-xl d-inline-block"></i>
                            </div>
                            <div class="text-start">
                                Up to <strong>250,000</strong>
                                tracked visits
                            </div>
                        </div>
                        <div class="d-flex gap-2 mb-2">
                            <div class="text-start text-danger">
                                <i class="fa-solid fa-circle-check fa-xl d-inline-block"></i>
                            </div>
                            <div class="text-start">
                                Up to <strong>250,000</strong>
                                tracked visits
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <button class="btn btn-danger px-5 mt-n4">Daftar Paket</button>
        </div>
        
    </div>
    <div class="row">
        <div class="col-md-6 px-3">
            <div class="d-flex gap-0 rounded-4 shadow-lg overflow-hidden">
                <div class="col-6  p-4 bg-white">
                    <div class="d-flex gap-3 align-items-start flex-md-column justify-content-center">
                        <img src="/images/logo/big-warna-full.png" alt="logo bignet" height="70">
                        <div class="text-start lh-1">
                            <h4>Paket <strong>Dasar 1</strong></h4>
                            <small class="fs-6">Full Fiber To The Home</small>
                        </div>
                    </div>
                    <div class="d-flex mt-3 justify-content-between flex-md-column align-items-start gap-3">
                        <div class="text-start">
                            <div>Up To <strong class="text-danger">10 Mbps</strong></div>
                            <div>Download/Upload</div>
                            <div>Unlimited Quota</div>
                        </div>
                        <div class="mb-2"><strong class="text-danger fw-bold display-5">150rb</strong> /Bulan</div>
                    </div>
                </div>
                <div class="col-6 p-4">
                    <div class="d-flex flex-column justify-content-center align-items-center h-100">
                        <h4 class="mb-3">What's Included</h4>
                        <div class="d-flex gap-2 mb-2">
                            <div class="text-start text-danger">
                                <i class="fa-solid fa-circle-check fa-xl d-inline-block"></i>
                            </div>
                            <div class="text-start">
                                Up to <strong>250,000</strong>
                                tracked visits
                            </div>
                        </div>
                        <div class="d-flex gap-2 mb-2">
                            <div class="text-start text-danger">
                                <i class="fa-solid fa-circle-check fa-xl d-inline-block"></i>
                            </div>
                            <div class="text-start">
                                Up to <strong>250,000</strong>
                                tracked visits
                            </div>
                        </div>
                        <div class="d-flex gap-2 mb-2">
                            <div class="text-start text-danger">
                                <i class="fa-solid fa-circle-check fa-xl d-inline-block"></i>
                            </div>
                            <div class="text-start">
                                Up to <strong>250,000</strong>
                                tracked visits
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <button class="btn btn-danger px-5 mt-n4">Daftar Paket</button>
        </div>
        
        <div class="col-md-6 px-3">
            <div class="d-flex gap-0 rounded-4 shadow-lg overflow-hidden">
                <div class="col-6  p-4 bg-white">
                    <div class="d-flex gap-3 align-items-start flex-md-column justify-content-center">
                        <img src="/images/logo/big-warna-full.png" alt="logo bignet" height="70">
                        <div class="text-start lh-1">
                            <h4>Paket <strong>Dasar 1</strong></h4>
                            <small class="fs-6">Full Fiber To The Home</small>
                        </div>
                    </div>
                    <div class="d-flex mt-3 justify-content-between flex-md-column align-items-start gap-3">
                        <div class="text-start">
                            <div>Up To <strong class="text-danger">10 Mbps</strong></div>
                            <div>Download/Upload</div>
                            <div>Unlimited Quota</div>
                        </div>
                        <div class="mb-2"><strong class="text-danger fw-bold display-5">150rb</strong> /Bulan</div>
                    </div>
                </div>
                <div class="col-6 p-4">
                    <div class="d-flex flex-column justify-content-center align-items-center h-100">
                        <h4 class="mb-3">What's Included</h4>
                        <div class="d-flex gap-2 mb-2">
                            <div class="text-start text-danger">
                                <i class="fa-solid fa-circle-check fa-xl d-inline-block"></i>
                            </div>
                            <div class="text-start">
                                Up to <strong>250,000</strong>
                                tracked visits
                            </div>
                        </div>
                        <div class="d-flex gap-2 mb-2">
                            <div class="text-start text-danger">
                                <i class="fa-solid fa-circle-check fa-xl d-inline-block"></i>
                            </div>
                            <div class="text-start">
                                Up to <strong>250,000</strong>
                                tracked visits
                            </div>
                        </div>
                        <div class="d-flex gap-2 mb-2">
                            <div class="text-start text-danger">
                                <i class="fa-solid fa-circle-check fa-xl d-inline-block"></i>
                            </div>
                            <div class="text-start">
                                Up to <strong>250,000</strong>
                                tracked visits
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <button class="btn btn-danger px-5 mt-n4">Daftar Paket</button>
        </div>
        
    </div>
</section>

@endsection

@push('js')
<script>
    // inits

    // functions
    function deviceTransform() {
        if (detectBreakpoint() <= 2) {
        } else {
        }
    }

    // caller

    // listeners
    window.addEventListener('resize', function () {
        deviceTransform()
    });

    document.addEventListener('DOMContentLoaded', function () {
        deviceTransform()
    });


</script>
@endpush