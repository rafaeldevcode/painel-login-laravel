<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/dashboard', function(){
    $title = 'Formoney - Planilhas | Dashboard';
    $user = Auth::user();

    return view('dashboard', compact('title', 'user'));
})->middleware('auth');

Route::controller(RegisterController::class)
->prefix('register')
->group(function(){

    Route::get('/', 'create');
    Route::post('/', 'store');

});

Route::controller(LoginController::class)
->group(function(){

    Route::get('/login', 'create')->name('login');
    Route::post('/login', 'store');
    Route::post('/logout', 'logout');

});