<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\{
    RegisterController,
    UserController

};

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/search', 'App\Http\Controllers\UserController@search');


// Route::get('/index', function(Request $request){
//     return $request->user();
// });


// Route::get('index', function($user){
//     return $user->all();
// });

// Route::get('users', function($user){
//     return $user;
// });

// Route::post('create', function ($name, $email, $cpf, $senha){
//     return $na
// });

// Route::apiResource('users', 'api/RegisterController');

// Route::apiResource('users', 'RegisterController@index');

// Route::post('users', function (array $data){
//     return $data;
//  });


// Route::namespace('API')->name('api.')->group(function(){
//  Route::get('/users', 'App\Http\Controllers\RegisterController@index')->name('users'); // <- Usa-se name para dar apelido a rota
// });