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


Route::middleware(['auth'])->prefix('/panel')->group(function () {
    Route::get('/', [App\Http\Controllers\AdminPanel::class, 'index'])->name('admin.index');

    Route::group(["prefix" => 'varsity'], function () {
        Route::post('/', [App\Http\Controllers\VarsityController::class, 'store'])->name('varsity.store');
    });
    Route::group(["prefix" => 'department'], function () {
        Route::post('/', [App\Http\Controllers\DepartmentController::class, 'store'])->name('department.store');
        Route::get('/getall', [App\Http\Controllers\DepartmentController::class, 'getAll'])->name('department.ajaxget');
    });

    Route::group(["prefix" => 'course'], function () {
        Route::post('/', [App\Http\Controllers\CourseController::class, 'index'])->name('course.index');
        Route::get('/add', [App\Http\Controllers\CourseController::class, 'create'])->name('course.create');
        Route::post('/add', [App\Http\Controllers\CourseController::class, 'store'])->name('course.store');
        Route::get('/getall', [App\Http\Controllers\CourseController::class, 'getAll'])->name('course.ajaxget');
    });

    Route::group(["prefix" => 'course'], function () {
        Route::post('/', [App\Http\Controllers\CourseController::class, 'index'])->name('post.index');
        Route::get('/add', [App\Http\Controllers\CourseController::class, 'create'])->name('post.create');
        Route::post('/add', [App\Http\Controllers\CourseController::class, 'store'])->name('post.store');
        Route::get('/getall', [App\Http\Controllers\CourseController::class, 'getAll'])->name('post.ajaxget');
    });
});