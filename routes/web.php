<?php

use App\Http\Controllers\TransferenciasController;
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


Route::get('/', function () {
    return view('Auth/login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/transferencias', function () {
    return view('transferencias');
});

Route::get('/search', 'App\Http\Controllers\UserController@search');

//Route::resource('user', 'UserControllers');

Auth::routes();
