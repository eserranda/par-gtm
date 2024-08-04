<div id="editModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="myModalLabel">Edit Data </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editForm">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="edit_jenis_anggaran">Jenis Anggaran</label>
                            <select class="form-select" id="edit_jenis_anggaran" name="edit_jenis_anggaran">
                                <option value="" selected disabled>Pilih Jenis Anggaran</option>
                                <option value="Pendapatan Rutin">Pendapatan Rutin</option>
                                <option value="Pendapatan Program">Pendapatan Program</option>
                                <option value="Pendapatan Lain-lain">Pendapatan Lain-lain</option>
                                <option value="Belanja Rutin">Belanja Rutin</option>
                                <option value="Biaya Program">Biaya Program</option>
                                <option value="Belanja lain-lain">Belanja lain-lain</option>
                            </select>
                            <div class="invalid-feedback">

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="edit_sumber_anggaran">Sumber Anggaran</label>
                                <input type="hidden" class="form-control" id="edit_id" name="id">
                                <input type="text" class="form-control" id="edit_sumber_anggaran"
                                    name="edit_sumber_anggaran">
                                <div class="invalid-feedback">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Nominal Anggaran</label>
                                <input type="number" class="form-control" id="edit_nominal_anggaran"
                                    name="edit_nominal_anggaran">
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

            </div>
        </div>
    </div>
</div>


@push('scripts')
    <script>
        document.getElementById('editForm').addEventListener('submit', async (event) => {
            event.preventDefault();

            const form = event.target;
            const formData = new FormData(form);
            const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

            try {
                const response = await fetch('/anggaran-belanja/update', {
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
                    $('#editModal').modal('hide');
                }
            } catch (error) {
                console.error(error);
            }
        });
    </script>
@endpush
