<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/courses', [CourseController::class, 'index'])->name('course.index');
Route::get('/courses/add', [CourseController::class,'create'])->name('course.create');
Route::post('courses', [CourseController::class,'store'])->name('course.store');

//Get the eddit page
Route::get('/courses/{course}/edit', [CourseController::class, 'edit'])->name('course.edit');
Route::put('courses/{course}', [CourseController::class, 'update'])->name('course.update');

//Show course details
Route::get('/courses/{course}/show', [CourseController::class, 'show'])->name('course.show');


//Delete the course
Route::delete('/courses/{course}', [CourseController::class, 'destroy'])->name('course.destroy');