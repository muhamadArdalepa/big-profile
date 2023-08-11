@extends('public.layouts.app')
@push('css')
    <style>
        #client-list>* {
            transition: 500ms;
        }
    </style>
@endpush
@section('content')
    <div class="" id="Tentang"></div>
    <section class=" text-center bg-header" id="header">
        <div class="py-5 px-4 h-100" style="background-image: linear-gradient(to bottom,#df1c2d,transparent)">
            <h1 id="headerTitle" class="fw-bold text-white m-0 my-5 pb-5">
                Tentang Bignet
            </h1>
        </div>
    </section>
    <section class="mt-n5 container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="border border-white shadow-lg" style="border-width: .5rem !important;">
                    <img src="/storage/images/{{ $info->tentang_foto }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5 container pb-5">
        <p>{!! $info->tentang !!}</p>
        <div class="" id="Histori"></div>
    </section>
    <section class="container py-5">
        <h3 class="fw-bold mb-3 text-center">Histori <span class="text-danger">BIGNET</span></h3>
        <div class="row">
            <div class="col-md-6">
                <img src="/storage/images/{{ $info->histori_foto }}" class="img-fluid">
            </div>
            <div class="col-md-6">
                <p>{!! $info->histori !!}
                </p>
            </div>
        </div>
        <div class="" id="KerjaSama"></div>

    </section>

    <section class="text-center py-5">
        <h3 class="fw-bold mb-3">Kerja Sama <span class="text-danger">BIGNET</span></h3>
        <div class="client-container overflow-hidden">
            <div id="client-list" class="d-flex">
                @foreach ($partners as $partner)
                    <div class="p-5">
                        <img src="{{ asset('storage/images/' . $partner->logo) }}" height="100">
                    </div>
                @endforeach

            </div>
        </div>
        <div class="" id="Hubungi"></div>
    </section>
    <section class="text-center py-5 container">
        <h3 class="fw-bold mb-3">Hubungi <span class="text-danger">BIGNET</span></h3>
        <div class="row">
            <div class="col-md-6">
                <form action="/admin/pesan" method="post">
                    <div class="form-group mb-3 ">
                        <input name="nama" type="text" class="form-control rounded-0" placeholder="Nama">
                    </div>
                    <div class="form-group mb-3 ">
                        <input name="email" type="text" class="form-control rounded-0" placeholder="Email">
                    </div>
                    <div class="form-group mb-3 ">
                        <input name="telepon" type="text" class="form-control rounded-0" placeholder="Nomor Telepon">
                    </div>
                    <div class="form-group mb-3 ">
                        <input name="how" type="text" class="form-control rounded-0" placeholder="How did you find us">
                    </div>
                    <div class="form-group mb-3 ">
                        <textarea name="pesan" rows="4" class="form-control rounded-0" placeholder="Pesan"></textarea>
                    </div>
                    <button class="btn btn-danger w-100 rounded-0 mb-3">SEND</button>
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center gap-3">
                            <i class="fa-solid fa-phone-volume fa-xl"></i>
                            <div class="text-start">
                                <div class="fw-bold lh-sm">Phone</div>
                                <small class="text-danger">{{ $kontak->telepon }}</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                            <i class="fa-solid fa-fax fa-xl"></i>
                            <div class="text-start">
                                <div class="fw-bold lh-sm">Fax</div>
                                <small class="text-danger">{{ $kontak->fax }}</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                            <i class="fa-solid fa-envelope-open-text fa-xl"></i>
                            <div class="text-start">
                                <div class="fw-bold lh-sm">Email</div>
                                <small class="text-danger">{{ $kontak->email }}</small>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1994.9078914280246!2d111.51626633335593!3d0.06461941390482012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31fe212b16b8ebdd%3A0x652e0762c3755165!2sBIG.NET%20SINTANG!5e0!3m2!1sen!2sid!4v1691562051769!5m2!1sen!2sid"
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                    class="w-100 h-100"></iframe>
            </div>
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

        // caller
        setTimeout(() => {
            setInterval(() => {
                scrollClientList();
            }, 2000);
        }, 500);

        // listeners
        window.addEventListener("resize", function() {
            deviceTransform();
        });

        document.addEventListener("DOMContentLoaded", function() {
            deviceTransform();
        });
    </script>
@endpush
