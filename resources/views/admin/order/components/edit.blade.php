<!-- Modal EDIT AWAL -->
@foreach ($ordertable as $datas)
    <div class="modal fade" id="editmodal-{{ $datas['id'] }}" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="w-full">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header bg-primary bg-gradient">
                                <h3 class="card-title text-white mt-2">Edit Order</h3>
                            </div>
                            <form action="/dashboard/{{ $datas['id'] }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group mb-3">
                                        <label for="exampleInputEmail1">No Kendaraan</label>
                                        <input type="text" class="form-control" name="no_kendaraan"
                                            value="{{ $datas['nomer_plat'] }}">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="exampleInputEmail1">Masukan Nama</label>
                                        <input type="text" class="form-control" name="nama_pemilik"
                                            value="{{ $datas['user']['name'] }}" readonly>

                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="exampleInputEmail1">Jenis Kendaraan</label>
                                        <input type="text" class="form-control" name="jenis_kendaraan"
                                            value="{{ $datas['jenis_kendaraan'] }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="exampleInputEmail1">Status</label>
                                        <input type="text" class="form-control" name="status"
                                            value="{{ $datas['status'] }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="exampleInputEmail1">Layanan</label>
                                    <select class="form-select" aria-label="Default select example" name="layanan"
                                        >
                                        <option selected value={{ $datas['layanan']['id'] }}>
                                            {{ $datas['layanan']['nama_layanan'] }}</option>
                                        @foreach ($data as $datas)
                                            <option value={{ $datas['id'] }}>
                                                {{ $datas['nama_layanan'] }}</option>
                                        @endforeach
                                    </select>
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
<!-- Modal EDIT AKHIR -->
