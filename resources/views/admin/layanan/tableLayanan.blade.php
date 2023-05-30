@extends('layouts.app')

@section('content')
    <div class="py-12 ms-5 me-5 pl-10 ">
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <!-- Main content -->
            <section class="content ">
                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-12 shadow p-3 mb-5 rounded">
                            <div class="card ">
                                <div class="card-header">
                                    <h3 class="card-title">Layanan</h3>
                                </div>
                                @include('admin/layanan/components/edit')
                                @include('admin/layanan/components/tambah')
                                <div class="ms-4 mt-3">
                                    <div class="d-flex">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#tambahmodal">
                                            Tambah Layanan
                                            @include('icons/tambah')
                                        </button>

                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Nama Layanan</th>
                                                <th>Harga</th>
                                                <th>Foto</th>
                                                <th> </th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($layanantable as $datas)
                                                <tr>
                                                    <td>{{ $datas['nama_layanan'] }}</td>
                                                    <td>{{ $datas['harga'] }} </td>
                                                    <td>{{ $datas['foto'] }}</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a class=" dropdown" type="button" id="dropdownMenuButton"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <div style="width:20px; height:20px; opacity:0.5;">
                                                                    @include('icons/dot')
                                                                </div>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-dark"
                                                                aria-labelledby="dropdownMenuButton2">

                                                                <li>
                                                                    <a class="dropdown-item" data-bs-toggle="modal"
                                                                        data-bs-target="#editmodal-{{ $datas['id'] }}">
                                                                        Edit
                                                                    </a>
                                                                </li>

                                                                <li><a class="dropdown-item" href="/delete/{{$datas['id']}}">Delete</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach


                                        </tbody>

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
