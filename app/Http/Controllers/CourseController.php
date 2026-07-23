<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Specialty;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::with('specialty')
        ->latest()
        ->paginate(5);
        $specialties = Specialty::all();
        return view('courses.courses-index', compact('courses', 'specialties'));
    }


    public function show(Course $course)
    {
        $course = Course::with('specialty')->findOrFail($course->id);
        return view('courses.courses-show', compact('course'));
    }

    public function create()
    {
        $specialties = Specialty::all();
        $courses = Course::all();
        return view('courses.courses-create', compact('specialties', 'courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'specialty_id' => 'required',
        ]);
        Course::created($request->all());
        $specialties = Specialty::all();
        return redirect()->route('courses.index', compact('specialties'));
    }
}
