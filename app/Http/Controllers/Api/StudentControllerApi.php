<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentControllerApi extends Controller
{
      public function showStudentAsApi()
    {
        // $students = DB::table('students')->where('age', '>', 29)->get();
        $students = DB::table('students')
                       ->select('name','age')
                       ->get();  // show only  name and age
        return response()->json($students);
    }

    public function singleStudentAsApi(string $id)
    {
        $student = DB::table('students')->where('id', $id)->get();

        return response()->json($student);
    }
}
