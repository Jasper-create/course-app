<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/course', [CourseController::class, 'index'])->name('course.index');