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
Create Course
@endsection
@section('content')
<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="row w-50">
        <div class="col-12">
            <h1 class="text-center">Create a Course</h1>
        </div>
        <form action="{{ route('courses.store')}}" method="POST">
            @csrf
            <div class="mb-3 col-12">
                <input type="number" class="form-control custom-input" value="{{ Auth::user()->id }}" name="user_id"
                    hidden required>
            </div>
            <div class="mb-3 col-12">
                <input type="text" class="form-control custom-input @error('name') is-invalid @enderror"
                    id="exampleFormControlInput1" placeholder="Name" name="name">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="mb-3 col-12">
                <textarea name="description"
                    class="form-control custom-input @error('description') is-invalid @enderror"
                    placeholder="Description" id="exampleFormControlTextarea1" rows="3"></textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="mb-3 col-12">
                <select name="level" class="form-control custom-input @error('level') is-invalid @enderror"
                    id="exampleFormControlSelect1">
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
        </form>
    </div>
</div>
@endsection