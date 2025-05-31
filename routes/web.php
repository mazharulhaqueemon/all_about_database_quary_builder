<?php

use App\Models\Student;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/',[StudentController::class, 'showStudents'])->name('students.show');

Route::get('/student/{id}', [StudentController::class, 'singleStudent'])->name('students.single');
Route::get('/add',[StudentController::class,'addStudent'])->name('studnets.add');
Route::get('/update', [StudentController::class, 'updateStudent'])->name('students.update');
Route::get('/delete/{id} ', [StudentController::class, 'deleteStudent'])->name('students.delete');

