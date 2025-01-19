@extends('layouts.app')
@section('header.title')
{{ $course->name }}
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
            <p class="text-start fs-5">
                {{ $course->description }}
            </p>
        </div>
    </div>
</div>
@endsection