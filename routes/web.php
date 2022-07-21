<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\TeamNameController;
use App\Http\Controllers\TeamMemberController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\AuthController;



Route::get('/ProjectView',[AuthController::class,'p_view']);


//middleware
Route::group(['middleware' => 'checkloggedin'],function(){
   Route::group(['middleware' => 'checkIfStudent'],function(){
   Route::get('/student',[AuthController::class,'student']);
   });
   Route::group(['middleware' => 'checkIfTeacher'],function(){
    Route::get('/teacher',[AuthController::class,'teacher']);
    });
    Route::get('logout',[AuthController::class, 'logout']);
});

//
Route::get('/view',[AuthController::class,'view']);
Route::get('/ProjectView',[AuthController::class,'p_view']);

Route::get('/',[AuthController::class,'login']);
Route::post('loginstore',[AuthController::class,'loginstore']);
Route::get('/reg',[AuthController::class,'reg']);
Route::post('store_user',[AuthController::class,'store']);
Route::get('/allStu',[StudentController::class,'all']);
Route::get('/delete-student/{id}', [StudentController::class, 'delete']);
Route::get('/change-status/', [ProjectController::class,'changeStatus'])->name('pstatus');


//not necessary
Route::get('idea', [IdeaController::class, 'idea']);
Route::post('store_idea',[IdeaController::class, 's_idea']);
//end

//team name,team member,project
Route::get('team', [TeamNameController::class, 'team']);
Route::post('store_team',[TeamNameController::class, 'store_team']);

Route::get('team_member', [TeamMemberController::class, 'team_member']);
Route::post('store_team_member',[TeamMemberController::class, 'store_team_member']);

Route::get('project', [ProjectController::class, 'project']);
Route::post('store_project',[ProjectController::class, 'store_project']);

//api
Route::get('/getUserInfo', [ProjectController::class, 'getUserInfo']);