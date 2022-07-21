<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeamMember;
use DB;
class TeamMemberController extends Controller
{
    public function team_member(){
        return view('team_member');
    }
    public function store_team_member(Request $r){        
        $obj= new TeamMember();
        $obj->team_id=$r->team_id;
        $obj->user_id=$r->user_id;
        $obj->save();
        return redirect()->to('/team_member')->with('msg','Successfully Inserted');

    }
}
