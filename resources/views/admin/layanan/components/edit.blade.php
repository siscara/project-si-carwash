<!-- Modal EDIT AWAL -->
@foreach ($layanantable as $datas)
    <div class="modal fade" id="editmodal-{{$datas['id']}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="w-full">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header bg-primary bg-gradient">
                                <h3 class="card-title text-white mt-2">Edit Layanan</h3>
                            </div>
                            <form action="/tabelLayanan/{{$datas['id']}}" method="POST">
                                <div class="card-body">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="exampleInputEmail1">Nama Layanan</label>
                                        <input type="text" class="form-control" name="layanan"
                                            value="{{$datas['nama_layanan']}}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="exampleInputEmail1">Harga</label>
                                        <input type="number" class="form-control" name="harga" value="{{$datas['harga']}}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="exampleInputEmail1">Foto</label>
                                        <input type="text" class="form-control" name="foto" placeholder="foto">
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
