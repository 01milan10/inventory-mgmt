@extends('layouts.app')

@section('title')
<title>Login</title>
@endsection

@section('content')
<div class="login-register" style="background-image:url(login-register.jpg); padding:0 !important;">
    <div class="container">
        <div class="row mx-auto justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-10 col-md-6">
                <form action="{{ route('login') }}" method="POST" class="needs-validation" id="form" novalidate>
                    @csrf()
                    <div class="card border-primary shadow">
                        <div class="card-title display-4 text-center">Login</div>
                        <div class="card-body">
                            @error('email')
                            <div class="alert alert-danger text-center">
                                <span class="">{{$message}}</span>
                                <button type="button" class="close" data-dismiss="alert">
                                    <span>×</span>
                                </button>
                            </div>
                            @enderror
                            <div class="form-group row justify-content-center">
                                <label for="email" class="col-sm-3 col-form-label text-sm-right">Email:</label>
                                <div class="col-sm-6 emailGroup">
                                    <input type="email" class="form-control" id="email" placeholder="email@example.com" name="email" value="{{old('email')}}" required autofocus pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" />
                                    <div class="invalid-feedback">Enter valid email</div>
                                </div>
                            </div>
                            <div class="form-group row justify-content-center">
                                <label for="inputPassword" class="col-sm-3 col-form-label text-sm-right">Password:</label>
                                <div class="col-sm-6 input-group">
                                    <input type="password" class="form-control" id="inputPassword" name="password" required autofocus minlength="6" />
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-outline-primary showPassword" tabindex="-1">
                                            <i class="fas fa-eye-slash"></i>
                                        </button>
                                    </div>
                                    <div class="invalid-feedback">
                                        Enter your password. (Min: 6 characters)
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="form-group ma-5">
                                <div class="clearfix">
                                    <a href="{{route('register')}}" class="btn btn-outline-primary float-left">Register</a>
                                    <button type="submit" class="btn btn-primary float-right submit">
                                        Login
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection