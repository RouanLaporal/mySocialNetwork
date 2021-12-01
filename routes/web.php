<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Client\Request;
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
    return view('welcome');
});

Route::get('signup', function(){
    return view('signup');
});

Route::get('login', function(){
    return view('login');
})->name('login');

Route::get('profil', function(){
    return view('profil');
})->middleware('auth');

Route::get('logout', [UserController::class,'logout']);
Route::get('update', function(){
    return view('update');
})->middleware('auth');
Route::post('updateUser', [UserController::class, 'updateUser']);
Route::post('addNewUser', [UserController::class, 'addNewUser']);
Route::post('authenticate',  [UserController::class, 'authenticate']);