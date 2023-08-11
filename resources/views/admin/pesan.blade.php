@extends('admin.layouts.app')
@push('css')
@endpush
@section('content')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Pesan</h4>
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
                    <a href="#">Pesan</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">Pesan Masuk</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="dataTable" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Pengirim</th>
                                        <th>Pesan</th>
                                        <th style="width: 0"></th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Pengirim</th>
                                        <th>Pesan</th>
                                        <th style="width: 0"></th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($pesans as $pesan)
                                        <tr>
                                            <td>{{ $pesan->id }}</td>
                                            <td>
                                                <div class="">
                                                    <h5>{{ $pesan->nama }}</h5>
                                                    <small>{{ $pesan->telepon }}</small>&nbsp;
                                                    <small>{{ $pesan->email }}</small>
                                                </div>
                                            </td>
                                            <td>{{ $pesan->pesan }}</td>
                                            <td>
                                                <div class="form-button-action" data-pesan="{{ $pesan->id }}">
                                                    <button type="button" data-toggle="tooltip" title=""
                                                        class="btn-detail btn btn-link btn-info p-2"
                                                        data-original-title="Detail" data-pesan="{{ $pesan->id }}">
                                                        <i class="fa fa-info fa-sm" data-pesan="{{ $pesan->id }}"></i>
                                                    </button>
                                                    <button type="button" data-toggle="tooltip" title=""
                                                        class="btn-hapus btn btn-link btn-danger p-2"
                                                        data-original-title="Hapus" data-pesan="{{ $pesan->id }}">
                                                        <i class="fa fa-times" data-pesan="{{ $pesan->id }}"></i>
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
    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header no-bd">
                    <h5 class="modal-title">Detail Pesan <span id="idPesan"></span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="text-capitalize">nama</label>
                                <div class="form-control" id="nama"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="text-capitalize">email</label>
                                <div class="form-control" id="email"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="text-capitalize">telepon</label>
                                <div class="form-control" id="telepon"></div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="text-capitalize">how to find us</label>
                                <div class="form-control" id="how"></div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="text-capitalize">pesan</label>
                                <div class="form-control" id="pesan"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer no-bd justify-content-between">
                    <div class="me-auto">
                        <small id="created_at"></small>
                    </div>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function formatTimestamp(timestamp) {
            const daysOfWeek = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September',
                'Oktober', 'November', 'Desember'
            ];

            const date = new Date(timestamp);
            const formattedDate =
                `${date.getHours().toString().padStart(2, '0')}:${date.getMinutes().toString().padStart(2, '0')} | ${daysOfWeek[date.getDay()]}, ${date.getDate()} ${months[date.getMonth()]} ${date.getFullYear()}`;

            return formattedDate;
        }
        $(document).ready(() => {
            const pesans = @json($pesans);
            let id_pesan = 0;

            $("#dataTable").DataTable({
                order: [
                    [0, 'desc']
                ]
            });

            $('.btn-detail').on('click', (e) => {
            let id_pesan = $(e.target).data('pesan');
                let pesan = null;
                for (let i = 0; i < pesans.length; i++) {
                    if (pesans[i].id === id_pesan) {
                        pesan = pesans[i];
                        break;
                    }
                }
                console.log(pesan);
                $('#idPesan').text(pesan.id)
                $('#nama').text(pesan.nama)
                $('#email').text(pesan.email)
                $('#telepon').text(pesan.telepon)
                $('#how').text(pesan.how)
                $('#pesan').text(pesan.pesan)
                $('#created_at').text(formatTimestamp(pesan.created_at))
                $('#Modal').modal('show')
            })
            $('.btn-hapus').on('click', (e) => {
                id_pesan = $(e.target).data('pesan');

                // Display a confirmation dialog
                swal({
                    title: "Apakah Anda yakin?",
                    text: "pesan ini akan dihapus.",
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
                            url: 'pesan',
                            type: 'DELETE',
                            data: {
                                id: id_pesan,
                            },
                            success: function(response) {
                                if (response.status == 201) {
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
