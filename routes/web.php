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

Route::post('/login', [UserController::class, 'signIn']);
Route::post('/register', [UserController::class, 'register']);

Route::middleware(['logged.user'])->group(function () {
    Route::get('/', [UserController::class, 'landingView']);
    Route::get('/register', [UserController::class, 'registerView']);
    Route::get('/login', [UserController::class, 'loginView']);
    Route::get('/request-interview', [InterviewController::class, 'create']);
    Route::post('/store', [InterviewController::class, 'store']);
});
    
Route::middleware(['unlogged.user'])->group(function () {
    Route::get('/home', [InterviewController::class, 'home']);
    Route::get('/logout', [UserController::class , 'logout']);
});

Route::middleware(['admin.check'])->group(function () {
    // admin routes
    Route::get('/welcome-admin', [UserController::class, 'adminView']);
    Route::get('/create-job-field', [UserController::class, 'createJobView']);
    Route::post('/create-job-field', [FieldController::class, 'store']);
});

Route::get('/', function() {
    return view('home.landing');
});

Route::get('/login', function() {
    return view('home.login');
});

Route::get('/profile', function() {
    return view('user.profile');
});

Route::get('/profile/edit', function() {
    return view('user.edit-profile');
});

Route::get('/cancel-interview', function() {
    return view('user.cancel-interview');
});

Route::get('/test', function() {
    return view('test');
});

//user
Route::delete('/delete/{id}', [InterviewController::class, 'delete']);

//both
// Route::get('/profile', [UserController::class, 'user']);
