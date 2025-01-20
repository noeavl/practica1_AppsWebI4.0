@extends('layouts.app')
@section('header.title')
Courses
@endsection
@section('header')
<div class="d-flex justify-content-end pe-4">
    <a href="{{ route('courses.create')}}" class="btn btn-primary">
        <i class="fa-solid fa-plus fs-2"></i>
    </a>
</div>
@endsection
@section('content')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Teacher</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Level</th>
                <th scope="col">Created At</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @if ($courses->isEmpty())
                <td colspan="7" class="text-center">No courses found</td>
            @else
                @foreach ($courses as $course)
                    <tr>
                        <th scope="row">{{ $course->id }}</th>
                        <td>{{ $course->user->name }}</td>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->description }}</td>
                        <td>{{ $course->level }}</td>
                        <td>{{ $course->created_at }}</td>
                        <td>
                            <a href="{{ route('courses.show', $course) }}" class="btn btn-info">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="{{ route('courses.edit', $course) }}" class="btn btn-primary">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#modalDelete-{{ $course->id }}">
                                <i class="fa-solid fa-trash"></i>
                            </button>

                            <div class="modal fade" id="modalDelete-{{ $course->id }}" tabindex="-1"
                                aria-labelledby="modalDeleteLabel-{{ $course->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="modalDeleteLabel-{{ $course->id }}">Delete Course
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete the course "{{ $course->name }}"?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <form action="{{ route('courses.destroy', $course->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Delete Modal -->
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    <div>
        {{ $courses->links() }}
    </div>
</div>
@endsection