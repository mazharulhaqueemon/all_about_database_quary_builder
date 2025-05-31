<?php

use App\Http\Controllers\Api\StudentControllerApi;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('students',[StudentControllerApi::class, 'showStudentAsApi']);
Route::get('students/{id}',[StudentControllerApi::class, 'singleStudentAsApi']);
