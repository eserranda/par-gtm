@extends('layouts.master')
@push('header_comp')
    <!-- Sweet Alert-->
    <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
@endpush

@section('page_title')
    Data Pengurus
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-end align-items-end mb-3">
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal"
                            data-bs-target="#addModal">
                            Tambah Data
                        </button>
                    </div>
                    <table class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pengurus</th>
                                <th>Jabatan</th>
                                <th>Periode</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $d->nama_pengurus }}</td>
                                    <td>{{ $d->jabatan }}</td>
                                    <td>{{ $d->tahun_mulai }} - {{ $d->tahun_selesai }}</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary" title="Edit"
                                            onclick="edit('{{ $d->id }}')">Edit</a>

                                        <a class="btn btn-sm btn-danger" title="Hapus"
                                            onclick="hapus('{{ $d->id }}')">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @include('pages.pengurus.add')
    @include('pages.pengurus.edit')
@endsection

@push('scripts')
    <!-- SweetAlert2 -->
    <script src="{{ asset('assets') }}/libs/sweetalert2/sweetalert2.min.js"></script>

    <!-- Sweet alert init js-->
    <script src="{{ asset('assets') }}/js/pages/sweet-alerts.init.js"></script>


    <script>
        async function edit(id) {
            fetch('/pengurus/findById/' + id)
                .then(response => response.json())
                .then(data => {
                    document.getElementById('edit_id').value = data.id;
                    document.getElementById('edit_nama_pengurus').value = data.nama_pengurus;
                    document.getElementById('edit_jabatan').value = data.jabatan;
                    document.getElementById('edit_tahun_mulai').value = data.tahun_mulai;
                    document.getElementById('edit_tahun_selesai').value = data.tahun_selesai;
                })
                .catch(error => console.error(error));
            // show modal edit
            $('#editModal').modal('show');
        }

        async function hapus(id) {
            Swal.fire({
                title: 'Hapus Data ID ' + id + '?',
                text: 'Data akan dihapus permanen!',
                icon: 'warning',
                showCancelButton: true,
                cancelButtonText: 'Batal',
                confirmButtonColor: '#D85F47',
                cancelButtonColor: '#47D89C',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    var csrfToken = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        url: '/pengurus/destroy/' + id,
                        type: 'DELETE',
                        data: {
                            _token: csrfToken
                        },
                        success: function(response) {
                            if (response.status) {
                                Swal.fire({
                                    title: 'Terhapus!',
                                    text: 'Data berhasil dihapus.',
                                    icon: 'success',
                                    timer: 500,
                                    timerProgressBar: true,
                                }).then(() => {
                                    location.reload();
                                });
                            } else {
                                Swal.fire(
                                    'Error!',
                                    'Data gagal dihapus.',
                                    'error'
                                );
                            }
                        },
                        error: function(error) {
                            console.log(error);
                            Swal.fire(
                                'Gagal!',
                                'Terjadi kesalahan saat menghapus data.',
                                'error'
                            );
                        }
                    });
                }
            });
        }
    </script>
@endpush
