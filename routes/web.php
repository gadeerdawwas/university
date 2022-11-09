<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\GPcommitteeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/',[SiteController::class,'index'])->name('site');
Route::get('supervisors',[SiteController::class,'supervisor'])->name('supervisorsPage');
Route::get('supervisorDetail/{id}',[SiteController::class,'supervisorDetail'])->name('supervisorDetail');
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'supervisor','as'=>'supervisor.','middleware' => ['auth','supervisor']], function () {
    Route::get('/',[SupervisorController::class ,'index'])->name('index');
    Route::get('profile',[SupervisorController::class ,'profile'])->name('profile');
    Route::post('info',[SupervisorController::class ,'info'])->name('info');
    Route::resource('projects',ProjectController::class );
    Route::get('order',[SupervisorController::class ,'order'])->name('order');
    Route::get('group',[SupervisorController::class ,'group'])->name('group');
    Route::post('accepteorder/{id}',[SupervisorController::class ,'accepteorder'])->name('accepteorder');
    Route::get('groupinfo/{id}',[SupervisorController::class ,'groupinfo'])->name('groupinfo');
    Route::resource('tasks',TaskController::class );
    Route::get('alltask',[TaskController::class ,'alltask'])->name('alltask');
    Route::get('detailtask/{id}',[TaskController::class ,'detailtask'])->name('detailtask');
    Route::post('resulttask/{id}',[TaskController::class ,'resulttask'])->name('resulttask');
    Route::get('allannouncements',[SupervisorController::class ,'allannouncements'])->name('allannouncements');

});


Route::group(['prefix'=>'student','as'=>'student.','middleware' => ['auth','student']], function () {
    Route::get('',[StudentController::class ,'index'])->name('index');
    Route::get('groups',[StudentController::class ,'groups'])->name('groups');
    Route::get('group',[StudentController::class ,'group'])->name('group');
    Route::post('savegroup',[StudentController::class ,'savegroup'])->name('savegroup');
    Route::post('groupupdate/{id}',[StudentController::class ,'groupupdate'])->name('groupupdate');
    Route::post('info',[StudentController::class ,'info'])->name('info');
    Route::get('project',[StudentController::class ,'project'])->name('project');
    Route::post('applyproject/{id}',[StudentController::class ,'applyproject'])->name('applyproject');
    Route::get('usertask',[StudentController::class ,'usertask'])->name('usertask');
    Route::get('task/{id}',[StudentController::class ,'task'])->name('task');
    Route::post('submittask/{id}',[StudentController::class ,'submittask'])->name('submittask');
    Route::get('project_tag/{tag}',[StudentController::class ,'project_tag'])->name('project_tag');
    Route::get('allannouncements',[StudentController::class ,'allannouncements'])->name('allannouncements');
    Route::post('searchsuper',[StudentController::class ,'searchsuper'])->name('searchsuper');

});

Route::group(['prefix'=>'GPcommittee','as'=>'GPcommittee.','middleware' => ['auth','GP']], function () {
    Route::get('',[GPcommitteeController::class ,'index'])->name('index');
    Route::get('projects',[GPcommitteeController::class ,'projects'])->name('projects');
    Route::get('group',[GPcommitteeController::class ,'group'])->name('group');
    Route::get('alltask',[GPcommitteeController::class ,'alltask'])->name('alltask');
    Route::get('groupinfo/{id}',[SupervisorController::class ,'groupinfo'])->name('groupinfo');
    Route::get('alluser',[GPcommitteeController::class ,'alluser'])->name('alluser');
    Route::get('allsupervisor',[GPcommitteeController::class ,'allsupervisor'])->name('allsupervisor');
    Route::post('searchuser',[GPcommitteeController::class ,'searchuser'])->name('searchuser');
    Route::post('searchsupervisor',[GPcommitteeController::class ,'searchsupervisor'])->name('searchsupervisor');
    Route::post('searchproject',[GPcommitteeController::class ,'searchproject'])->name('searchproject');


   Route::resource('announcements',AnnouncementController::class);
});




