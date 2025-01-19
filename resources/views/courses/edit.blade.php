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
            <div class="row">
                <div class="mb-3 col-6">
                    <select class="form-control custom-input @error('type') is-invalid @enderror"
                        id="exampleFormControlInput2" name="type" aria-label="Default select example">
                        <option selected>Select Type</option>
                        <option value="free">Free</option>
                        <option value="paid">Paid</option>
                    </select>
                    @error('type')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="mb-3 col-6">
                    <input type="number" class="form-control custom-input @error('price') is-invalid @enderror"
                        id="exampleFormControlInput3" name="price" value="{{ $course->price }}" placeholder="Price">
                    @error('price')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary w-100">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection