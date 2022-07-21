<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use DB;
class StudentController extends Controller
{
    public function all(){
        $students = Student::all(); //here $employees is a variable name
        return view('teacher.allStu',compact('students'));

    }
    public function reg(){
        return view('reg');
    }
    public function store(Request $r){        
        $obj= new Student();
        $obj->name=$r->name;
        $obj->email=$r->email;
        $obj->password=$r->password;
        $obj->gender=$r->gender;
        $obj->dob=$r->dob;
        $obj->role=$r->role;
        $obj->save();
    }
    public function delete($id){
        DB::table('students')->where('id','=',$id)->delete();
        return redirect()->back()->with('msg','deleted Successfully');
      }


      
}
