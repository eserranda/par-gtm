<div id="addModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Tambah Data </h5>
                <button type="button" class="btn-close" onclick="closeModalAdd()"> </button>
            </div>
            <div class="modal-body">
                <form id="addForm">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="col-form-label">Nama Klasis
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" class="form-control" id="nama_klasis" name="nama_klasis"
                                placeholder="Nama Klasis">
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="form-group col-md-6 mb-3">
                            <label class="col-form-label">Wilayah </label>
                            <select class="form-control form-select" name="wilayah" id="wilayah">
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
                            onclick="closeModalAdd()">Batal</button>
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
        function closeModalAdd() {
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

            const form = document.getElementById('addForm');
            form.reset();
            $('#addModal').modal('hide');
        }

        document.getElementById('addForm').addEventListener('submit', async (event) => {
            event.preventDefault();

            const form = event.target;
            const formData = new FormData(form);
            const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

            try {
                const response = await fetch('/klasis/store', {
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
                        if (inputField) {
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
                    $('#addModal').modal('hide');
                }

            } catch (error) {
                console.error(error);
            }
        });
    </script>
@endpush
