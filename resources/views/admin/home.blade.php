@extends('admin.layouts.app')

@push('css')
@endpush

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">Home Setting</h4>
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
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Home Setting</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Header</div>
                </div>

                <form action="{{ route('home.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="form-group">
                            <label for="headerTitle">Judul Header</label>
                            <input type="text" name="headerTitle" class="form-control" id="headerTitle"
                                value="{{$home->title}}">
                        </div>
                        <div class="form-group">
                            <label for="headerSubTitle">Sub Judul Header</label>
                            <input type="text" name="headerSubtitle" class="form-control" id="headerSubtitle"
                                value="{{$home->subtitle}}">
                        </div>
                        <div class="form-group">
                            <label for="headerImage">Gambar Background Header</label>
                            <div class="d-flex align-items-end">
                                <img id="headerImagePreview" src="{{ asset('storage/images/'.$home->bg_image) }}" alt="Preview"
                                    style="max-width: 200px; margin-top: 10px;">
                                <input type="file" name="headerImage" class="form-control-file ml-3" id="headerImage">
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <button class="btn btn-success" type="submit">Submit</button>
                        <button class="btn btn-danger">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Card Info</div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="email2">Email Address</label>
                        <input type="email" class="form-control" id="email2" placeholder="Enter Email">
                        <small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
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

            reader.onload = function (e) {
                $('#headerImagePreview').attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    // Bind the readURL function to the file input change event
    $(document).ready(function () {
        $('#headerImage').change(function (e) {
            e.preventDefault(); // Prevent form submission
            readURL(this);
        });
    });
</script>
@endpush