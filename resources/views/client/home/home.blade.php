@extends('layouts.client')

@section('content')
    <div class="py-12 me-5 pl-10">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Data Order</h3>
                                </div>
                                @include('client/home/components/editorder')
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>

                                                <th>Nomor Kendaraan</th>
                                                <th>Nama Pemilik</th>
                                                <th>No Hendphone</th>
                                                <th>Jenis Kendaraan</th>
                                                <th>Jenis Layanan</th>
                                                <th>Harga</th>
                                                <th>Status</th>
                                                <th> </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($ordertable as $datas)
                                                <tr>
                                                    <td>{{ $datas['nomer_plat'] }} </td>
                                                    <td>{{ $datas['user']['name'] }}</td>
                                                    <td>{{ $datas['user']['no_hp'] }}</td>
                                                    <td>{{ $datas['jenis_kendaraan'] }}</td>
                                                    <td>{{ $datas['layanan']['nama_layanan'] }}</td>
                                                    <td>{{ $datas['layanan']['harga'] }}</td>
                                                    <td>{{ $datas['status'] }}</td>

                                                    <td>
                                                        <div class="dropdown">
                                                            <a class=" dropdown" type="button" id="dropdownMenuButton2"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <div style="width:20px; height:20px; opacity:0.5;">
                                                                    @include('icons/dot')
                                                                </div>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-dark"
                                                                aria-labelledby="dropdownMenuButton2">
                                                                <li>

                                                                <li>
                                                                    <a class="dropdown-item" data-bs-toggle="modal"
                                                                        data-bs-target="#editmodal">
                                                                        Edit
                                                                    </a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="/delete/{{ $datas['id'] }}">Delete</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach




                                            </td>


                                    </table>
                                </div>

                            </div>

                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection
