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

Route::get('/', function() {
    return view('pages.landing');
});

Route::get('/test', function() {
    return view('pages.test');
});