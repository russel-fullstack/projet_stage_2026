<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ChapiterController;
use App\Http\Controllers\Admin\Courses\AdminCourseController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LessonController;
use App\Http\Controllers\Admin\RapportController;
use App\Http\Controllers\Admin\CourseWizardController;
use App\Http\Controllers\Admin\Users\UserController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\SpecialtyController;
use App\Http\Controllers\Users\SuggestionController;
use App\Http\Controllers\Users\UserDashController;

Route::get('/', [HomeController::class, 'index'])->name('accueil');
Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::get('login', [LoginController::class, 'index'])->name('login');


Route::middleware(['auth'])->group(function () {
    Route::prefix('user')->group(function () {
    Route::get('user-dashboard', [UserDashController::class, 'index'])->name('user-dashboard');
    Route::get('chapiter', [UserDashController::class, 'chapiter'])->name('chapiter');
    Route::get('certifications', [UserDashController::class, 'certified'])->name('certified');
    Route::get('quizzes', [QuizController::class, 'index'])->name('quizzes.index');
    Route::resource('suggestion-course', SuggestionController::class)->only(['index', 'store']);
        Route::get('/profile/password', function () {
            return view('profile.user.password-edit');
        })->name('profile.user.password.edit');

        Route::get('/profile/security', function () {
            return view('profile.user.security');
        })->name('profile.user.security');

        Route::get('/profile/login-info', function () {
            return view('profile.user.login-info');
        })->name('profile.user.login-info');


    });

Route::get('/profile', [ProfileController::class, 'edit'])
    ->name('profile.edit');

Route::delete('/profile', [ProfileController::class, 'destroy'])
    ->name('profile.destroy');

Route::patch('/profile', [ProfileController::class, 'update'])
    ->name('profile.update');
Route::put('/profile', [ProfileController::class, 'updatePassword'])
    ->name('profile.password.update');

Route::get('/user/passkeys', function () {
        return view('profile.user.passkeys', [
            'user' => auth()->user(),
            'passkeys' => auth()->user()->passkeys,
        ]);
    })->name('profile.passkeys');


});


Route::resource('courses', CourseController::class)->except(['show']);
Route::get('courses/{course}/{lesson?}', [CourseController::class, 'show'])->name('courses.show');

Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::resource('list-courses', AdminCourseController::class)->except(['show']);

    Route::resource('list-courses/chapiters', ChapiterController::class)->except(['create', 'store']);

        Route::get('list-courses/create', [CourseWizardController::class, 'create'])->name('list-courses.create');
    Route::post('list-courses', [CourseWizardController::class, 'store'])->name('list-courses.store');

    Route::post('list-courses/{course}/lessons', [LessonController::class, 'store'])->name('list-courses.lessons.store');
    Route::resource('list-courses/lessons', LessonController::class)->except(['create', 'store']);
    Route::get('dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
    Route::resource('programs', ProgramController::class);
    Route::resource('specialties', SpecialtyController::class);
    Route::resource('users', UserController::class);
    Route::get('rapports', [RapportController::class, 'index'])->name('rapports.index');

    Route::get('/profile/password', function () {
        return view('profile.admin.password-edit');
    })->name('profile.password.edit');

    Route::get('/profile/security', function () {
        return view('profile.admin.security');
    })->name('profile.security');

    Route::get('/profile/login-info', function () {
        return view('profile.admin.login-info');
    })->name('profile.login-info');
});
