@extends('layouts.login')

@section('content')
<div class="main-content- h-100vh">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-sm-10 col-lg-8">
                <!-- Middle Box -->
                <div class="middle-box">
                    <div class="card mb-0">
                        <div class="card-body p-4">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="xs-d-none">
                                        <img src="{{asset('administrator//img/bg-img/6.png')}}" alt="">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <!-- Logo -->
                                    <div class="card-body-login mb-30">
                                        <img src="{{asset('administrator//img/core-img/logo.png')}}" alt="">
                                    </div>

                                    <h4 class="font-22 mb-30">Sign In</h4>

                                    <form action="{{ route('admin.login') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label class="float-left" for="emailaddress">Email address</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                                            required autocomplete="email" autofocus placeholder="Please Enter Your E-Mail">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <a href="{{ route('password.request') }}" class="text-dark float-right"><span class="font-12 text-primary">Forgot your password?</span></a>

                                            <label class="float-left" for="password">Password</label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <div class="custom-control custom-checkbox pl-0">
                                                <div class="custom-control custom-checkbox">

                                                    <input  class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="remember"><span class="font-16">Remember me</span></label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mb-0 text-center">
                                            <button class="btn btn-primary btn-block" type="submit" name="login"> Log In </button>
                                        </div>

                                    </form>
                                </div> <!-- end card-body -->
                            </div>
                            <!-- end card -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
