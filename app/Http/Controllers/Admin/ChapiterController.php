<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreChapterRequest;
use App\Models\Chapiter;
use App\Models\Course;

class ChapiterController extends Controller
{
    public function create(Course $course)
    {
        $course->load([
            'chapiters' => function ($query) {
                $query->orderBy('order');
            }
        ]);

        return view(
            'admin.chapters.create',
            compact('course')
        );
    }
    public function store(StoreChapterRequest $request, Course $course)
    {
        $validated = $request->validated();

        $validated['order'] = ($course
                ->chapiters()
                ->max('order')) + 1;

        $course->chapiters()->create($validated);

        return redirect()
            ->route(
                'list-courses.chapter',
                $course
            )
            ->with(
                'success',
                'Chapitre ajouté avec succès.'
            );
    }
}
