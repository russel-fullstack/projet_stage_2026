<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::with('specialty')
        ->latest()
        ->paginate(5);
        return view('courses.courses-index', compact('courses'));
    }

    public function show(Course $course)
    {
        $course = Course::with('specialty')->findOrFail($course->id);
        return view('courses.courses-show', compact('course'));
    }

}
