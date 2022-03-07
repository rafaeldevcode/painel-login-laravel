<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::controller(RegisterController::class)
->prefix('register')
->group(function(){

    Route::get('/', 'index');
    Route::post('/', 'create');

});

Route::controller(LoginController::class)
->prefix('login')
->group(function(){

    Route::get('/', 'index');
    Route::post('/', 'create');

});
