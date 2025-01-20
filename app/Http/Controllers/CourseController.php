<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function index()
    {
        return view('courses.layout', [
            'courses' => Course::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }
    public function create()
    {
        return view('courses.create');
    }
    public function store(CourseRequest $request)
    {
        Course::create($request->validated());
        return redirect()->route('courses.index')->with('success', 'Course created successfully');
    }
    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }
    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }
    public function update(CourseRequest $request, Course $course)
    {
        $course->update($request->validated());
        return redirect()->route('courses.index')->with('success', 'Course updated successfully');
    }
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index')->with('success', 'Course deleted successfully');
    }
}
