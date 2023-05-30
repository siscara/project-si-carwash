@extends('layouts.client')

@section('content')
    <div class="py-12 me-5 pl-10">
        <div class="container">
            <div class="row">
                @include('client/layanan/components/order')
                @foreach($layanan as $datas)
                <div class="col col-sm-3 mb-2">
                    <div class="card" style="width: 15rem;">
                        <img src="{{ asset('storage/'.$datas['foto']) }}" class="card-img-top" alt="..." width="200px" height="200px">

                        <div class="card-body">
                            <h3 class="card-title">{{$datas['nama_layanan']}}</h3>
                            <h6>{{$datas['harga']}}</h6>
                            <div class="d-flex">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#gowash1-{{ $datas['id'] }}">
                                    Go Wash
                                </button>
                            </div>
                        </div>
                        
                    </div>
                </div>
                @endforeach
               
            </div>

        </div>
    </div>
@endsection
