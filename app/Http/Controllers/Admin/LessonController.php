<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class LessonController extends Controller
{
    public function create()
    {
        return view('admin.lessons.create');
    }
}
