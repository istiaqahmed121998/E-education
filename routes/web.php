<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [App\Http\Controllers\PostController::class, 'index'])->name('post.index');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/varsities', [App\Http\Controllers\VarsityController::class, 'index'])->name('varsity.index');
Route::get('/varsities/{varsity}', [App\Http\Controllers\VarsityController::class, 'show'])->name('varsity.show');



Route::get('/depts', [App\Http\Controllers\DepartmentController::class, 'index'])->name('dept.index');

Route::get('/depts/{department}', [App\Http\Controllers\DepartmentController::class, 'show'])->name('dept.show');



Route::get('/courses', [App\Http\Controllers\CourseController::class, 'index'])->name('course.index');

Route::get('/courses/{course}', [App\Http\Controllers\CourseController::class, 'show'])->name('course.show');

Route::get('/courses/{course}/lab', [App\Http\Controllers\CourseController::class, 'lab'])->name('course.lab');

Route::get('/courses/{course}/assignment', [App\Http\Controllers\CourseController::class, 'assignment'])->name('course.assignment');

Route::get('/courses/{course}/book', [App\Http\Controllers\CourseController::class, 'book'])->name('course.book');

Route::get('/courses/{course}/note', [App\Http\Controllers\CourseController::class, 'note'])->name('course.note');


Route::get('lab', [App\Http\Controllers\LabController::class, 'index'])->name('lab.index');
Route::get('lab/{lab}', [App\Http\Controllers\LabController::class, 'show'])->name('lab.show');

Route::get('post/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('post.show');