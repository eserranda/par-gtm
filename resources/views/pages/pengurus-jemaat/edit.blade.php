<div id="editModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Tambah Data </h5>
                {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
                <button type="button" class="btn-close" onclick="closeModalEdit()">
                </button>
            </div>
            <div class="modal-body">
                <form id="editForm">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="id_jemaat">Jemaat</label>
                                <input type="hidden" class="form-control" id="edit_id" name="id">
                                <select class="form-control form-select" id="edit_id_jemaat" name="edit_id_jemaat">

                                </select>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="nama_pengurus">Bidang</label>
                                <select class="form-select" id="edit_bidang" name="edit_bidang">
                                    <option value="" selected disabled>Pilih bidang</option>
                                    <option value="Teologi/Kurikulum">Teologi/Kurikulum</option>
                                    <option value="Kreatif/Pembinaan">Kreatif/Pembinaan</option>
                                    <option value="Dana/Diakonia">Dana/Diakonia</option>
                                </select>

                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="nama_pengurus">Nama</label>
                                <input type="text" class="form-control" id="edit_nama" name="edit_nama"
                                    placeholder="Nama">
                                <div class="invalid-feedback"> </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="nama_pengurus">Jabatan</label>
                                <select class="form-select" id="edit_jabatan" name="edit_jabatan">
                                    <option value="" selected disabled>Pilih Jabatan</option>
                                    <option value="Ketua Umum">Ketua Umum</option>
                                    <option value="Ketua 1">Ketua 1</option>
                                    <option value="Ketua 2">Ketua 2</option>
                                    <option value="Ketua 3">Ketua 3</option>
                                    <option value="Sekretaris">Sekretaris</option>
                                    <option value="Wakil Sekretaris">Wakil Sekretaris</option>
                                    <option value="Bendahara">Bendahara</option>
                                    <hr class="my-2">
                                    {{-- <option value="Koordinator">Koordinator</option> --}}
                                    <option value="Anggota">Anggota</option>
                                </select>
                                <div class="invalid-feedback"> </div>
                            </div>
                        </div>
                    </div>

                    <!-- end row -->
                    <div class="float-end">
                        <button type="button" class="btn btn-light waves-effect mx-2"
                            data-bs-dismiss="modal">Batal</button>
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </form>
                <!-- end form -->
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


@push('scripts')
    <script>
        $(document).ready(function() {
            $('#edit_id_jemaat').select2({
                theme: "bootstrap-5",
                placeholder: "Pilih Jemaat",
                dropdownParent: $('#editModal'),
                ajax: {
                    url: '/jemaat/getAllJemaat',
                    dataType: 'json',
                    delay: 250,
                    processResults: function(data) {
                        return {
                            results: data
                        };
                    },
                    cache: true
                }
            });
        });

        function closeModalEdit() {
            const invalidInputs = document.querySelectorAll('.is-invalid');
            invalidInputs.forEach(invalidInput => {
                invalidInput.value = '';
                invalidInput.classList.remove('is-invalid');
                const errorNextSibling = invalidInput.nextElementSibling;
                if (errorNextSibling && errorNextSibling.classList.contains(
                        'invalid-feedback')) {
                    errorNextSibling.textContent = '';
                }
            });

            const form = document.getElementById('editForm');
            form.reset();
            $('#editModal').modal('hide');
        }

        document.getElementById('editForm').addEventListener('submit', async (event) => {
            event.preventDefault();

            const form = event.target;
            const formData = new FormData(form);
            const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

            try {
                const response = await fetch('/pengurus-jemaat/update', {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: formData,
                });

                const data = await response.json();
                console.log(data);
                if (!data.success) {
                    Object.keys(data.messages).forEach(fieldName => {
                        const inputField = document.getElementById(fieldName);
                        if (inputField && fieldName == 'id_jemaat') {
                            inputField.classList.add('is-invalid');
                        } else {
                            inputField.classList.add('is-invalid');
                            if (inputField.nextElementSibling) {
                                inputField.nextElementSibling.textContent = data.messages[
                                    fieldName][0];
                            }
                        }
                    });

                    // hapus error message jika form sudah di isi
                    const validFields = document.querySelectorAll('.is-invalid');
                    validFields.forEach(validField => {
                        const fieldName = validField.id;
                        if (!data.messages[fieldName]) {
                            if (fieldName === 'id_jemaat') {
                                validField.classList.remove('is-invalid');
                            } else {
                                validField.classList.remove('is-invalid');
                                validField.nextElementSibling.textContent = '';
                            }
                        }
                    });

                } else {
                    const invalidInputs = document.querySelectorAll('.is-invalid');
                    invalidInputs.forEach(invalidInput => {
                        invalidInput.value = '';
                        invalidInput.classList.remove('is-invalid');
                        const errorNextSibling = invalidInput.nextElementSibling;
                        if (errorNextSibling && errorNextSibling.classList.contains(
                                'invalid-feedback')) {
                            errorNextSibling.textContent = '';
                        }
                    });

                    const form = document.getElementById('editForm');
                    form.reset();
                    $('#datatable').DataTable().ajax.reload();
                    $('#editModal').modal('hide');
                }


            } catch (error) {
                console.error(error);
            }
        });
    </script>
@endpush
