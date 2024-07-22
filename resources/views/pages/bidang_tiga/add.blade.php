<div id="addModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Tambah Data </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addForm">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="bidang">Bidang</label>
                            <select class="form-control " id="bidang" name="bidang">
                                <option value="" selected disabled>Pilih bidang</option>
                                <option value="Bidang Dana">Bidang Dana</option>Z
                                <option value="Bidang Diakonia">Bidang Diakonia</option>Z
                            </select>
                            <div class="valid-feedback">

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="nama_kegiatan">Nama Kegiatan</label>
                                <input type="text" class="form-control" id="nama_kegiatan" name="nama_kegiatan"
                                    placeholder="Nama Kegiatan">
                                <div class="valid-feedback">

                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="waktu_dan_tempat">Waktu Dan Tempat</label>
                                <input type="text" class="form-control" id="waktu_dan_tempat" name="waktu_dan_tempat"
                                    placeholder="Waktu Dan Tempat">
                                <div class="valid-feedback">

                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Tujuan</label>
                                <textarea class="form-control" placeholder="Tujuan" rows="3" name="tujuan" id="tujuan"></textarea>
                                <div class="invalid-feedback">

                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="sasaran_belanja">Sasaran Belanja</label>
                                <input type="text" class="form-control" id="sasaran_belanja" name="sasaran_belanja"
                                    placeholder="Sasaran Belanja">
                                <div class="invalid-feedback">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="sumber_biaya">Sumber Biaya</label>
                                <input type="text" class="form-control" id="sumber_biaya" name="sumber_biaya"
                                    placeholder="Sumber Biaya">
                                <div class="invalid-feedback">

                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="penanggung_jawab">Penanggung Jawab</label>
                                <input type="text" class="form-control" id="penanggung_jawab"
                                    placeholder="Penanggung Jawab">
                                <div class="invalid-feedback">

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="float-end">
                        <button type="button" class="btn btn-light waves-effect mx-2"
                            data-bs-dismiss="modal">Batal</button>
                        <button class="btn btn-primary  " type="submit">Simpan</button>
                    </div>
                </form>
                <!-- end form -->
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


@push('scripts')
    <script>
        document.getElementById('addForm').addEventListener('submit', async (event) => {
            event.preventDefault();

            const form = event.target;
            const formData = new FormData(form);
            const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

            try {
                const response = await fetch('/bidang-tiga/store', {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: formData,
                });

                const data = await response.json();
                if (data.success) {
                    form.reset();
                    $('#addModal').modal('hide'); // Menggunakan jQuery untuk menyembunyikan modal
                    window.location.reload(); // Memuat ulang halaman
                } else {
                    alert(data.message);
                }

            } catch (error) {
                console.error(error);
            }
        });
    </script>
@endpush
