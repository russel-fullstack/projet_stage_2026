<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chapiter;
use App\Models\Course;
use Illuminate\Http\Request;

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

     public function store(Request $request, Course $course)
    {

        $validated = $request->validate([
            'chapiter_id' => [
                'required',
                'exists:chapiters,id',
            ],

            'title' => [
                'required',
                'string',
                'max:255',
            ],

            'content' => [
                'nullable',
                'string',
            ],

            'video_url' => [
                'required',
                'file',
                'mimes:mp4,webm,mov',
                'max:25600', // 25MB
            ],
        ]);

        $chapter = Chapiter::where('course_id', $course->id)
        ->findOrFail($validated['chapiter_id']);

        $videoPath = $request
            ->file('video_url')
            ->store('lessons/videos', 'public');

        $lesson = $chapter->lessons()->create([
            'title' => $validated['title'],
            'content' => $validated['content'] ?? null,
            'video_url' => $videoPath,
            'order' => ($chapter->lessons()->max('order') ?? 0) + 1,
        ]);
        return redirect()
            ->route(
                'list-courses.lesson-create',
                $course
            )
            ->with(
                'success',
                'Leçon ajoutée avec succès.'
            );
    }
}
