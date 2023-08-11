@extends('admin.layouts.app')

@push('css')
@endpush

@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Paket</h4>
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
                    <a href="/admin/paket">Paket</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Paket</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Daftar Paket</h4>
                            <button class="btn btn-primary btn-round ml-auto" data-toggle="modal"
                                data-target="#addRowModal">
                                <i class="fa fa-plus"></i>
                                Tambah Paket
                            </button>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table id="paketTable" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Paket</th>
                                        <th>Deskripsi</th>
                                        <th>kecepatan</th>
                                        <th>Harga</th>
                                        <th>Kelebihan</th>
                                        <th style="width: 0"></th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Paket</th>
                                        <th>Deskripsi</th>
                                        <th>kecepatan</th>
                                        <th>Harga</th>
                                        <th>Kelebihan</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($pakets as $paket)
                                        <tr>
                                            <td>{{ $paket->id }}</td>
                                            <td>{{ $paket->title }}</td>
                                            <td>{{ $paket->subtitle }}</td>
                                            <td>{{ $paket->kecepatan }}</td>
                                            <td>{{ $paket->harga }}</td>
                                            <td>{{ $paket->include }}</td>
                                            <td>
                                                <div class="form-button-action" data-paket="{{ $paket->id }}">
                                                    <button type="button" data-toggle="tooltip" title=""
                                                        class="btn-edit btn btn-link btn-primary p-2"
                                                        data-original-title="Edit Paket" data-paket="{{ $paket->id }}">
                                                        <i class="fa fa-edit" data-paket="{{ $paket->id }}"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip" title=""
                                                        class="btn-hapus btn btn-link btn-danger p-2"
                                                        data-original-title="Hapus" data-paket="{{ $paket->id }}">
                                                        <i class="fa fa-times" data-paket="{{ $paket->id }}"></i>
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
                    <h5 class="modal-title">
                        Tambah Paket
                    </h5>
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
                                    <label>Nama Paket</label>
                                    <input id="title" type="text" class="form-control" placeholder="isi nama paket">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-group-default">
                                    <label>Harga</label>
                                    <input id="harga" type="number" class="form-control" placeholder="isi harga paket">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-group-default">
                                    <label>Kecepatan</label>
                                    <input id="kecepatan" type="number" class="form-control" placeholder="isi harga paket">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group form-group-default">
                                    <label>Deskripsi</label>
                                    <input id="subtitle" type="text" class="form-control" placeholder="fill position">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group form-group-default">
                                    <label>Kelebihan</label>
                                    <input id="include" type="text" class="form-control" placeholder="fill position">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer no-bd">
                    <button type="button" id="addPaketButton" class="btn btn-primary">Add</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(() => {
            const pakets = @json($pakets);
            let is_edit = 0;
            let id_paket = 0;
            $('#paketTable').DataTable({
                order: [
                    [0, 'desc']
                ]
            });
            $('#addPaketButton').click(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: 'paket',
                    type: 'POST',
                    data: {
                        is_edit: is_edit,
                        id: id_paket,
                        is_promo: 0,
                        title: $('#title').val(),
                        subtitle: $('#subtitle').val(),
                        kecepatan: $('#kecepatan').val(),
                        harga: $('#harga').val(),
                        include: $('#include').val()
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
                    }
                });
            });
            $('.btn-edit').on('click', (e) => {
                is_edit = 1;
                id_paket = $(e.target).data('paket');
                let paket = null;
                for (let i = 0; i < pakets.length; i++) {
                    if (pakets[i].id === id_paket) {
                        paket = pakets[i];
                        break;
                    }
                }
                $("#title").val(paket.title);
                $("#subtitle").val(paket.subtitle);
                $("#kecepatan").val(paket.kecepatan);
                $("#harga").val(paket.harga);
                $("#include").val(paket.include);
                $('#addRowModal').modal('show');
            });
            $('.btn-hapus').on('click', (e) => {
                id_paket = $(e.target).data('paket');

                // Display a confirmation dialog
                swal({
                    title: "Apakah Anda yakin?",
                    text: "Paket ini akan dihapus.",
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
                            url: 'paket',
                            type: 'DELETE',
                            data: {
                                id: id_paket,
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

        })
    </script>
@endpush
