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


Route::get('/', [App\Http\Controllers\PostController::class, 'index'])->name('home.index');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/varsities', [App\Http\Controllers\VarsityController::class, 'index'])->name('varsity.index');
Route::get('/varsity/{varsity}', [App\Http\Controllers\VarsityController::class, 'show'])->name('varsity.show');



Route::get('/depts', [App\Http\Controllers\DepartmentController::class, 'index'])->name('department.index');

Route::get('/depts/{department}', [App\Http\Controllers\DepartmentController::class, 'show'])->name('department.show');



Route::get('/courses', [App\Http\Controllers\CourseController::class, 'index'])->name('course.index');

Route::get('/courses/{course}', [App\Http\Controllers\CourseController::class, 'show'])->name('course.show');

Route::get('/courses/{course}/lab', [App\Http\Controllers\CourseController::class, 'lab'])->name('course.lab');

Route::get('/courses/{course}/assignment', [App\Http\Controllers\CourseController::class, 'assignment'])->name('course.assignment');

Route::get('/courses/{course}/book', [App\Http\Controllers\CourseController::class, 'book'])->name('course.book');

Route::get('/courses/{course}/note', [App\Http\Controllers\CourseController::class, 'note'])->name('course.note');


Route::get('lab', [App\Http\Controllers\LabController::class, 'index'])->name('lab.index');
Route::get('lab/{lab}', [App\Http\Controllers\LabController::class, 'show'])->name('lab.show');
Route::get('post/', [App\Http\Controllers\PostController::class, 'index'])->name('post.index');
Route::get('post/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('post.show');


Route::middleware('auth')->prefix('/panel')->group(function () {
    Route::get('/', [App\Http\Controllers\AdminPanel::class, 'index'])->name('admin.index');
    Route::get('/post/add', [App\Http\Controllers\PostController::class, 'index'])->name('post.create');

    Route::group(["prefix" => 'varsity'], function () {
        Route::get('/', [App\Http\Controllers\VarsityController::class, 'panelIndex'])->name('panelvarsity.index');
        Route::post('/add', [App\Http\Controllers\VarsityController::class, 'store'])->name('panelvarsity.store');
        Route::get('/add', [App\Http\Controllers\VarsityController::class, 'create'])->name('panelvarsity.create');
        Route::get('/edit/{varsity}', [App\Http\Controllers\VarsityController::class, 'edit'])->name('panelvarsity.edit');
        Route::patch('/edit/{varsity}', [App\Http\Controllers\VarsityController::class, 'update'])->name('panelvarsity.update');
        Route::delete('/delete/{varsity}', [App\Http\Controllers\VarsityController::class, 'destroy'])->name('panelvarsity.destroy');
        Route::get('/getall', [App\Http\Controllers\VarsityController::class, 'getAll'])->name('panelvarsity.ajaxget');
        Route::get('/{id}/departments', [App\Http\Controllers\VarsityController::class, 'varsityDepartments'])->name('panelvarsity.department');
    });
    Route::group(["prefix" => 'department'], function () {
        Route::get('/add', [App\Http\Controllers\DepartmentController::class, 'create'])->name('paneldepartment.create');
        Route::post('/add', [App\Http\Controllers\DepartmentController::class, 'store'])->name('paneldepartment.store');
        Route::get('/getall', [App\Http\Controllers\DepartmentController::class, 'getAll'])->name('paneldepartment.ajaxget');
        Route::get('/{id}/courses', [App\Http\Controllers\DepartmentController::class, 'departmentCourses'])->name('paneldepartment.course');
    });
    Route::group(["prefix" => 'course'], function () {
        Route::post('/', [App\Http\Controllers\CourseController::class, 'index'])->name('panelcourse.index');
        Route::get('/{id}/all', [App\Http\Controllers\CourseController::class, 'all'])->name('panelcourse.all');
        Route::get('/add', [App\Http\Controllers\CourseController::class, 'create'])->name('panelcourse.create');
        Route::post('/add', [App\Http\Controllers\CourseController::class, 'store'])->name('panelcourse.store');
        Route::get('/getall', [App\Http\Controllers\CourseController::class, 'getAll'])->name('panelcourse.ajaxget');
        Route::get('/{id}/labs', [App\Http\Controllers\CourseController::class, 'labs'])->name('panelcourse.lab');
        Route::get('/{id}/assignments', [App\Http\Controllers\CourseController::class, 'assignments'])->name('panelcourse.assignment');
        Route::get('/{id}/notes', [App\Http\Controllers\CourseController::class, 'notes'])->name('panelcourse.notes');
        Route::get('/{id}/assessments', [App\Http\Controllers\CourseController::class, 'assessments'])->name('panelcourse.assessment');
        Route::group(["prefix" => 'lab'], function () {
            Route::get('/add', [App\Http\Controllers\LabController::class, 'create'])->name('panelLab.create');
            Route::post('/add', [App\Http\Controllers\LabController::class, 'store'])->name('panelLab.store');
        });
        Route::group(["prefix" => 'assignment'], function () {
            Route::get('/add', [App\Http\Controllers\AssignmentController::class, 'create'])->name('panelassignment.create');
            Route::post('/add', [App\Http\Controllers\AssignmentController::class, 'store'])->name('panelassignment.store');
        });

        Route::group(["prefix" => 'assessment'], function () {
            Route::get('/add', [App\Http\Controllers\AssessmentController::class, 'create'])->name('panelassessment.create');
            Route::post('/add', [App\Http\Controllers\AssessmentController::class, 'store'])->name('panelassessment.store');
        });


        Route::group(["prefix" => 'note'], function () {
            Route::get('/add', [App\Http\Controllers\NoteController::class, 'create'])->name('panelnote.create');
            Route::post('/add', [App\Http\Controllers\NoteController::class, 'store'])->name('panelnote.store');
        });
    });
    Route::group(["prefix" => 'post'], function () {
        Route::get('/add', [App\Http\Controllers\PostController::class, 'create'])->name('panelpost.create');
        Route::post('/add', [App\Http\Controllers\PostController::class, 'store'])->name('panelpost.store');
        Route::get('/edit/{post}', [App\Http\Controllers\PostController::class, 'edit'])->name('panelpost.edit');
        Route::patch('/edit/{post}', [App\Http\Controllers\PostController::class, 'update'])->name('panelpost.update');
        Route::get('/getall', [App\Http\Controllers\PostController::class, 'getAll'])->name('panelpost.ajaxget');
    });
});