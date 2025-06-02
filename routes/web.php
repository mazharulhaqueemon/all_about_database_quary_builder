<?php

use App\Models\Student;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::controller(StudentController::class)->group(function () {
   Route::get('/','showStudents')->name('students.show');

Route::get('/student/{id}','singleStudent')->name('students.single');
Route::post('/add','addStudent')->name('studnets.add');
Route::put('/update/{id}', 'updateStudent')->name('students.update');
Route::get('/update/{id}','updatePage')->name('students.update.page');
Route::get('/delete/{id} ','deleteStudent')->name('students.delete');
Route::view('newstudent', '/addstudent')->name('students.newstudent');
});



