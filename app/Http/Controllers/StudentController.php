<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showStudents()
    {
        $students = DB::table('students')->get();
        //  $students = DB::table('students')->where('age','>','29')->get(); // show students whose age is greater than 29


        return view('allusers', ['data' => $students]);
    }

    public function singleStudent( string $id)
    {
        $students = DB::table('students')->where('id', $id)->get();  // 'id' is the primary key of the students table and $id is a view variable passed from the route
        return $students;
        // return view('singleuser', ['data' => $students]);


    }





    // FOR API

    public function showStudentAsApi()
    {
        $students = DB::table('students')->where('age', '>', 29)->get();
        return response()->json($students);
    }
}
