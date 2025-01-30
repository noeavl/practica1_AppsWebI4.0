@extends('layouts.app')
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

    .alert {
        border-radius: 15px;
        background-color: rgb(0, 170, 93);
        text-align: center;
        color: white;
        font-weight: bold;
        border: none;
        position: fixed;
        bottom: 0;
        width: 500px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 9999;
        animation: invisible 6s forwards;
    }

    @keyframes invisible {
        0% {
            opacity: 1;
        }

        100% {
            opacity: 0;
        }
    }
</style>
@endsection
@section('header.title')
Edit Course
@endsection
@section('content')
<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="row w-50">
        <div class="col-12">
            <h1 class="text-center">Edit a Course</h1>
        </div>
        <form action="{{ route('courses.update', $course)}}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <input type="number" class="form-control custom-input" value="{{ Auth::user()->id }}" name="user_id"
                    hidden required>
            </div>
            <div>
                <input type="number" class="form-control custom-input" value="{{ $course->id }}" name="id" hidden
                    required>
            </div>
            <div class="mb-3 col-12">
                <input type="text" class="form-control custom-input @error('name') is-invalid @enderror"
                    id="exampleFormControlInput1" placeholder="Name" value="{{ $course->name }}" name="name">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="mb-3 col-12">
                <textarea name="description"
                    class="form-control custom-input @error('description') is-invalid @enderror"
                    placeholder="Description" id="exampleFormControlTextarea1"
                    rows="3">{{ $course->description }}</textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="mb-3 col-12">
                <select class="form-control custom-input @error('level') is-invalid @enderror"
                    id="exampleFormControlInput2" name="level" aria-label="Default select example">
                    <option value="basic">Basic</option>
                    <option value="intermediate">Intermediate</option>
                    <option value="advanced">Advanced</option>
                </select>
                @error('level')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary w-100">Save</button>
            </div>
            @if (session('msg'))
                <div class="alert alert-success" role="alert">
                    {{ session('msg') }}
                </div>
            @endif
        </form>
    </div>
</div>
@endsection