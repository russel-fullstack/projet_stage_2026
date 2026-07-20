<?php

use App\Http\Controllers\Admin\Courses\AdminCourseController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RapportController;
use App\Http\Controllers\Admin\Users\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SpecialtyController;
use App\Http\Controllers\Users\UserDashController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('accueil');

Route::get('/pages/course', function () {
    return view('courses.courses-show');
})->name('courses.test');


Route::prefix('user')->group(function () {

Route::get('user-dashboard', [UserDashController::class, 'index'])->name('user-dashboard');

});

Route::prefix('admin')->group(function() {

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('programs', ProgramController::class);
    Route::resource('specialties', SpecialtyController::class);
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('admin-courses', [AdminCourseController::class, 'index'])->name('admin-courses.index');
    Route::get('rapports', [RapportController::class, 'index'])->name('rapports.index');
    });

    Route::resource('courses', CourseController::class);
