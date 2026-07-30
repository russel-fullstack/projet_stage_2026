<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseRequest;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Specialty;
use App\Models\User;
use App\Services\MinioService;

class CourseController extends Controller
{
    public function __construct(
        private MinioService $minio
    ) {}

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

    public function show(Course $course, ?Lesson $lesson = null)
    {
        $admin = User::where('role', '', 'admin', false)->first();
        $course->load([
            'chapiters' => function ($query) {
                $query->orderBy('order');
            },
            'chapiters.lessons' => function ($query) {
                $query->orderBy('order');
            },
        ]);

        $activeLesson = $lesson;

        $lessons = $course->chapiters->flatMap->lessons->filter(fn ($lesson) => ! empty($lesson->video_url));
        $firstLesson = $lessons->first();

        $videoUrl = $firstLesson ? $this->minio->url($firstLesson->video_url) : null;

        $lessonVideos = $lessons->mapWithKeys(function ($lesson) { return [ $lesson->id => [ 'title' => $lesson->title, 'url' => $this->minio->url($lesson->video_url), ], ]; });


            if (!$activeLesson) {
                $activeLesson = $course->chapiters
                ->flatMap->lessons
                ->first();
            }

            if (
                $lesson &&!$course->chapiters->contains(
                fn ($chapter) => $chapter->lessons->contains('id', $lesson->id)
                )
                ) {
                abort(404);
            }

        return view('courses.courses-show', compact('course', 'videoUrl', 'firstLesson', 'lessonVideos', 'lesson', 'activeLesson', 'admin'));
    }

    public function create()
    {
        $specialties = Specialty::with('program')
            ->orderBy('name')
            ->get();

        return view('admin.wizard.create', compact('specialties'));
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()
            ->route('list-courses.index')
            ->with('success', 'Cours supprimé avec succès.');
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
