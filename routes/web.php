<?php

use App\Http\Controllers\admin\AttendanceController;
use App\Http\Controllers\admin\GradesController;
use App\Http\Controllers\admin\KurasuController;
use App\Http\Controllers\admin\StudentController;
use App\Http\Controllers\admin\SubjectController;
use App\Http\Controllers\admin\TypeOfGradesController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/references', [FrontendController::class, 'references'])->name('references');
Route::middleware(['auth'])->group(function () {
    Route::get('my-profile/{id}', [UserController::class, 'profile'])->name('profile');
    Route::get('attendance-rate', [UserController::class, 'attendancerate'])->name('attendancerate');
    Route::get('grades', [UserController::class, 'grades'])->name('grades');
    Route::put('update-hocsinh/{id}', [UserController::class, 'update'])->name('update-hocsinh');
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [FrontendController::class, 'index'])->name('dashboard');
    //Class
    Route::get('admin-kurasu', [KurasuController::class, 'index'])->name('kurasu');
    Route::get('add-kurasu', [KurasuController::class, 'add'])->name('add-kurasu');
    Route::post('insert-kurasu', [KurasuController::class, 'insert'])->name('insert-kurasu');
    Route::get('edit-kurasu/{id}', [KurasuController::class, 'edit'])->name('edit-kurasu');
    Route::put('update-kurasu/{id}', [KurasuController::class, 'update'])->name('update-kurasu');
    Route::get('delete-kurasu/{id}', [KurasuController::class, 'destroy'])->name('delete-kurasu');
    //Student
    Route::get('/student', [StudentController::class, 'index'])->name('hocsinh');
    Route::get('delete-hocsinh/{id}', [StudentController::class, 'destroy'])->name('delete-hocsinh');
    //Subject
    Route::get('admin-subject', [SubjectController::class, 'index'])->name('subject');
    Route::get('add-subject', [SubjectController::class, 'add'])->name('add-subject');
    Route::post('insert-subject', [SubjectController::class, 'insert'])->name('insert-subject');
    Route::get('edit-subject/{id}', [SubjectController::class, 'edit'])->name('edit-subject');
    Route::put('update-subject/{id}', [SubjectController::class, 'update'])->name('update-subject');
    Route::get('delete-subject/{id}', [SubjectController::class, 'destroy'])->name('delete-subject');
    //Attendances
    Route::get('admin-attendance', [AttendanceController::class, 'index'])->name('attendance');
    Route::get('add-attendance', [AttendanceController::class, 'add'])->name('add-attendance');
    Route::post('add-attendance', [AttendanceController::class, 'form']);
    Route::post('insert-attendance', [AttendanceController::class, 'insert'])->name('insert-attendance');
    Route::get('edit-attendance/{id}', [AttendanceController::class, 'edit'])->name('edit-attendance');
    Route::put('update-attendance/{id}', [AttendanceController::class, 'update'])->name('update-attendance');
    //Type Of Grades
    Route::get('admin-type', [TypeOfGradesController::class, 'index'])->name('type');
    Route::get('add-type', [TypeOfGradesController::class, 'add'])->name('add-type');
    Route::post('insert-type', [TypeOfGradesController::class, 'insert'])->name('insert-type');
    Route::get('edit-type/{id}', [TypeOfGradesController::class, 'edit'])->name('edit-type');
    Route::put('update-type/{id}', [TypeOfGradesController::class, 'update'])->name('update-type');
    Route::get('delete-type/{id}', [TypeOfGradesController::class, 'destroy'])->name('delete-type');
    //Grades
    Route::get('admin-grades', [GradesController::class, 'index'])->name('grades');
    Route::get('add-grades', [GradesController::class, 'add'])->name('add-grades');
    Route::post('add-grades', [GradesController::class, 'form']);
    Route::post('insert-grades', [GradesController::class, 'insert'])->name('insert-grades');
    Route::get('edit-grades/{id}', [GradesController::class, 'edit'])->name('edit-grades');
    Route::put('update-grades/{id}', [GradesController::class, 'update'])->name('update-grades');
});
