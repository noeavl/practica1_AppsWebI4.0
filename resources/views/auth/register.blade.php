@extends('layouts.guest')

@section('title')
Register
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
<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="row w-50">
        <div class="col-12">
            <h1 class="text-center">Crea tu cuenta de Core X</h1>
            <p class="text-center">
                Solo necesitas una cuenta para acceder a todos los servicios de Core X
            </p>
        </div>
        <form action="#" method="POST">
            @csrf
            <div class="mb-3 col-12">
                <input type="text" class="form-control custom-input" id="exampleFormControlInput1" placeholder="Nombre"
                    required>
            </div>
            <div class="row mb-3">
                <div class="mb-3 col-6">
                    <input type="text" class="form-control custom-input" id="exampleFormControlInput2"
                        placeholder="Apellido Paterno" required>
                </div>
                <div class="mb-3 col-6">
                    <input type="text" class="form-control custom-input" id="exampleFormControlInput3"
                        placeholder="Apellido Materno" required>
                </div>
            </div>
            <div class="col-12">
                <hr>
            </div>
            <div class="mb-3 mt-3 col-12">
                <input type="text" class="form-control custom-input" id="exampleFormControlInput5"
                    placeholder="Nombre de Usuario" required>
            </div>
            <div class="mb-3 col-12">
                <input type="email" class="form-control custom-input" id="exampleFormControlInput6"
                    placeholder="Correo Electrónico" required>
            </div>
            <div class="col-12">
                <hr>
            </div>
            <div class="mb-3 mt-3 col-12">
                <input type="password" class="form-control custom-input" id="exampleFormControlInput8"
                    placeholder="Contraseña" required>
            </div>
            <div class="mb-3 col-12">
                <input type="password" class="form-control custom-input" id="exampleFormControlInput9"
                    placeholder="Confirmar Contraseña" required>
            </div>
            <div class="my-4 text-center">
                <a href="{{ route('login')}}" style="text-decoration: none;">
                    ¿Ya tienes cuenta de Core X? Inicia Sesión <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary w-100">Registrarme</button>
            </div>
        </form>
    </div>
</div>
@endsection