@extends('admin.layouts.app')
@push('css')
@endpush
@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Galeri Internal</h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="/admin/home">
                        <i class="flaticon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Galeri</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Galeri Internal</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Daftar Foto Internal</h4>
                            <button class="btn btn-primary btn-round ml-auto" data-toggle="modal"
                                data-target="#addRowModal">
                                <i class="fa fa-plus"></i>
                                Tambah Foto
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="galeriTable" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Foto</th>
                                        <th>Judul</th>
                                        <th>Sub Judul</th>
                                        <th style="width: 0"></th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Foto</th>
                                        <th>Judul</th>
                                        <th>Sub Judul</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($galeris as $galeri)
                                        <tr>
                                            <td>{{ $galeri->id }}</td>
                                            <td>
                                                <img src="/storage/images/{{ $galeri->foto }}" height="150" />
                                            </td>
                                            <td>{{ $galeri->title }}</td>
                                            <td>{{ $galeri->subtitle }}</td>
                                            <td>
                                                <div class="form-button-action" data-galeri="{{ $galeri->id }}">
                                                    <button type="button" data-toggle="tooltip" title=""
                                                        class="btn-edit btn btn-link btn-primary p-2"
                                                        data-original-title="Edit galeri" data-galeri="{{ $galeri->id }}">
                                                        <i class="fa fa-edit" data-galeri="{{ $galeri->id }}"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip" title=""
                                                        class="btn-hapus btn btn-link btn-danger p-2"
                                                        data-original-title="Hapus" data-galeri="{{ $galeri->id }}">
                                                        <i class="fa fa-times" data-galeri="{{ $galeri->id }}"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header no-bd">
                    <h5 class="modal-title">Tambah Foto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"></li>
                    </ul>
                    <div class="alert alert-danger p-0 d-none" role="alert" id="errList">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"></li>
                        </ul>
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                    <label for="headerImage">Foto</label>
                                    <div class="d-flex align-items-end">
                                        <img src="{{ asset('storage/images/dummy.jpg') }}" alt="Preview"
                                            style="max-width: 200px" id="foto-preview" />
                                        <input type="file" id="foto" class="form-control-file ml-3" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                    <label>Judul</label>
                                    <input id="title" type="text" class="form-control" placeholder="Judul Foto" />
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                    <label>Sub Judul</label>
                                    <input id="subtitle" type="text" class="form-control"
                                        placeholder="Sub Judul Foto" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer no-bd">
                    <button type="button" id="addgaleriButton" class="btn btn-primary">
                        Add
                    </button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    input.previousElementSibling.src = e.target.result;
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        $(document).ready(() => {
            const galeris = @json($galeris);
            let is_edit = 0;
            let id_galeri = 0;
            $(".form-control-file").change(function(e) {
                e.preventDefault();
                readURL(this);
            });

            $("#galeriTable").DataTable({
                order: [
                    [0, 'desc']
                ]
            });

            $("#addgaleriButton").click(function() {
                var formData = new FormData();
                formData.append('id', id_galeri);
                formData.append('is_edit', is_edit);
                formData.append('foto', $('#foto')[0].files[0]);
                formData.append('jenis', 1);
                formData.append('title', $("#title").val());
                formData.append('subtitle', $("#subtitle").val());

                $.ajaxSetup({
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                    },
                    processData: false,
                    contentType: false,
                });

                $.ajax({
                    url: "galeri",
                    type: "POST",
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        console.log(response);
                        if (response.status == 201) {
                            $("#addRowModal").modal("hide");
                            swal("Berhasil!", response.message, {
                                icon: "success",
                                buttons: false,
                                timer: 1500
                            });
                            setTimeout(() => {
                                location.reload()
                            }, 1000);
                        } else {
                            $('#errList').removeClass('d-none');
                            let errList = '';

                            for (const err in response.errors) {
                                if (Object.hasOwnProperty.call(response.errors, err)) {
                                    const e = response.errors[err];
                                    errList += `<li class="list-group-item">${e}</li>`;
                                }
                            }

                            // Set the escaped text content using $.text()
                            $('#errList .list-group').empty().append(errList);

                        }
                    },
                });
            });
            $('.btn-edit').on('click', (e) => {
                is_edit = 1;
                id_galeri = $(e.target).data('galeri');
                let galeri = null;
                for (let i = 0; i < galeris.length; i++) {
                    if (galeris[i].id === id_galeri) {
                        galeri = galeris[i];
                        break;
                    }
                }
                // $("#foto").val(galeri.foto);
                $("#foto-preview").attr('src', '/storage/images/' + galeri.foto);
                $("#title").val(galeri.title);
                $("#subtitle").val(galeri.subtitle);
                $('#addRowModal').modal('show');
            });
            $('.btn-hapus').on('click', (e) => {
                id_galeri = $(e.target).data('galeri');

                // Display a confirmation dialog
                swal({
                    title: "Apakah Anda yakin?",
                    text: "galeri ini akan dihapus.",
                    icon: "warning",
                    buttons: ["Batal", "Hapus"],
                    dangerMode: true,
                }).then((willDelete) => {
                    if (willDelete) {
                        // User confirmed deletion
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            url: 'galeri',
                            type: 'DELETE',
                            data: {
                                id: id_galeri,
                            },
                            success: function(response) {
                                if (response.status == 201) {
                                    $('#addRowModal').modal('hide');
                                    swal("Berhasil", response.message, {
                                        icon: "success",
                                        buttons: false,
                                        timer: 2000
                                    });
                                    setTimeout(() => {
                                        location.reload();
                                    }, 1000);
                                } else {
                                    swal("Gagal", response.message, {
                                        icon: "error",
                                        buttons: false,
                                        timer: 2000
                                    });
                                }
                            },
                            error: function(xhr, status, error) {
                                console.log('Error:', error);
                            }
                        });
                    }
                });
            });

        });
    </script>
@endpush
