@extends('layouts.guest')
@section('title')
Login
@endsection
@section('body')
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
<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="row w-50 mt-5">
        <div class="col-12 mb-3">
            <h1 class="text-center">Cuenta de Core X</h1>
            <p class="text-center">Iniciar Sesión en Core X</p>
        </div>
        <form action="#" method="POST" class="p-0">
            @csrf
            <div class="mb-3 col-12">
                <input type="email" class="form-control custom-input" id="exampleFormControlInput1"
                    placeholder="Correo Electrónico" required>
            </div>
            <div class="mb-3 col-12">
                <input type="password" class="form-control custom-input" id="exampleFormControlInput1"
                    placeholder="Contraseña" required>
            </div>
            <div class="my-4 text-center">
                <a href="{{ route('register')}}" style="text-decoration: none;">
                    ¿No tienes cuenta? Registrate <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
            </div>
        </form>
    </div>
</div>
@endsection