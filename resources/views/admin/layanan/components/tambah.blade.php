<!-- Modal TAMBAH AWAL -->
<div class="modal fade" id="tambahmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="w-full">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header bg-primary bg-gradient">
                            <h3 class="card-title text-white mt-2">Tambah Layanan</h3>
                        </div>
                        <form action="/postlayanan" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="exampleInputEmail1">Nama Layanan</label>
                                    <input type="text" class="form-control" name="layanan"
                                        placeholder="Nama Layanan">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="exampleInputEmail1">Harga</label>
                                    <input type="number" class="form-control" name="harga"
                                        placeholder="Harga">
                                </div>
                                <label for="exampleInputEmail1">Foto</label>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" id="photo" name="photo">
                                  </div>
                            </div>
                            <div class="card-footer d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary"
                                    style="margin-right: 10px">Submit</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Modal TAMBAH AKHIR -->
