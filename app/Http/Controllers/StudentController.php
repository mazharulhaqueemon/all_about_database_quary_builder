<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showStudents()
    {
        // $students = DB::table('students')->get(); // get all students from the students table
        //  $students = DB::table('students')->where('age','>','29')->get(); // show students whose age is greater than 29

        $students = DB::table('students')
                        ->where([
                            ['age', '>',18], // multiple conditions can be passed as an array
                            ['name', 'like', 'c%'] // show students whose age is greater than 18 and name contains 'c'

                        ])->get();

        return view('allusers', ['data' => $students]);
    }

    public function singleStudent( string $id)
    {
        $students = DB::table('students')->where('id', $id)->get();  // 'id' is the primary key of the students table and $id is a view variable passed from the route
        // return view('singleuser', ['data' => $students]);

      return view('singleuser', ['data' => $students]);
    }





    // FOR API

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
