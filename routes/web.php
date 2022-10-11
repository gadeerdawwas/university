<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SupervisorController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'supervisor','as'=>'supervisor.','middleware' => ['auth','supervisor']], function () {
    Route::get('',[SupervisorController::class ,'index'])->name('index');
    Route::resource('projects',ProjectController::class );
    Route::get('order',[SupervisorController::class ,'order'])->name('order');
    Route::get('group',[SupervisorController::class ,'group'])->name('group');
    Route::post('accepteorder/{id}',[SupervisorController::class ,'accepteorder'])->name('accepteorder');

});

Route::group(['prefix'=>'student','as'=>'student.','middleware' => ['auth','student']], function () {
    Route::get('',[StudentController::class ,'index'])->name('index');
    Route::post('info',[StudentController::class ,'info'])->name('info');
    Route::get('project',[StudentController::class ,'project'])->name('project');
    Route::post('applyproject/{id}',[StudentController::class ,'applyproject'])->name('applyproject');
});
