@extends('layouts.auth')

@section('content')
    <section class="vh-100 bg-primary shadow-lg">
        <div class="container py-5 h-100 ">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card  shadow p-3 mb-5 " style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="align-self-center col-md-6 col-lg-5 d-none d-md-block">
                                <img src="{{ asset('assets/img/car-wash.png') }}" alt="login form" class="img-fluid"
                                    style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    
                                    <form method="POST" action="/admin">
                                        @csrf

                                        <div class="row mb-3">
                                            <label for="email"
                                                class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                            <div class="col-md-6">
                                                <input id="email" type="email"
                                                    class="form-control" name="email"
                                                     required autocomplete="email" autofocus>

                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="password"
                                                class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                            <div class="col-md-6">
                                                <input id="password" type="password"
                                                    class="form-control"
                                                    name="password" required autocomplete="current-password">
                                            </div>
                                        </div>

                                        <div class="row mb-0">
                                            <div class="col-md-8 offset-md-4">
                                              
                                                <button type="submit" class="btn btn-primary">Login</button>

                                                <p class="mb-1 mt-2" style="color: #393f81;">Don't have an account? <a
                                                        href="/register" style="color: #393f81;">Register here</a></p>
                                                
                                            </div>

                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
