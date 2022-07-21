<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Project;
use Session;
use DB;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }
    public function student(){
        return view('student');
    }
    public function view(){
        $data1 = DB::table('projects')
                    ->where('projects.student_id', '=', session('userId'))
                    ->select('projects.title')
                    ->first();

        $data2 = DB::table('projects')
                    ->where('projects.title', '=', $data1->title)
                    ->select('projects.description', 'projects.student_id', 'projects.status' )
                    ->get(); 
        $data = [];
        $i = 0;
        $data['title'] = $data1->title;
        $data['description'] = $data2[0]->description;
        $data['status'] = $data2[0]->status;
        foreach($data2 as $std_id){
            $data['student_id'][$i++] = $std_id->student_id;
        }
        $data['iteration'] = $i;
        // dd($data);
        return view('view', compact('data'));
    }


    public function loginstore(Request $r)
    {        
        $email=$r->email;
        $password=$r->password;
        
        $user= User::where('email','=',$email)
            ->where('password','=',$password)
            ->first();
            if(!$user)
            {
                return redirect()->back()->with('err_msg','email or password');
            }
            else 
            {
                $r->session()->put('userId', $user->id);
                $r->session()->put('username', $user->name);
                $r->session()->put('useremail', $user->email);
                $r->session()->put('userrole', $user->role);
                if($user->role=='teacher'){
                    return redirect()->to('teacher');
                }
                else{
                return redirect()->to('student');
                }

            }
    }
    public function logout(){
        Session::forget('username','userrole');
        return redirect()->to('/');
    }

    public function teacher(){
        return view('teacher_panel.teacher');
    }
    public function p_view(){
        $projects = Project::all(); //here $employees is a variable name
        return view('teacher_panel.ProjectView',compact('projects'));

    }

    
    public function reg(){
        return view('reg');
    }
    public function store(Request $r){        
        $obj= new User();
        $obj->name=$r->name;
        $obj->email=$r->email;
        $obj->password=$r->password;
        $obj->role=$r->role;
        $obj->save();
        return redirect()->to('/reg')->with('msg','Successfull!');
    }

    
}
