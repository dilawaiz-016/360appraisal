<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\profile;
use App\Http\Controllers\personlistController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\selfevalutionController;
use App\Http\Controllers\testController;
use App\Http\Controllers\managmentController;
use App\Http\Controllers\feedbackController;
use App\Http\Controllers\admin\showuserController;

use App\Http\Controllers\admin\showfeedbackController;
use App\Http\Controllers\admin\creportController;
use App\Http\Controllers\admin\generateController;   


use App\Http\Controllers\HR\reportController;
use App\Http\Controllers\HR\evaluateController;
use App\Http\Controllers\UserController;
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
    return view('home');
})->name('home');


Route::get('/self-eval', function () {
    return view('eval.selfevaluate');
})->name('selfeval')->middleware('auth');

Route::get('/other-eval', function () {
    return view('eval.otherevaluation');
})->name('othereval')->middleware('auth');

Route::get('/seniormanagment/{id}', [managmentController::class ,'index'])->name('seniormanagment')->middleware('auth');
Route::post('/seniormanagment', [managmentController::class ,'rate'])->name('seniormanagment')->middleware('auth');

Route::get('/juniormanagment/{id}', [managmentController::class ,'junior'])->name('juniormanagment')->middleware('auth');
Route::post('/juniormanagment', [managmentController::class ,'rate'])->name('juniormanagment')->middleware('auth');

Route::get('/juniormanagment', function () {
    return view('eval.juniormanagment');
})->name('juniormanagment')->middleware('auth');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');




Route::get('/prof/{id}', [profile::class ,'index'])->middleware('auth');
Route::post('/profupdate/{id}' ,[profile::class , 'store'])->middleware('auth');

Route::get('/list/{catagory}' , [personlistController::class , 'index']);

Route::post('/selfevalstore' ,[selfevalutionController::class ,'store']);

Route::post('/feedback' ,[feedbackController::class ,'store'])->middleware('auth' );

require __DIR__.'/auth.php';


///////////admin////////////////////////////////////////////////

Route::get('/admin' , [adminController::class , 'index'])->middleware(['can:isAdmin' ,'auth'])->name('admin');

Route::get('/users' , [showuserController::class , 'index'])->middleware(['can:isAdmin' ,'auth']);
Route::post('/test' ,[testController::class , 'Test']);

Route::get('/showfeed' , [showfeedbackController::class , 'index'])->middleware(['can:isAdmin' ,'auth']);



Route::get('/collect' , [creportController::class , 'index'])->middleware(['can:isAdmin' ,'auth']);

Route::get('/generate' , [generateController::class , 'index'])->middleware(['can:isAdmin' ,'auth']);

Route::get('feedback/delete/{id}', [showfeedbackController::class ,'delete'])->middleware(['can:isAdmin' ,'auth']);


Route::get('edituser/{id}' ,[showUserController::class ,'Useredit']);

Route::post('edituser/' ,[showUserController::class ,'Userupdate']);

Route::get('deluser/{id}' ,[showUserController::class ,'deleteUser']);
Route::get('/addhr' , [adminController::class , 'addhr'])->middleware(['can:isAdmin' ,'auth']);
Route::post('/addhr' , [adminController::class , 'storehr'])->middleware(['can:isAdmin' ,'auth']);
Route::get('/useractivity' , [adminController::class , 'userActivity'])->middleware(['can:isAdmin' ,'auth']);
Route::get('/feed' ,function(){
    return view('feedback');
})->middleware('auth');

//////////////////HR////////////////////////////////

Route::get('/hr', [reportController::class ,'index'])->middleware(['can:isHr' ,'auth'])->name('hrportal');

Route::post('/hr/{id}', [reportController::class ,'storee']);

Route::get('/hr/report', [reportController::class ,'reportStatus']);

Route::get('/hr/reportDecision', [reportController::class ,'evaluateReport']);

Route::get('/hr/evaluate/{id}' ,[evaluateController::class ,'evaluate']);

Route::get('/hr/evaluateUser' ,[reportController::class ,'evalutedUser']);

Route::post('/createuser' ,[UserController::class , 'create']);