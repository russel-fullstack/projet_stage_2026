<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseRequest;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Specialty;
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
    $course->load([
        'chapiters' => function ($query) {
            $query->orderBy('order');
        },
        'chapiters.lessons' => function ($query) {
            $query->orderBy('order');
        },
    ]);

    // Première leçon si aucune leçon n'est sélectionnée
    if (!$lesson) {
        $lesson = $course->chapiters
            ->flatMap->lessons
            ->first();
    }

    // Vérifier que la leçon appartient bien au cours
    if (
        $lesson &&
        !$course->chapiters->contains(
            fn ($chapter) =>
                $chapter->lessons->contains('id', $lesson->id)
        )
    ) {
        abort(404);
    }

    // Chapitre de la leçon active
    $activeChapter = $lesson
        ? $course->chapiters->first(
            fn ($chapter) =>
                $chapter->lessons->contains('id', $lesson->id)
        )
        : null;

    // URL vidéo MinIO
    $videoUrl = null;

    if ($lesson && $lesson->video_url) {
        $videoUrl = $this->minio->url($lesson->video_url);
    }

    // Toutes les leçons du cours
    $allLessons = $course->chapiters
        ->flatMap->lessons
        ->values();

    // Position de la leçon actuelle
    $currentIndex = $lesson
        ? $allLessons->search(
            fn ($item) => $item->id === $lesson->id
        )
        : null;

    $previousLesson = null;
    $nextLesson = null;

    if ($currentIndex !== false && $currentIndex !== null) {

        $previousLesson = $allLessons->get($currentIndex - 1);

        $nextLesson = $allLessons->get($currentIndex + 1);
    }

    return view('courses.courses-show', [
        'course' => $course,
        'chapters' => $course->chapiters,

        'activeLesson' => $lesson,
        'activeChapter' => $activeChapter,

        'videoUrl' => $videoUrl,

        'allLessons' => $allLessons,
        'previousLesson' => $previousLesson,
        'nextLesson' => $nextLesson,
    ]);
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
