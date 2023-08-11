@extends('admin.layouts.app')
@push('css')
@endpush
@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Partner</h4>
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
                    <a href="#">Partner</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Daftar Partner</h4>
                            <button class="btn btn-primary btn-round ml-auto" data-toggle="modal"
                                data-target="#addRowModal">
                                <i class="fa fa-plus"></i>
                                Tambah Partner
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="dataTable" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Partner</th>
                                        <th>Logo</th>
                                        <th style="width: 0"></th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Partner</th>
                                        <th>Logo</th>
                                        <th style="width: 0"></th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($partners as $partner)
                                        <tr>
                                            <td>{{ $partner->id }}</td>
                                            <td>{{ $partner->nama }}</td>
                                            <td>
                                                <img src="/storage/images/{{ $partner->logo }}" height="150" />
                                            </td>
                                            <td>
                                                <div class="form-button-action" data-partner="{{ $partner->id }}">
                                                    <button type="button" data-toggle="tooltip" title=""
                                                        class="btn-edit btn btn-link btn-primary p-2"
                                                        data-original-title="Edit partner"
                                                        data-partner="{{ $partner->id }}">
                                                        <i class="fa fa-edit" data-partner="{{ $partner->id }}"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip" title=""
                                                        class="btn-hapus btn btn-link btn-danger p-2"
                                                        data-original-title="Hapus" data-partner="{{ $partner->id }}">
                                                        <i class="fa fa-times" data-partner="{{ $partner->id }}"></i>
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
                    <h5 class="modal-title">Tambah Partner</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger p-0 d-none" role="alert" id="errList">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"></li>
                        </ul>
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                    <label>Nama Partner</label>
                                    <input id="title" type="text" class="form-control" placeholder="Judul Foto" />
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                    <label for="headerImage">Logo</label>
                                    <div class="d-flex align-items-end">
                                        <img src="{{ asset('storage/images/dummy.jpg') }}" alt="Preview"
                                            style="max-width: 200px" id="foto-preview" />
                                        <input type="file" id="foto" class="form-control-file ml-3" />
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="modal-footer no-bd">
                    <button type="button" id="add" class="btn btn-primary">
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
            const partners = @json($partners);
            let is_edit = 0;
            let id_partner = 0;
            $(".form-control-file").change(function(e) {
                e.preventDefault();
                readURL(this);
            });

            $("#dataTable").DataTable({
                order: [
                    [0, 'desc']
                ]
            });

            $("#add").click(function() {
                var formData = new FormData();
                formData.append('id', id_partner);
                formData.append('is_edit', is_edit);
                formData.append('logo', $('#foto')[0].files[0]);
                formData.append('nama', $("#title").val());

                $.ajaxSetup({
                    headers: {
                        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                    },
                    processData: false,
                    contentType: false,
                });

                $.ajax({
                    url: "partner",
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
                id_partner = $(e.target).data('partner');
                let partner = null;
                for (let i = 0; i < partners.length; i++) {
                    if (partners[i].id === id_partner) {
                        partner = partners[i];
                        break;
                    }
                }
                // $("#foto").val(partner.foto);
                $("#foto-preview").attr('src', '/storage/images/' + partner.logo);
                $("#title").val(partner.nama);
                $('#addRowModal').modal('show');
            });
            $('.btn-hapus').on('click', (e) => {
                id_partner = $(e.target).data('partner');

                // Display a confirmation dialog
                swal({
                    title: "Apakah Anda yakin?",
                    text: "Partner ini akan dihapus.",
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
                            url: 'partner',
                            type: 'DELETE',
                            data: {
                                id: id_partner,
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
