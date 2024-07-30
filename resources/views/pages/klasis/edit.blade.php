<div id="editModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Edit Data </h5>
                <button type="button" class="btn-close" onclick="closeModalEdit()"> </button>
            </div>
            <div class="modal-body">
                <form id="editForm">
                    <div class="row">
                        <div class="form-group col-md-6 mb-3">
                            <label class="col-form-label">Nama Klasis
                                <span class="text-danger">*</span>
                            </label>
                            <input type="hidden" class="form-control" id="edit_id" name="id">
                            <input type="text" class="form-control" id="edit_nama_klasis" name="edit_nama_klasis"
                                placeholder="Nama Klasis">
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="col-form-label">Wilayah : </label>
                            <select class="form-control form-select" name="edit_wilayah" id="edit_wilayah">
                                <option value="" selected disabled>Pilih Wilayah</option>
                                <option value="Wilayah I">Wilayah I</option>
                                <option value="Wilayah II">Wilayah II</option>
                                <option value="Wilayah III">Wilayah III</option>
                                <option value="Wilayah IV">Wilayah IV</option>
                                <option value="Wilayah V">Wilayah V</option>
                                <option value="Wilayah VI">Wilayah VI</option>
                                <option value="Wilayah VII">Wilayah VII</option>
                                <option value="Wilayah VIII">Wilayah VIII</option>
                                <option value="Wilayah IX">Wilayah IX</option>
                                <option value="Wilayah X">Wilayah X</option>
                                <option value="Wilayah XI">Wilayah XI</option>
                                <option value="Wilayah XII">Wilayah XII</option>
                            </select>
                            <div class="invalid-feedback"></div>
                        </div>

                    </div>

                    <div class="float-end">
                        <button type="button" class="btn btn-light waves-effect mr-2"
                            onclick="closeModalEdit()">Batal</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
                <!-- end form -->
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


@push('scripts')
    <script>
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

            let formData = new FormData(event.target);

            var id = document.getElementById('edit_id').value;

            try {
                const response = await fetch('/klasis/update', {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: formData,
                });

                const data = await response.json();
                if (!data.success) {
                    Object.keys(data.messages).forEach(fieldName => {
                        const inputField = document.getElementById(fieldName);
                        if (inputField) {
                            inputField.classList.add('is-invalid');
                            if (inputField.nextElementSibling) {
                                inputField.nextElementSibling.textContent = data.messages[fieldName][0];
                            }
                        }
                    });

                    // hapus error message jika form sudah di isi
                    const validFields = document.querySelectorAll('.is-invalid');
                    validFields.forEach(validField => {
                        const fieldName = validField.id;
                        if (!data.messages[fieldName]) {
                            validField.classList.remove('is-invalid');
                            if (validField.nextElementSibling) {
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
