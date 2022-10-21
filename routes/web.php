<?php

use App\Http\Controllers\HomeController;
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


Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('leadregister',[HomeController::class,'leadregister'])->name('leadregister');
Route::get('bulk',[HomeController::class,'bulk'])->name('bulk');
Route::get('leadsource',[HomeController::class,'leadsource'])->name('leadsource');
Route::get('leadstatus',[HomeController::class,'leadstatus'])->name('leadstatus');
Route::get('leadbranch',[HomeController::class,'leadbranch'])->name('leadbranch');
Route::get('leadchecklist',[HomeController::class,'leadchecklist'])->name('leadchecklist');
Route::get('intake',[HomeController::class,'intake'])->name('intake');
Route::get('userrole',[HomeController::class,'userrole'])->name('userrole');
Route::get('userpermission',[HomeController::class,'userpermission'])->name('userpermission');
Route::get('user',[HomeController::class,'user'])->name('user');
Route::get('country',[HomeController::class,'country'])->name('country');
Route::get('state',[HomeController::class,'state'])->name('state');
Route::get('district',[HomeController::class,'district'])->name('district');
Route::get('city',[HomeController::class,'city'])->name('city');
Route::get('address',[HomeController::class,'address'])->name('address');
Route::get('adsopkeywords',[HomeController::class,'adsopkeywords'])->name('adsopkeywords');
Route::get('adsoptopics',[HomeController::class,'adsoptopics'])->name('adsoptopics');
Route::get('adsopquestions',[HomeController::class,'adsopquestions'])->name('adsopquestions');
Route::get('adsopattribute',[HomeController::class,'adsopattribute'])->name('adsopattribute');
Route::get('studentenroll',[HomeController::class,'studentenroll'])->name('studentenroll');
Route::get('sop',[HomeController::class,'sop'])->name('sop');
Route::get('questionaries',[HomeController::class,'questionaries'])->name('questionaries');
Route::get('studentlogin',[HomeController::class,'studentlogin'])->name('studentlogin');
Route::get('student',[HomeController::class,'student'])->name('student');



