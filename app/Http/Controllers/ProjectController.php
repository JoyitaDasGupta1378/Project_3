<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;
use Session;
use DB;

class ProjectController extends Controller
{
    public function project(){
        return view('project');
    }
    public function store_project(Request $r){    
        
        foreach($r->student_id as $student_id){
            $obj= new Project();
            $obj->title=$r->title;
            $obj->description=$r->description;
            $obj->student_id= $student_id;
            $obj->status=0;
            $obj->save();
        }
        return redirect()->to('/project')->with('msg','Successfull!');
    }

    public function changeStatus(){
        $id=request()->input('ptd');
        $status=request()->input('value');
        Project::where('id',$id )->update(['status'=> $status]);
        return redirect()->back();
    }

    public function getUserInfo(){   
        $data = DB::table('users')
                    ->where('users.role', '=', 'student')
                    ->where('users.status', '=', 0)
                    ->select('users.id', 'users.name')
                    ->distinct()
                    ->get();   
        return response()->json([
            'data' => $data
        ]);
    }


    

}
