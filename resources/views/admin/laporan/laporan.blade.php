@extends('layouts.app')
@section('content')
    <div class="py-12 ms-5 me-5">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 shadow p-3 mb-5 rounded">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Laporan</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                               
                                                <th>Tanggal</th>
                                                <th>Nomor Kendaraan</th>
                                                <th>Nama Pemilik</th>
                                                <th>No Hendphone</th>
                                                <th>Jenis Kendaraan</th>
                                                <th>Total</th>
                                               
 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($laporantable as $datas)
                                            <tr>
                                                <td>{{date('j F, Y', strtotime($datas['created_at']))}}</td>
                                                <td>{{ $datas['nomer_plat'] }}</td>
                                                <td>{{ $datas['user']['name'] }}</td>
                                                <td>{{ $datas['user']['no_hp'] }}</td>
                                                <td>{{$datas['jenis_kendaraan']}}</td>
                                                <td>{{ $datas['layanan']['harga'] }}</td>

                                            </tr>
                                            @endforeach
                                    </table>
                                </div>
                                
                                <!-- /.card-body -->
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
