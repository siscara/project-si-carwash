<!-- Modal cuci manual AWAL -->
@foreach ($layanan as $datas)
    <div class="modal fade" id="gowash1-{{ $datas['id'] }}" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="w-full">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header bg-primary bg-gradient">
                                <h3 class="card-title text-white mt-2">Bookings</h3>
                            </div>
                            <form action="/post" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group mb-3">
                                        <label for="exampleInputEmail1">Jenis Layanan</label>
                                        <select class="form-select" aria-label="Default select example" name="layanan"
                                             @readonly(true)>
                                            <option selected value={{ $datas['id'] }}>
                                                {{ $datas['nama_layanan'] }}</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="exampleInputEmail1">No Kendaraan</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            placeholder="No Kendaraan" name="no_kendaraan">
                                    </div>
                                    
                                    <div class="form-group mb-3">
                                        <label for="exampleInputEmail1">Jenis Kendaraan</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            placeholder="Jenis Kendaraan" name="jenis_kendaraan">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="exampleInputEmail1">Status</label>
                                        <input type="text" class="form-control" placeholder="status" name="status" value="Pending" readonly>
                                    </div>


                                </div>
                                <div class="card-footer d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary"
                                        style="margin-right: 10px">Submit</button>
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Batal</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endforeach
<!-- Modal cuci manual AKHIR -->
