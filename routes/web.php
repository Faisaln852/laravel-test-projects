<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('user', UserController::class);
Route::get('success',[UserController::class,'success'])->name('user.success');
Route::resource('teacher',TeacherController::class);

Route::get('createAssignStudents',[TeacherController::class,'createAssignStudents'])->name('create.assign.students');
Route::post('assign-students',[TeacherController::class,'assignStudents'])->name('assign.students');
Route::get('select-teacher',[TeacherController::class,'selectTeacher'])->name('select.teacher');
Route::post('view-assigned-students',[TeacherController::class,'viewAssignedStudents'])->name('view.assigned.students');

Route::resource('student',StudentController::class);
Route::get('select-students',[StudentController::class,'selectStudents'])->name('select.students');
Route::post('view-student-teachers',[StudentController::class,'viewStudentTeachers'])->name('view.student.teachers');
Route::get('testing', [TeacherController::class, 'show']);
