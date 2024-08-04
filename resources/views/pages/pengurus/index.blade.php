@extends('layouts.master')
@push('header_comp')
    <!-- DataTables -->
    <link href="{{ asset('assets') }}/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets') }}/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{ asset('assets') }}/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />

    <!-- Sweet Alert-->
    <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
@endpush

@section('page_title')
    Data Pengurus Sinode
@endsection

@section('content')
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="header-title"><b>Data Pengurus </b></h5>
                        <div>
                            <button type="button" class="btn btn-info waves-effect" id="btnPrint">Print</button>
                            <button type="button" class="btn btn-success waves-effect" id ="btnExcel">Excel</button>
                            <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal"
                                data-bs-target="#addModal">Tambah Data</button>
                        </div>
                    </div>
                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pengurus</th>
                                <th>Jabatan</th>
                                <th>Periode</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>

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
    <!-- Required datatable js -->
    <script src="{{ asset('assets') }}/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets') }}/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('assets') }}/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('assets') }}/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('assets') }}/libs/jszip/jszip.min.js"></script>
    <script src="{{ asset('assets') }}/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="{{ asset('assets') }}/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="{{ asset('assets') }}/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('assets') }}/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('assets') }}/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

    <script src="{{ asset('assets') }}/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('assets') }}/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>


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

        var datatable;
        $(document).ready(function() {
            const selectedFilter = $('#filterData').val();
            datatable = $('#datatable').DataTable({
                processing: true,
                serverSide: true,
                autoWidth: true,
                responsive: true,

                dom: "<'row'<'col-lg-3'l> <'col-lg-4'B> <'col-lg-5'f>>" +
                    "<'row'<'col-sm-12 py-lg-2'tr>>" +
                    "<'row'<'col-sm-12 col-lg-5'i><'col-sm-12 col-lg-7'p>>",
                buttons: [{
                        extend: 'excel',
                        exportOptions: {
                            columns: [0, 1, 2, 3]
                        },
                        init: function(api, node, config) {
                            $(node).hide();
                        }
                    },
                    {
                        extend: 'print',
                        exportOptions: {
                            columns: [0, 1, 2, 3]
                        },
                        init: function(api, node, config) {
                            $(node).hide();
                        }
                    },
                ],
                ajax: "{{ route('pengurus.index') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: '#',
                        orderable: false,

                    },
                    {
                        data: 'nama_pengurus',
                        name: 'nama_pengurus',
                        orderable: false,
                    },
                    {
                        data: 'jabatan',
                        name: 'jabatan',
                        orderable: false,
                    },
                    {
                        data: 'periode',
                        name: 'periode',
                        orderable: false,
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ],
            });

            // $('#filterData').on('change', function() {
            //     const selectedFilter = $(this).val();
            //     datatable.ajax.url('{{ route('anggaran-belanja.index') }}?jenis_anggaran=' +
            //             selectedFilter)
            //         .load();
            // });

            // $('#reload').on('click', function() {
            //     $('#filterData').val('');
            //     datatable.ajax.url('{{ route('anggaran-belanja.index') }}').load();
            // });

        });

        $('#btnExcel').on('click', function() {
            datatable.button('.buttons-excel').trigger();
        });

        $('#btnPrint').on('click', function() {
            datatable.button('.buttons-print').trigger();
        })

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
