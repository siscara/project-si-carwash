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
                                    <h3 class="card-title">Data User</h3>
                                </div>
                                @include('admin/user/edituser')
                               

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            @foreach ($usertable as $datas)
                                                <tr>
                                                    <td>{{ $loop ->iteration}}</td>
                                                    <td>{{ $datas['name'] }}</td>
                                                    <td>{{ $datas['email'] }}</td>
                                                    <td>{{ $datas['no_hp'] }}</td>
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
                                                                        data-bs-target="#editmodal-{{ $datas['id'] }}"
                                                                        >
                                                                        Edit
                                                                    </a>
                                                                </li>

                                                                <li><a class="dropdown-item" href="/delete-data/{{$datas['id']}}" >Delete</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tr>
                                            @endforeach

                                    </table>
                                </div>
                                <ul class="pagination justify-content-center">
                                    {{$usertable->links()}}
                                </ul>
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
