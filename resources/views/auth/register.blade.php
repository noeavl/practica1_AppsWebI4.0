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
        @if ($errors->any())
            <div class="alert alert-danger bg-danger" style="border-radius: 15px; border-width: 0px;">
                <ul class="mb-0 list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li class="text-center text-white">
                            <i class="fas fa-exclamation-triangle text-white"></i>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('register')}}" method="POST">
            @csrf
            <div class="mb-3 col-12">
                <input type="text" class="form-control custom-input" id="exampleFormControlInput1" placeholder="Name"
                    name="name" required>
            </div>
            <div class="row mb-3">
                <div class="mb-3 col-6">
                    <input type="text" class="form-control custom-input" id="exampleFormControlInput2" name="apPaterno"
                        placeholder="Father's last name." required>
                </div>
                <div class="mb-3 col-6">
                    <input type="text" class="form-control custom-input" id="exampleFormControlInput3" name="apMaterno"
                        placeholder="Mother's last name." required>
                </div>
                <div class="mb-3 col-12">
                    <select class="form-control custom-input" id="exampleFormControlInput4" name="role"
                        aria-label="Default select example" required>
                        <option selected>Select Role</option>
                        <option value="student">Estudent</option>
                        <option value="teacher">Teacher</option>
                    </select>
                </div>
            </div>
            <div class="col-12">
                <hr>
            </div>
            <div class="mb-3 mt-3 col-12">
                <input type="text" class="form-control custom-input" id="exampleFormControlInput5" name="name"
                    placeholder="Username" required>
            </div>
            <div class="mb-3 col-12">
                <input type="email" class="form-control custom-input" id="exampleFormControlInput6" name="email"
                    placeholder="Email" required>
            </div>
            <div class="col-12">
                <hr>
            </div>
            <div class="mb-3 mt-3 col-12">
                <input type="password" class="form-control custom-input" id="exampleFormControlInput8" name="password"
                    placeholder="Password" required>
            </div>
            <div class="mb-3 col-12">
                <input type="password" class="form-control custom-input" id="exampleFormControlInput9"
                    name="password_confirmation" placeholder="Password Confirmation" required>
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