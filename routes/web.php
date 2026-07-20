<?php

use App\Http\Controllers\Admin\Courses\AdminCourseController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RapportController;
use App\Http\Controllers\Admin\Users\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SpecialtyController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('accueil');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/pages/course', function () {
    return view('courses.courses-show');
})->name('courses.test');


Route::prefix('admin')->group(function() {
    Route::resource('programs', ProgramController::class);

    Route::resource('specialties', SpecialtyController::class);

    Route::resource('users', UserController::class);

    Route::resource('admin-courses', AdminCourseController::class);

    Route::get('rapports', [RapportController::class, 'index'])->name('rapports.index');
    });

    Route::resource('courses', CourseController::class);
