<?php

use App\Models\Student;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/',[StudentController::class, 'showStudents'])->name('students.show');

Route::get('/student/{id}', [StudentController::class, 'singleStudent'])->name('students.single');
