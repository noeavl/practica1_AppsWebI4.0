@extends('layouts.guest')

@section('title')
Sign Up
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
        box-shadow: none;
        border-color: #0C6DFD;
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
Sign Up
@endsection
@section('body')
<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="row w-50">
        <div class="col-12">
            <h1 class="text-center">Create your Core X account.</h1>
            <p class="text-center">
                You only need one account to access all of Core X's services.
            </p>
        </div>
        <form action="{{ route('register')}}" method="POST">
            @csrf
            <div class="mb-3 col-12">
                <input type="text" class="form-control custom-input @error('realName') is-invalid @enderror"
                    id="exampleFormControlInput1" placeholder="Name" name="realName" value="{{ old('realName') }}">
                @error('realName')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="row mb-3">
                <div class="mb-3 col-6">
                    <input type="text" class="form-control custom-input @error('apPatern') is-invalid @enderror"
                        id="exampleFormControlInput2" name="apPatern" placeholder="Father's last name."
                        value="{{ old('apPatern') }}">
                    @error('apPaterno')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="mb-3 col-6">
                    <input type="text" class="form-control custom-input @error('apMatern') is-invalid @enderror"
                        id="exampleFormControlInput3" name="apMatern" placeholder="Mother's last name."
                        value="{{ old('apMatern') }}">
                    @error('apMaterno')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <hr>
            </div>
            <div class="mb-3 mt-3 col-12">
                <input type="text" class="form-control custom-input @error('name') is-invalid @enderror"
                    id="exampleFormControlInput5" name="name" placeholder="Username" value="{{ old('name') }}">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="mb-3 col-12">
                <input type="email" class="form-control custom-input @error('email') is-invalid @enderror"
                    id="exampleFormControlInput6" name="email" placeholder="Email" value="{{ old('email') }}">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="col-12">
                <hr>
            </div>
            <div class="mb-3 mt-3 col-12">
                <input type="password" class="form-control custom-input @error('password') is-invalid @enderror"
                    id="exampleFormControlInput8" name="password" placeholder="Password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="mb-3 col-12">
                <input type="password" class="form-control custom-input" id="exampleFormControlInput9"
                    name="password_confirmation" placeholder="Password Confirmation">
            </div>
            <div class="my-4 text-center">
                <a href="{{ route('login')}}" style="text-decoration: none;">
                    Do you already have a Core X account? Log in. <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary w-100">Sign Up</button>
            </div>
        </form>
    </div>
</div>
@endsection