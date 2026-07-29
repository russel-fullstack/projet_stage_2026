<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseRequest;
use App\Models\Course;
use App\Models\Specialty;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::with('specialty')
        ->latest()
        ->paginate(5);
        $specialties = Specialty::with('program')
            ->orderBy('name')
            ->get();
        return view('courses.courses-index', compact('courses', 'specialties'));
    }


    public function show(Course $course)
    {
        $course = Course::with('specialty')->findOrFail($course->id);
        return view('courses.courses-show', compact('course'));
    }

    public function create()
    {
        $specialties = Specialty::with('program')
            ->orderBy('name')
            ->get();
        return view('admin.wizard.create', compact('specialties'));
    }

    public function store(StoreCourseRequest $request)
    {
        $data = $request->validated();

        $data['image_cover'] = $request
            ->file('image_cover')
            ->store('courses', 'public');

        $course = Course::create($data);

        return redirect()
            ->route(
                'list-courses.index',
                $course
            )
            ->with(
                'success',
                'Cours créé avec succès. Vous pouvez maintenant ajouter les chapitres.'
            );
    }
}
