@extends('layouts.guest')
@section('title')
Login
@endsection
@section('style')
<style>
    .custom-input {
        border-color: gray;
        box-shadow: none;
        height: 60px;
        border-radius: 15px;
    }

    .custom-input:focus {
        border-color: #0C6DFD;
        box-shadow: none;
        border-width: 2px;
    }

    .btn {
        border-radius: 30px;
        height: 60px;
        letter-spacing: 0.5px;
    }
</style>
@endsection
@section('title-header')
Login
@endsection
@section('body')

<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="row w-50 mt-5">
        <div class="col-12 mb-3">
            <h1 class="text-center">Core X account.</h1>
            <p class="text-center">Log in to Core X.</p>
        </div>
        <form action="{{route('auth.login')}}" method="POST" class="p-0">
            @csrf
            <div class="mb-3 col-12">
                <input type="email" class="form-control custom-input @error('email') is-invalid @enderror"
                    id="exampleFormControlInput1" name="email" placeholder="Email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="mb-3 col-12">
                <input type="password" class="form-control custom-input @error('password') is-invalid @enderror"
                    id="exampleFormControlInput1" name="password" placeholder="Password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="my-4 text-center">
                <a href="{{ route('register')}}" style="text-decoration: none;">
                    Don't have an account? Sign up. <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </div>
        </form>
    </div>
</div>
@endsection