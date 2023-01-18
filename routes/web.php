<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InterviewController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FieldController;

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
Route::middleware(['logged.user'])->group(function () {

});
    
Route::middleware(['unlogged.user'])->group(function () {
    
});

Route::middleware(['admin.check'])->group(function () {

});
//user
Route::get('/home', [InterviewController::class, 'home']);
Route::get('/create', [InterviewController::class, 'create']);
Route::post('/store', [InterviewController::class, 'store']);
Route::delete('/delete/{id}', [InterviewController::class, 'delete']);

//admin
Route::get('/admin', [InterviewController::class, 'admin']);
Route::get('/field', [FieldController::class, 'index']);
Route::post('/field', [FieldController::class, 'store']);

//both
Route::get('/profile', [UserController::class, 'user']);