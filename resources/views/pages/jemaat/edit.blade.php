<div id="editModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Tambah Data </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editForm">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Pilih Klasis</label>
                            <select name="edit_id_klasis" id="edit_id_klasis">
                                <option value="" selected disabled>Pilih klasis</option>
                                <div class="invalid-feedback">
                                </div>
                            </select>
                        </div>
                        <!-- end col -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="col-form-label">Nama Jemaat
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="hidden" class="form-control" id="edit_id" name="id">
                                <input type="text" class="form-control" id="edit_nama_jemaat" name="edit_nama_jemaat"
                                    placeholder="Nama Jemaat">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Nama Pelayan/Pendeta
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" id="edit_pelayan" name="edit_pelayan"
                                placeholder="Nama Pelayan/Pendeta">
                            <div class="invalid-feedback">
                            </div>
                        </div>

                        <div class="form-group col-md-6 mb-3">
                            <label class="col-form-label">Alamat</label>
                            <textarea class="form-control" name="edit_alamat" id="edit_alamat" rows="3" placeholder="Alamat"></textarea>
                            <div class="invalid-feedback"></div>
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
            $('#edit_id_klasis').select2({
                theme: "bootstrap-5",
                placeholder: "Pilih Klasis",
                dropdownParent: $('#editModal'),
                ajax: {
                    url: '/klasis/getAllKlasis',
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

        document.getElementById('editForm').addEventListener('submit', async (event) => {
            event.preventDefault();

            const form = event.target;
            const formData = new FormData(form);
            const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

            try {
                const response = await fetch('/jemaat/update', {
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
                        if (inputField && fieldName == 'id_klasis') {
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
                            if (fieldName === 'id_klasis') {
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

                    $('#datatable').DataTable().ajax.reload();
                    $('#editModal').modal('hide');
                }


            } catch (error) {
                console.error(error);
            }
        });
    </script>
@endpush
