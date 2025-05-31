<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showStudents()
    {
        $students = DB::table('students')->get(); // get all students from the students table
        //  $students = DB::table('students')->where('age','>','29')->get(); // show students whose age is greater than 29

        // $students = DB::table('students')
                        // ->where([
                        //     ['age', '>',18], // multiple conditions can be passed as an array
                        //     ['name', 'like', 'c%'] // show students whose age is greater than 18 and name contains 'c'

                        // ])->get();

        return view('allusers', ['data' => $students]);
    }

    public function singleStudent( string $id)
    {
        $students = DB::table('students')->where('id', $id)->get();  // 'id' is the primary key of the students table and $id is a view variable passed from the route
        // return view('singleuser', ['data' => $students]);

      return view('singleuser', ['data' => $students]);
    }

    public function addStudent()
    {
        $user = DB::table('students')
        ->insertOrIgnore([   // insertOrIgnore will not insert the data if the email already exists
            'name' => 'Reza Bakthiar',
            'email' =>'raju@gmil.com',
            'age' => 30,
            'city' => 'Dhaka',
            'created_at' => now(),
            'updated_at' => now()
        ]);

       if($user){
              return '<h1>Student Added Successfully</h1>';
       }
       else{
              return '<h1>email already exist</h1>';
       }


    }

    public function updateStudent()
    {
        $student = DB::table('students')
        ->where( 'id',1)
        ->update([
            'name' => 'Sakib Al Hasan',
            'email' => 'sh75@gmail.com',

        ]);
        return '<h1>Student Updated Successfully</h1>';
    }

    public function deleteStudent(string $id)
    {
        $student = DB::table('students')
        ->where('id', $id)
        ->delete();

        if($student){
            return redirect()->route('students.show');
        }
    }









}
