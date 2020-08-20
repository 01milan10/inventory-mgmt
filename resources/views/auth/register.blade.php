@extends('layouts.app')

@section('title')
<title>Register</title>
@endsection

@section('content')
<div class="login-register" style="background-image:url(login-register.jpg); padding:0 !important;">
    <div class="container">
        <div class="row mx-auto justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-12 col-sm-12 col-md-8">

                <form action="{{ route('register') }}" method="POST" class="needs-validation" novalidate>
                    @csrf()
                    <div class="card border-primary shadow">
                        <div class="card-title display-4 text-center">Register</div>
                        <div class="card-body">
                            @error('name')
                            <div class="alert alert-danger">
                                <span>{{$message}}</span>
                                <button data-dismiss="alert">x</button>
                            </div>
                            @enderror
                            @error('email')
                            <div class="alert alert-danger">
                                {{$message}}
                                <button data-dismiss="alert">x</button>

                            </div>
                            @enderror

                            @error('password')
                            <div class="alert alert-danger">
                                {{$message}}
                                <button type='button' class="close" data-dismiss="alert">x</button>

                            </div>
                            @enderror
                            <div class="form-group row justify-content-center">
                                <label for="name" class="col-sm-3 col-form-label text-sm-right">Name:</label>
                                <div class="col-sm-6 ">
                                    <input type="text" class="form-control " id="name" placeholder="Full Name" name="name" value="{{old('name')}}" required autofocus />
                                    <div class="invalid-feedback">
                                        Enter your name.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row justify-content-center">
                                <label for="email" class="col-sm-3 col-form-label text-sm-right">Email:</label>
                                <div class="col-sm-6 ">
                                    <input type="email" class="form-control " id="email" placeholder="email@example.com" name="email" value="{{old('email')}}" required autofocus pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" />
                                    <div class="invalid-feedback">
                                        Enter your email.
                                    </div>

                                </div>
                            </div>
                            <div class="form-group row justify-content-center">
                                <label for="inputPassword" class="col-sm-3 col-form-label text-sm-right">Password:</label>
                                <div class="col-sm-6 input-group ">
                                    <input type="password" class="form-control" id="inputPassword" name="password" required autofocus minlength="6" />
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-outline-primary showPassword" tabindex="-1">
                                            <i class="fas fa-eye-slash"></i>
                                        </button>
                                    </div>
                                    <div class="invalid-feedback">
                                        Enter your password.(Min: 6 characters)
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row justify-content-center">
                                <label for="password_confirmation" class="col-sm-3 col-form-label text-sm-right">Confirm Password:</label>
                                <div class="col-sm-6 input-group">
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required autofocus />
                                    <div class="invalid-feedback">
                                        Confirm your password.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="form-group ma-5">
                                <a href="{{route('login')}}" class="btn btn-outline-primary float-left">Login</a>
                                <button type="submit" class="btn btn-primary float-right">
                                    Register
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection