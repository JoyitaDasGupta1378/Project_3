<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idea;
use DB;
class IdeaController extends Controller
{
    public function idea()
      {
          return view('idea');
      }
    
      public function s_idea(Request $r){   
          $obj= new Idea();     
          $obj->name=$r->name;
          $obj->stu_id=$r->stu_id;
          $obj->batch = $r->batch;
          $obj->semester = $r->semester; 
          $obj->p_title = $r->p_title;
          $obj->p_idea = $r->p_idea;
          $obj->save();
          if($obj->save()){
            echo 'success';
            }
    }


}
