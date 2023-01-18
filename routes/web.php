<?php

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
Route::middleware(['logged.user'])->group(function () {

});
    
Route::middleware(['unlogged.user'])->group(function () {
 
});

Route::middleware(['admin.check'])->group(function () {
 
});

// admin routes
Route::get('/create-job-field', function() {
    return view('admin.create-job-field');
});

Route::get('/welcome-admin', function() {
    return view('admin.welcome');
});

Route::get('/', function() {
    return view('pages.landing');
});

Route::get('/register', function() {
    return view('register');
});

Route::get('/login', function() {
    return view('login');
});

Route::get('/test', function() {
    return view('pages.test');
});