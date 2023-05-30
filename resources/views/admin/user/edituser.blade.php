<!-- Modal EDIT AWAL -->
@foreach ($usertable as $dat)
    <div class="modal fade" id="editmodal-{{ $dat['id'] }}" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="w-full">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header bg-primary bg-gradient">
                                <h3 class="card-title text-white mt-2">Edit User</h3>
                            </div>
                            <form action="/tabelUser/{{ $dat['id'] }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group mb-3">
                                        <label for="exampleInputnama">Nama</label>
                                        <input type="text" name="nama" class="form-control" value="{{ $dat['name'] }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" name="email" class="form-control" value="{{ $dat['email'] }}">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="exampleInputEmail1">Phone</label>
                                        <input type="phone" name="phone" class="form-control" value="{{ $dat['no_hp'] }}">
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
@endforeach
<!-- Modal EDIT AKHIR -->
