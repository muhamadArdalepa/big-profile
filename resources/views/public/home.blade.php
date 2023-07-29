@extends('public.layouts.app')

@push('css')
<style>
    #client-list>* {
        transition: 500ms;
    }
</style>
@endpush

@section('content')
<section class="py-5 px-4"
    style="background-image: url('/storage/images/{{$home->bg_image}}');background-size: cover; background-position: center center;"
    id="header">
    <div class="container h-100 d-flex flex-column justify-content-center align-items-center align-items-md-start">
        <h1 id="headerTitle"
            class="align-items-center align-items-md-start fs-4 d-flex flex-column fw-bold text-white lh-1 ">
                {{$home->title}}
        </h1>
        <h2 id="headerSubtitle" class="text-white fs-6 text-center text-md-start col-md-6">{{$home->subtitle}}</h2>
    </div>
</section>

<section class="container px-4 py-5 mt-n3 mt-md-n5">
    <div class="bg-white p-4 p-md-5 shadow mt-n5">
        <div class="row align-items-center">
            <div
                class="col-md-6 d-flex align-items-center justify-content-center justify-content-md-start  gap-2 gap-md-3">
                <img src="images/shield.png" id="pirkkImg">
                <h3 class="lh-1 text-danger fw-bold fs-5" id="pirkk">
                    <div>Percayakan Internet</div>
                    <div> rumah kepada kami</div>
                </h3>
            </div>

            <div class="col-md-6 text-danger">
                <div class="d-flex justify-content-between justify-content-md-end gap-3">
                    <div class="text-center">
                        <h3 class="fw-bold">67+</h3>
                        <small class="text-muted">Karyawan</small>
                    </div>
                    <div class="text-center">
                        <h3 class="fw-bold">1500+</h3>
                        <small class="text-muted">User</small>
                    </div>
                    <div class="text-center">
                        <h3 class="fw-bold">27+</h3>
                        <small class="text-muted">Partners</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="text-center mt-n3 container">
    <div class="row align-items-center">
        <div class="col-md-5 text-end">
            <img src="/images/keunggulan.svg" alt="" height="250" id="keunggulanImg">
        </div>
        <div class="col-md-7 text-center text-md-start">
            <h3 class="fw-bold mb-3">Keunggulan <span class="text-danger">BIGNET</span></h3>
            <p class="text-muted lh-sm">
                Lorem ipsum dolor sit amet consectetur. Ultricies dictum tellus dolor adipiscing vitae orci cursus
                ultricies tempor. Tempor amet enim risus non.
            </p>
            <div class="d-flex gap-2 text-danger text-start">
                <div class="d-flex align-items-center gap-2">
                    <img src="/images/Chield_check.png" height="30">
                    <h4 class="fw-bold fs-6">Aman dan Terpercaya</h4>
                </div>

                <div class="d-flex align-items-center gap-2">
                    <img src="/images/Wallet.png" height="30">
                    <h4 class="fw-bold fs-6">Ramah Dikantong</h4>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <img src="/images/Chart_alt.png" height="30">
                    <h4 class="fw-bold fs-6">Internet Cepat</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="text-center container">
    <div class="row align-items-center text-md-end flex-column-reverse flex-md-row">
        <div class="col-md-7">
            <h3 class="fw-bold mb-3">Tentang <span class="text-danger">BIGNET</span></h3>
            <h4 class="fw-bold mb-2">Visi</h4>
            <p class="text-muted lh-sm">
                Lorem ipsum dolor sit amet consectetur. Ultricies dictum tellus dolor adipiscing vitae orci cursus
                ultricies tempor. Tempor amet enim risus non.
            </p>
            <h4 class="fw-bold mb-2">Misi</h4>
            <p class="text-muted lh-sm">
                Lorem ipsum dolor sit amet consectetur. Ultricies dictum tellus dolor adipiscing vitae orci cursus
                ultricies tempor. Tempor amet enim risus non.
            </p>
        </div>
        <div class="col-md-5 text-start">
            <img src="/images/tentang.svg" alt="" height="250" id="tentangImg">
        </div>
</section>

<section class="container text-center py-5">
    <h3 class="fw-bold mb-3">Pilihan Paket <span class="text-danger">BIGNET</span></h3>
    <p class="text-muted lh-sm">Berbagai Paket yang dapat sesuai dengan layanan kebutuhan internet dan multimedia anda
    </p>
    <div class="row">
        <div class="col-md-4 offset-md-2 col-lg-3 offset-lg-3 ">
            <div class="rounded-4 shadow-lg p-4 ">
                <div class="d-flex gap-3 align-items-end align-items-center flex-md-column justify-content-center">
                    <img src="/images/logo/big-warna-full.png" alt="logo bignet" height="70">
                    <div class="fs-5 text-start text-md-center lh-1">
                        <h4>Paket <strong>Dasar 1</strong></h4>
                        <small class="fs-6">Full Fiber To The Home</small>
                    </div>
                </div>
                <div class="d-flex mt-3 justify-content-between flex-md-column align-items-center gap-3">
                    <div class="">
                        <div>Up To <strong class="text-danger">10 Mbps</strong></div>
                        <div>Download/Upload</div>
                        <div>Unlimited Quota</div>
                    </div>
                    <div class="flex-grow-1">
                        <div class="mb-2"><strong class="text-danger fw-bold display-5">150rb</strong> /Bulan</div>
                        <button class="btn btn-danger w-100">Daftar Paket</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4  col-lg-3 ">
            <div class="rounded-4 shadow-lg p-4 ">
                <div class="d-flex gap-3 align-items-end align-items-center flex-md-column justify-content-center">
                    <img src="/images/logo/big-warna-full.png" alt="logo bignet" height="70">
                    <div class="fs-5 text-start text-md-center lh-1">
                        <h4>Paket <strong>Dasar 1</strong></h4>
                        <small class="fs-6">Full Fiber To The Home</small>
                    </div>
                </div>
                <div class="d-flex mt-3 justify-content-between flex-md-column align-items-center gap-3">
                    <div class="">
                        <div>Up To <strong class="text-danger">10 Mbps</strong></div>
                        <div>Download/Upload</div>
                        <div>Unlimited Quota</div>
                    </div>
                    <div class="flex-grow-1">
                        <div class="mb-2"><strong class="text-danger fw-bold display-5">150rb</strong> /Bulan</div>
                        <button class="btn btn-danger w-100">Daftar Paket</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="text-center py-5">
    <h3 class="fw-bold mb-3">Client <span class="text-danger">BIGNET</span></h3>
    <div class="client-container overflow-hidden">
        <div id="client-list" class="d-flex">
            <div class="p-5">
                <img src="{{asset('images/client/iconnet.png')}}" height="100">
            </div>
            <div class="p-5">
                <img src="{{asset('images/client/sipil.png')}}" height="100">
            </div>
            <div class="p-5">
                <img src="{{asset('images/client/iconnet.png')}}" height="100">
            </div>
            <div class="p-5">
                <img src="{{asset('images/client/sipil.png')}}" height="100">
            </div>
            <div class="p-5">
                <img src="{{asset('images/client/iconnet.png')}}" height="100">
            </div>
            <div class="p-5">
                <img src="{{asset('images/client/sipil.png')}}" height="100">
            </div>
        </div>
    </div>
</section>

@endsection

@push('js')
<script>
    // inits
    const header = document.getElementById('header');
    const navbarHeight = navbar.offsetHeight;

    // functions
    function scrollClientList() {
        let el = document.getElementById('client-list').children[0];
        el.style.marginLeft = `-${el.offsetWidth}px`;

        setTimeout(() => {
            console.log('pindah');
            var clientParent = document.getElementById('client-list');
            clientParent.insertBefore(el, null);
            el.style.marginLeft = '';
        }, 500);
    }

    function deviceTransform() {
        if (detectBreakpoint() <= 2) {
            header.style.height = `calc(50vh + ${navbarHeight}px)`
            document.getElementById('headerTitle').classList.add('fs-4')
            document.getElementById('headerSubtitle').classList.add('fs-6')
            document.getElementById('pirkkImg').height = '40'
            document.getElementById('tentangImg').height = '250'
            document.getElementById('keunggulanImg').height = '250'
            document.getElementById('pirkk').classList.add('fs-5')
        } else {
            header.style.height = `calc(100vh - ${navbarHeight}px)`
            document.getElementById('headerTitle').classList.remove('fs-4')
            document.getElementById('headerSubtitle').classList.remove('fs-6')
            document.getElementById('pirkkImg').height = '60'
            document.getElementById('tentangImg').height = '425'
            document.getElementById('keunggulanImg').height = '425'
            document.getElementById('pirkk').classList.remove('fs-5')
        }
    }

    // caller
    setTimeout(() => {
        setInterval(() => {
            scrollClientList();
        }, 2000);
    }, 500);

    // listeners
    window.addEventListener('resize', function () {
        deviceTransform()
    });

    document.addEventListener('DOMContentLoaded', function () {
        deviceTransform()
    });


</script>
@endpush