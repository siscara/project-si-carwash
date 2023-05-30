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
                            <h3 class="card-title text-white mt-2">Tambah Order</h3>
                        </div>
                        <form action="/dashboard" method="POST">
                            @csrf
                            <div class="card-body"> 

                                <div class="form-group mb-3">
                                    <label for="exampleInputEmail1">No Kendaraan</label>
                                    <input type="text" class="form-control" placeholder="No Kendaraan"
                                        name="no_kendaraan">
                                </div>

                                <div class="form-group mb-3">
                                    <label for="exampleInputEmail1">Masukan Nama</label>
                                    <input type="text" class="form-control" placeholder="Nama Pemilik"
                                        name="nama_pemilik">
                                   
                                </div>
                                <div class="form-group mb-3">
                                    <label for="exampleInputEmail1">Jenis Kendaraan</label>
                                    <input type="text" class="form-control" placeholder="No Kendaraan"
                                        name="jenis_kendaraan">
                                </div>
                                <select class="form-select" aria-label="Default select example" name="layanan">
                                    <option selected>Select </option>
                                    @foreach ($data as $datas)
                                        <option value={{ $datas['id'] }}>
                                            {{ $datas['nama_layanan'] }}</option>
                                    @endforeach
                                </select>
                                <div class="form-group mb-3">
                                    <label for="exampleInputEmail1">Status</label>
                                    <input type="text" class="form-control" placeholder="status" name="status" value="Pending" readonly>
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
