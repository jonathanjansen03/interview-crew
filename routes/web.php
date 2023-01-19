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

// admin routes
Route::get('/welcome-admin', [InterviewController::class, 'admin']);
Route::get('/create-job-field', [FieldController::class, 'index']);
Route::post('/create-job-field', [FieldController::class, 'store']);


Route::get('/', function() {
    return view('home.landing');
});

Route::get('/register', function() {
    return view('home.register');
});

Route::get('/login', function() {
    return view('home.login');
});

Route::get('/home',[InterviewController::class, 'home']);

Route::get('/profile', function() {
    return view('user.profile');
});

Route::get('/profile/edit', function() {
    return view('user.edit-profile');
});

Route::get('/request-interview', [InterviewController::class, 'create']);
Route::post('/store', [InterviewController::class, 'store']);

Route::get('/cancel-interview', function() {
    return view('user.cancel-interview');
});

Route::get('/test', function() {
    return view('test');
});


//both
// Route::get('/profile', [UserController::class, 'user']);
