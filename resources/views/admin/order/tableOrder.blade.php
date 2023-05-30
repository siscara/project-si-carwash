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
                                    <h3 class="card-title">Data Order</h3>
                                </div>
                                @include('admin/order/components/edit')
                                @include('admin/order/components/tambah')
                                <div class="ms-4 mt-3">
                                    <div class="d-flex">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#tambahmodal">
                                            Tambah Order
                                            @include('icons/tambah')
                                        </button>

                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                        </symbol>
                                        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                                        </symbol>
                                        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                        </symbol>
                                    </svg>                

                                    @if (session('errors'))
                                    <div class="mt-2 me-2">
                                        <div class="alert alert-danger d-flex align-items-center mt-10 " role="alert">
                                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                                                aria-label="Danger:">
                                                <use xlink:href="#exclamation-triangle-fill" />
                                            </svg>
                                            @foreach (session('errors')->all() as $error)
                                                <div>
                                                    {{ $error }}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    @endif
                                    
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>

                                                <th>Nomor Kendaraan</th>
                                                <th>Nama Pemilik</th>
                                                <th>No Hendphone</th>
                                                <th>Jenis Kendaraan</th>
                                                <th>Layanan</th>
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
                                                    <td>{{ $datas['status'] }}</td>
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

                                                                <li><a class="dropdown-item" href="dashboard/{{$datas['id']}}">Delete</a>
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
