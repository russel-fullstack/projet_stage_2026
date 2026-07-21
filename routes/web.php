<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ChapiterController;
use App\Http\Controllers\Admin\Courses\AdminCourseController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LessonController;
use App\Http\Controllers\Admin\RapportController;
use App\Http\Controllers\Admin\Users\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\SpecialtyController;
use App\Http\Controllers\Users\SuggestionController;
use App\Http\Controllers\Users\UserDashController;

Route::get('/', [WelcomeController::class, 'index'])->name('accueil');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::prefix('user')->group(function () {
Route::resource('suggestion-course', SuggestionController::class)->only(['index', 'store']);
Route::get('user-dashboard', [UserDashController::class, 'index'])->name('user-dashboard');
Route::get('chapiter', [UserDashController::class, 'chapiter'])->name('chapiter');
Route::get('certifications', [UserDashController::class, 'certified'])->name('certified');
Route::get('quizzes', [QuizController::class, 'index'])->name('quizzes.index');
});

Route::prefix('admin')->group(function() {
    Route::resource('list-courses', AdminCourseController::class)->except(['show']);
    Route::get('list-courses/chapiter-create', [ChapiterController::class, 'create'])->name('list-courses.chapter');
    Route::get('list-courses/lesson-create', [LessonController::class, 'create'])->name('list-courses.lesson-create');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('programs', ProgramController::class);
    Route::resource('specialties', SpecialtyController::class);
    Route::resource('users', UserController::class);
    Route::get('rapports', [RapportController::class, 'index'])->name('rapports.index');
    });


    Route::resource('courses', CourseController::class);



require __DIR__.'/auth.php';
