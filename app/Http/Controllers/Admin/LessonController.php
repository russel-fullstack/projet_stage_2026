<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;

class LessonController extends Controller
{
    public function create(Course $course)
    {
        $course->load([
            'chapiters.lessons',
        ]);

        return view(
            'admin.lessons.create',
            compact('course')
        );
    }
}
