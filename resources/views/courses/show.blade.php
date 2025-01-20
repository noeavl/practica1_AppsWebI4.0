@extends('layouts.app')
@section('header.title')
Course Detail
@endsection
@section('header')
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h2 class="text-start fw-bold fs-2">
                {{ $course->name }}
            </h2>
            <p class="text-start fs-5 text-justify">
                {{ $course->description }}
            </p>
        </div>
        <div class="col-2">
            <h2>Teacher</h2>
            <p class="fs-5">{{ $course->user->name }}</p>
        </div>
        <div class="col-2">
            <h2>Level</h2>
            <p class="fs-5">{{ $course->level }}</p>
        </div>
        <div class="col-2">
            <h2>Created At </h2>
            <p class="fs-5">{{ $course->created_at }}</p>
        </div>
        @endsection