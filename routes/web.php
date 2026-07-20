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
})->name('chapiters.test');


Route::prefix('user')->group(function () {

Route::get('user-dashboard', [UserDashController::class, 'index'])->name('user-dashboard');
Route::get('chapiter', [UserDashController::class, 'chapiter'])->name('chapiter');
Route::get('certifications', [UserDashController::class, 'certified'])->name('certified');

});

Route::prefix('admin')->group(function() {

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('programs', ProgramController::class);
    Route::resource('specialties', SpecialtyController::class);
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('admin-chapiters', [AdminCourseController::class, 'index'])->name('admin-chapiters.index');
    Route::get('rapports', [RapportController::class, 'index'])->name('rapports.index');
    });

    Route::resource('chapiters', CourseController::class);
