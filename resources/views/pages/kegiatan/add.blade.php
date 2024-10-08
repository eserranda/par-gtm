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
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="kegiatan">Nama Kegiatan</label>
                                <input type="text" class="form-control" id="kegiatan" name="kegiatan"
                                    placeholder="Nama Kegiatan">
                                <div class="invalid-feedback">

                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="waktu">Waktu</label>
                                <input type="text" class="form-control" id="waktu" name="waktu"
                                    placeholder="Waktu ">
                                <div class="invalid-feedback">

                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Tempat</label>
                                <input type="text" class="form-control" id="tempat" name="tempat"
                                    placeholder="Tempat">
                                <div class="invalid-feedback"> </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="pelaksana">Pelaksana</label>
                                <textarea class="form-control" id="pelaksana" name="pelaksana" rows="3" placeholder="Pelaksana"></textarea>
                                <div class="invalid-feedback"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- end col -->
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label" for="pelaksana">Keterangan</label>
                                <textarea class="form-control" id="keterangan" name="keterangan" rows="3" placeholder="Keterangan Kegiatan"></textarea>
                                <div class="invalid-feedback"> </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-lable">Input File Foto</label>
                                <input type="file" class="filestyle" data-buttonname="btn-secondary" name="image"
                                    id="image" class="form-control">
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="mb-3">
                                <img class="img-thumbnail" id="photoPreview" src="" alt="Photo Preview"
                                    style="max-width: 200px; max-height: 200px;">
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
        document.getElementById('image').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('photoPreview').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });


        document.getElementById('addForm').addEventListener('submit', async (event) => {
            event.preventDefault();

            const form = event.target;
            const formData = new FormData(form);
            const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

            try {
                const response = await fetch('/kegiatan/store', {
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
                        if (inputField && fieldName == 'image') {
                            alert(data.messages[fieldName][0]);
                            // inputField.classList.add('is-invalid');
                        } else if (inputField) {
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
