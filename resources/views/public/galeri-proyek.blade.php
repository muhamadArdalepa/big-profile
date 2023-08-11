@extends('public.layouts.app')
@push('css')
    <style>
        #client-list>* {
            transition: 500ms;
        }

        .galeri-item {
            background-size: cover;
            background-position: center center;
            height: 100%;
            display: flex;
            justify-content: flex-end;
            flex-direction: column;
            text-decoration: none;
            color: white;
            transition: transform 150ms ease-in-out;
        }

        .galeri-item:hover {
            transform: translateY(-5px) scale(1);
        }

        .galeri-item>div {
            height: 50%;
            transition: height 150ms ease-in-out
        }

        .galeri-item:hover>div {
            height: 100%;
        }

        #galeriModal {
            z-index: 999999;
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 100vw;
            background-color: rgba(0, 0, 0, 0.7);
            display: none;
            opacity: 0;
            transition: opacity 150ms ease-in-out;
        }
    </style>
@endpush
@section('content')
    <section class="text-center bg-header"
        id="header">
        <div class="py-5 px-4 h-100" style="background-image: linear-gradient(to bottom,#df1c2d,transparent)">
            <h1 id="headerTitle" class="fw-bold text-white m-0 my-5">
                Galeri Proyek
            </h1>
        </div>
    </section>

    <section class="container py-5">
        <div class="row">
            @foreach ($fotos as $foto)
                <div class="col-sm-6 col-md-4 mb-4" style="height: 300px">
                    <a href="javascript:;" class="galeri-item"
                        style="background-image: url('/storage/images/{{ $foto->foto }}');">
                        <div data-imgpath="/storage/images/{{ $foto->foto }}"
                            class="d-flex flex-column justify-content-end p-3"
                            style="background-image: linear-gradient(to top, rgba(255, 0, 0, 1), rgba(255, 0, 0, 0));">
                            <div class="fw-bold">{{ $foto->title }}</div>
                            <small>{{ $foto->subtitle }}</small>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>
    </section>

    @push('modal')
        <div id="galeriModal" tabindex="-1">
            <div class="h-100" style="background-size: contain;background-repeat: no-repeat;background-position: center center"
                id="galeriImage">
            </div>
            <button class="position-absolute btn btn-link text-white btn-close-modal"
                style="top: 3rem;right: 3rem;mix-blend-mode: difference">
                <i class="fas fa-close fa-xl"></i>
            </button>
        </div>
    @endpush
@endsection
@push('js')
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script>
        // inits

        // functions
        function deviceTransform() {
            if (detectBreakpoint() <= 2) {} else {}
        }

        // listeners

        window.addEventListener("resize", function() {
            deviceTransform();
        });

        document.addEventListener("DOMContentLoaded", function() {
            deviceTransform();
        });

        $('.galeri-item').on('click', e => {
            $('#galeriImage').css('background-image', `url('${e.target.dataset.imgpath}')`);
            $('#galeriModal').css('display', 'block');
            $('body').css('overflow', 'hidden')
            setTimeout(() => {
                $('#galeriModal').css('opacity', 1);
            }, 1);
        })

        $('.btn-close-modal').on('click', e => {
            $('#galeriModal').css('opacity', 0);
            $('body').css('overflow', 'auto')
            setTimeout(() => {
                $('#galeriModal').css('display', 'none');
            }, 150);
        })

        $('#galeriModal').on('click', e => {
            if (e.target.id === 'galeriImage') {
                $('#galeriModal').css('opacity', 0);
                $('body').css('overflow', 'auto')
                setTimeout(() => {
                    $('#galeriModal').css('display', 'none');
                }, 150);
            }
        })
    </script>
@endpush
