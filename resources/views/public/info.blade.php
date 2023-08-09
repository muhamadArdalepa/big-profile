@extends('public.layouts.app')
@push('css')
    <style>
        #client-list>* {
            transition: 500ms;
        }
    </style>
@endpush
@section('content')
    <section class="py-5 px-4 text-center"
        style="background-image: url('/storage/images/home-bg.jpg');background-size: cover; background-position: center center;"
        id="header">
        <h1 id="headerTitle" class="fw-bold text-white m-0 my-5 pb-5">
            Tentang Bignet
        </h1>
    </section>
    <section class="mt-n5 container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="border border-white shadow-lg" style="border-width: .5rem !important;">
                    <img src="/storage/images/home-bg.jpg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="mt-5 container">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor porro natus labore consequuntur! Fugit recusandae
            amet nihil illo pariatur, eum doloribus facilis facere ad delectus repellat vitae veritatis non placeat impedit,
            sequi illum quam maiores tenetur optio, reiciendis numquam ex aliquam? Facere iure totam assumenda debitis
            consequatur esse quam quae, ipsam exercitationem aspernatur? Pariatur eaque eum sit, sunt vero voluptate
            molestias, nam totam optio voluptates repellat. Cupiditate iste veniam illo minima, deleniti aliquid eligendi
            eius debitis modi nemo ullam vero repellendus quibusdam aliquam nihil enim, unde corporis iusto eveniet! Hic
            ullam, nobis delectus repellat expedita numquam explicabo reiciendis quia saepe.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor porro natus labore consequuntur! Fugit recusandae
            amet nihil illo pariatur, eum doloribus facilis facere ad delectus repellat vitae veritatis non placeat impedit,
            sequi illum quam maiores tenetur optio, reiciendis numquam ex aliquam? Facere iure totam assumenda debitis
            consequatur esse quam quae, ipsam exercitationem aspernatur? Pariatur eaque eum sit, sunt vero voluptate
            molestias, nam totam optio voluptates repellat. Cupiditate iste veniam illo minima, deleniti aliquid eligendi
            eius debitis modi nemo ullam vero repellendus quibusdam aliquam nihil enim, unde corporis iusto eveniet! Hic
            ullam, nobis delectus repellat expedita numquam explicabo reiciendis quia saepe.</p>
    </section>
    <section class="container py-5">
        <h3 class="fw-bold mb-3 text-center">Histori <span class="text-danger">BIGNET</span></h3>
        <div class="row">
            <div class="col-md-6">
                <img src="/storage/images/home-bg.jpg" class="img-fluid">
            </div>
            <div class="col-md-6">
                <p>
                    Lorem ipsum dolor sit amet consectetur. Integer at nunc facilisi commodo non pulvinar gravida. Tempor
                    non eget nisi ac rhoncus dictum viverra sit velit. Turpis sed maecenas aliquam ornare sit cursus
                    molestie. Blandit id aliquam non tellus porta sit tellus in. Elementum nisi pellentesque quam tincidunt
                    porta eget orci augue egestas. Sit at arcu iaculis in egestas vitae sem urna et. Cursus sed vivamus
                    pretium sit tristique diam hac. Vitae montes ut est odio purus elementum tortor id quisque. Amet eros
                    justo amet diam commodo enim urna donec.
                </p>
            </div>
        </div>
    </section>

    <section class="text-center py-5">
        <h3 class="fw-bold mb-3">Kerja Sama <span class="text-danger">BIGNET</span></h3>
        <div class="client-container overflow-hidden">
            <div id="client-list" class="d-flex">
                <div class="p-5">
                    <img src="{{ asset('images/client/iconnet.png') }}" height="100">
                </div>
                <div class="p-5">
                    <img src="{{ asset('images/client/sipil.png') }}" height="100">
                </div>
                <div class="p-5">
                    <img src="{{ asset('images/client/iconnet.png') }}" height="100">
                </div>
                <div class="p-5">
                    <img src="{{ asset('images/client/sipil.png') }}" height="100">
                </div>
                <div class="p-5">
                    <img src="{{ asset('images/client/iconnet.png') }}" height="100">
                </div>
                <div class="p-5">
                    <img src="{{ asset('images/client/sipil.png') }}" height="100">
                </div>
            </div>
        </div>
    </section>
    <section class="text-center py-5 container">
        <h3 class="fw-bold mb-3">Hubungi <span class="text-danger">BIGNET</span></h3>
        <div class="row">
            <div class="col-md-6">
                <form action="" method="post">
                    <div class="form-group mb-3 ">
                        <input type="text" class="form-control rounded-0" placeholder="Nama">
                    </div>
                    <div class="form-group mb-3 ">
                        <input type="text" class="form-control rounded-0" placeholder="Email">
                    </div>
                    <div class="form-group mb-3 ">
                        <input type="text" class="form-control rounded-0" placeholder="Nomor Telepon">
                    </div>
                    <div class="form-group mb-3 ">
                        <select name="" id="" class="form-control rounded-0">
                            <option value="">How did you find us</option>
                            <option value="">How did you find us</option>
                            <option value="">How did you find us</option>
                            <option value="">How did you find us</option>
                            <option value="">How did you find us</option>
                        </select>
                    </div>
                    <button class="btn btn-danger w-100 rounded-0 mb-3">SEND</button>
                </form>
            </div>
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1994.9078914280246!2d111.51626633335593!3d0.06461941390482012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31fe212b16b8ebdd%3A0x652e0762c3755165!2sBIG.NET%20SINTANG!5e0!3m2!1sen!2sid!4v1691562051769!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-100 h-100"></iframe>
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
