@extends('layouts.guest')
@section('title')
Bienvenido
@endsection
@section('title-header')
Core X Education
@endsection
@section('body')
<div class="container">
    <div class="row my-5">
        <div class="col-6">
            <h1 class="text-start fs-1 fw-bold">
                <span style="opacity: 0.7;">¡Welcome to</span> <span style="color: black;">Core X</span> <span
                    style="opacity: 0.7;">Education!</span>
            </h1>
        </div>
        <div class="col-6">
            <p class="text-start fs-5">We offer courses in various technologies and programming languages to help you
                achieve your goals. Learning is the first step toward success!</p>
        </div>
    </div>
</div>

<div class="container-fluid p-0">
    <div class="image-background"
        style="background-image: url('https://digileaders.com/wp-content/uploads/2018/09/coding-on-laptop_4460x4460-e1537450504196.jpg'); background-size: cover; background-position: bottom; height: 200px;">
    </div>
</div>

<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <h2 class="text-center fs-3 fw-bold">Technologies</h2>
            <div class="d-flex flex-wrap justify-content-center">
                <div class="m-3 text-center">
                    <i class="fab fa-laravel" style="font-size: 50px;" title="Laravel"></i>
                    <p class="fw-bold">Laravel 9</p>
                </div>
                <div class="m-3 text-center">
                    <i class="fab fa-node-js" style="font-size: 50px;" title="NodeJS"></i>
                    <p class="fw-bold">NodeJS</p>
                </div>
                <div class="m-3 text-center">
                    <i class="fab fa-bootstrap" style="font-size: 50px;" title="Bootstrap"></i>
                    <p class="fw-bold">Bootstrap</p>
                </div>
                <div class="m-3 text-center">
                    <i class="fab fa-react" style="font-size: 50px;" title="React"></i>
                    <p class="fw-bold">React</p>
                </div>
                <div class="m-3 text-center">
                    <i class="fab fa-vuejs" style="font-size: 50px;" title="VueJS"></i>
                    <p class="fw-bold">VueJS</p>
                </div>
            </div>
            <div class="m-3 text-center">
                <i class="fab fa-angular" style="font-size: 50px;" title="Angular"></i>
                <p class="fw-bold">Angular</p>
            </div>
        </div>
    </div>
</div>
</div>
@endsection