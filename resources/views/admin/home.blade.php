@extends('admin.layouts.app')

@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Dashboard</h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="#">
                        <i class="flaticon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Dashboard</a>
                </li>
            </ul>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger p-0" role="alert">
                <ul class="list-group list-group-flush">
                    @foreach ($errors->all() as $error)
                        <li class="list-group-item">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <div class="card-title">Home</div>
                        <button class="btn btn-success ml-auto" type="button"
                            onclick="document.getElementById('homeSubmit').click()">Simpan</button>
                    </div>

                    <form action="{{ route('admin.home.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="headerTitle">Judul Header</label>
                                <input type="text" name="headerTitle" class="form-control" id="headerTitle"
                                    value="{{ $home->title }}">
                            </div>
                            <div class="form-group">
                                <label for="headerSubtitle">Sub Judul Header</label>
                                <textarea class="form-control" name="headerSubtitle" id="headerSubtitle" rows="3">{{ $home->subtitle }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="headerImage">Gambar Background Header</label>
                                <div class="d-flex align-items-end">
                                    <img id="headerImagePreview" src="{{ asset('storage/images/' . $home->bg_image) }}"
                                        alt="Preview" style="max-width: 200px; margin-top: 10px;">
                                    <input type="file" name="headerImage" class="form-control-file ml-3"
                                        id="headerImage">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="karyawan">Karyawan</label>
                                <input type="number" name="karyawan" class="form-control" id="karyawan"
                                    value="{{ $home->karyawan }}">
                            </div>
                            <div class="form-group">
                                <label for="user">User</label>
                                <input type="number" name="user" class="form-control" id="user"
                                    value="{{ $home->user }}">
                            </div>
                            <div class="form-group">
                                <label for="partner">partner</label>
                                <input type="number" name="partner" class="form-control" id="partner"
                                    value="{{ $home->partner }}">
                            </div>
                            <div class="form-group">
                                <label for="keunggulan">Keunggulan Bignet</label>
                                <textarea class="form-control" name="keunggulan" id="keunggulan" rows="3">{{ $home->keunggulan }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="visi">Visi</label>
                                <textarea class="form-control" name="visi" id="visi" rows="3">{{ $home->visi }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="misi">Misi</label>
                                <textarea class="form-control" name="misi" id="misi" rows="3">{{ $home->visi }}</textarea>
                            </div>
                        </div>
                        <div class="card-action text-right">
                            <button class="btn btn-success" type="submit" id="homeSubmit">Simpan</button>
                        </div>
                    </form>
                </div>
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <div class="card-title">Kontak</div>
                        <button class="btn btn-success ml-auto" type="button"
                            onclick="document.getElementById('kontakSubmit').click()">Simpan</button>
                    </div>
                    <form action="{{ route('admin.kontak.update') }}" method="post" >
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label class="text-capitalize" for="telepon">telepon</label>
                                <input type="text" class="form-control" name="telepon" value="{{$kontak->telepon}}">
                            </div>
                            <div class="form-group">
                                <label class="text-capitalize" for="fax">fax</label>
                                <input type="text" class="form-control" name="fax" value="{{$kontak->fax}}">
                            </div>
                            <div class="form-group">
                                <label class="text-capitalize" for="email">email</label>
                                <input type="text" class="form-control" name="email" value="{{$kontak->email}}">
                            </div>
                            <div class="form-group">
                                <label class="text-capitalize" for="whatsapp">whatsapp</label>
                                <input type="text" class="form-control" name="whatsapp" value="{{$kontak->whatsapp}}">
                            </div>
                           
                           
                        </div>
                        <div class="card-action text-right">
                            <button class="btn btn-success" type="submit" id="kontakSubmit">Simpan</button>
                        </div>
                    </form>
    
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <div class="card-title">Info</div>
                        <button class="btn btn-success ml-auto" type="button"
                            onclick="document.getElementById('infoSubmit').click()">Simpan</button>
                    </div>
                    <form action="{{ route('admin.info.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="tentang">Tentang</label>
                                <div class="d-flex align-items-end mb-3">
                                    <img src="{{ asset('storage/images/' . $info->tentang_foto) }}" alt="Preview"
                                        style="max-width: 200px;">
                                    <input type="file" name="tentang_foto" class="form-control-file ml-3">
                                </div>
                                <textarea class="form-control" name="tentang" id="tentang" rows="20">{{ $info->tentang }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="histori">Histori</label>
                                <div class="d-flex align-items-end mb-3">
                                    <img src="{{ asset('storage/images/' . $info->histori_foto) }}" alt="Preview"
                                        style="max-width: 200px;">
                                    <input type="file" name="histori_foto" class="form-control-file ml-3">
                                </div>
                                <textarea class="form-control" name="histori" id="histori" rows="10">{{ $info->histori }}</textarea>
                            </div>
                        </div>
                        <div class="card-action text-right">
                            <button class="btn btn-success" type="submit" id="infoSubmit">Simpan</button>
                        </div>
                    </form>

                </div>
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <div class="card-title">Media Sosial</div>
                        <button class="btn btn-success ml-auto" type="button"
                            onclick="document.getElementById('sosmedSubmit').click()">Simpan</button>
                    </div>
                    <form action="{{ route('admin.sosmed.update') }}" method="post" >
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label class="text-capitalize" for="facebook">facebook</label>
                                <input type="text" class="form-control" name="facebook" value="{{$kontak->facebook}}">
                            </div>
                            <div class="form-group">
                                <label class="text-capitalize" for="twitter">twitter</label>
                                <input type="text" class="form-control" name="twitter" value="{{$kontak->twitter}}">
                            </div>
                            <div class="form-group">
                                <label class="text-capitalize" for="instagram">instagram</label>
                                <input type="text" class="form-control" name="instagram" value="{{$kontak->instagram}}">
                            </div>
                            <div class="form-group">
                                <label class="text-capitalize" for="linked">linked</label>
                                <input type="text" class="form-control" name="linked" value="{{$kontak->linked}}">
                            </div>
                            <div class="form-group">
                                <label class="text-capitalize" for="youtube">youtube</label>
                                <input type="text" class="form-control" name="youtube" value="{{$kontak->youtube}}">
                            </div>
                           
                        </div>
                        <div class="card-action text-right">
                            <button class="btn btn-success" type="submit" id="kontakSubmit">Simpan</button>
                        </div>
                    </form>
    
                </div>
            </div>
        </div>

    </div>

    </div>
@endsection

@push('js')
    <script>
        // Function to display image preview when file input changes
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    input.previousElementSibling.src = e.target.result;
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        // Bind the readURL function to the file input change event
        $(document).ready(function() {
            $('.form-control-file').change(function(e) {
                e.preventDefault(); // Prevent form submission
                readURL(this);
            });
        });
    </script>
@endpush
