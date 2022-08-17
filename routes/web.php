<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ComplaintsController;
use Illuminate\Support\Facades\Auth;

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

Route::prefix('admin')->middleware('auth','isAdmin')->group(function(){
    // admin routes
    Route::get('index',[AdminController::class,'index']);//takes you to the admin index page
    Route::get('complaints/{complaint}/action',[AdminController::class,'action']);//acting on a complaint
    Route::put('/{complaint}',[AdminController::class,'status']);//complaint status update
    // Route::put('{complaint}/reject',[AdminController::class,'reject']);//reject a complaint
});


Route::prefix('complaints')->middleware('auth')->group(function(){
//complaint/user's routes
Route::get('',[ComplaintsController::class,'index']);//takes you to index page
Route::get('/{complaint}/edit',[ComplaintsController::class,'edit']);//takes you to edit view
Route::get('/create',[ComplaintsController::class,'create']);//creating a new complaint
Route::put('/{complaint}',[ComplaintsController::class,'update']);//updating a complaint
Route::post('',[ComplaintsController::class,'store']);//takes you to the user index page
Route::delete('/{complaint}',[ComplaintsController::class,'destroy']);//deletes a complaint
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

