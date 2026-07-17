<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SpecialtyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/pages/course', function () {
    return view('courses.course-page');
});


Route::prefix('admin')->group(function() {

    Route::resource('programs', ProgramController::class);

    Route::resource('specialties', SpecialtyController::class);

    });

    Route::resource('courses', CourseController::class);
