<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamName;
use App\Models\TeamMember;
use DB;

class TeamNameController extends Controller
{
    
    public function team(){
        return view('team');
    }
    public function store_team(Request $r){        
        $obj= new TeamName();
        $obj->team_name=$r->team_name;
        $obj->user_id=session()->get('userId');
        $obj->save();
        $id=TeamName::where('team_name',$r->team_name)->where('user_id',session()->get('userId'))->select('id')->first();
        
        $teamMember = new TeamMember();
        $teamMember->team_id = $id->id;
        $teamMember->user_id=session()->get('userId');
        $teamMember->save();
        
        return redirect()->to('/team')->with('msg','Successfully Inserted Team Name. Your team ID is ' . $id->id); 
       
    }
}
