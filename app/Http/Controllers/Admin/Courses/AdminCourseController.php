<?php

namespace App\Http\Controllers\Admin\Courses;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class AdminCourseController extends Controller
{
    public function index()
    {
        $courses = Course::latest()->paginate(5);
        return view('admin.courses.index', compact('courses'));
    }
    public function create()
    {
        return view('courses.courses-create');
    }

}
