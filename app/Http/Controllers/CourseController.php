<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses.courses-index', compact('courses'));
    }

    public function create()
    {
        return view('courses.courses-create');
    }

    public function store(Request $request)
    {
        dd($request);
    }
}
