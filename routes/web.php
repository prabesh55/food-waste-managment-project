<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\controllers\AgentController;




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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect',[HomeController::class,'redirect']);
route::get('/',[HomeController::class,'index']);
route::get('/home',[HomeController::class,'home'])->middleware('auth','verified');

route::get('/Aboutus',[HomeController::class,'Aboutus']);
route::get('/MyLocations',[HomeController::class,'MyLocations']);
route::get('/MyDonation',[HomeController::class,'MyDonation']);

route::get('/MyDonation',[AdminController::class,'MyDonation']);
route::get('/Donation',[UserController::class,'Donation']);
route::post('/submitDonation',[UserController::class,'submitDonation']);
route::post('/submitContact',[UserController::class,'submitContact']);
route::get('/MyLocation',[AdminController::class,'MyLocation']);
route::get('/Contact',[UserController::class,'Contact']);

route::get('/search',[AdminController::class,'search']);


Route::get('/DOedit/{id}',[AdminController::class,'DOedit']);

Route::post('/roleupdate/{id}',[AdminController::class,'roleupdate']);
route::PUT('/showemail/{id}',[AdminController::class,'showemail']);

Route::get('/contactedit/{id}',[AdminController::class,'contactedit']);

Route::post('/contactupdate/{id}',[AdminController::class,'contactupdate']);


route::get('/ManageAgent',[AdminController::class,'ManageAgent']);


Route::get('/editAgent/{id}',[AdminController::class,'editAgent']);

Route::post('/contactupdate/{id}',[AdminController::class,'contactupdate']);



route::get('/AddAgent',[AdminController::class,'AddAgent']);



Route::post('uploadagent',[AdminController::class,'uploadagent']);





Route::get('/editAgent/{id}',[AdminController::class,'editAgent']);

Route::post('/agentupdate/{id}',[AdminController::class,'agentupdate']);


route::get('/mail',[Admincontroller::class,'mail']);

Route::post('uploademail',[AdminController::class,'uploademail']);

Route::get('/Dodelete/{id}',[AdminController::class,'Dodelete']);

route::get('/Showemail',[AdminController::class,'Showemail']);

route::get('/ViewDetails',[AgentController::class,'ViewDetails']);

Route::get('/Contactdelete/{id}',[AdminController::class,'Contactdelete']);
Route::get('/Agentdelete/{id}',[AdminController::class,'Agentdelete']);





