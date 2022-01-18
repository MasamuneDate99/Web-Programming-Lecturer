<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/home', ['App\Http\Controllers\ImageController','home']);

Route::get('/', function () {
    return view('loginPage');
});
Route::get('/loginPage', function () {
    return view('loginPage');
});

Route::post('/loginUser', [UserController::class, 'loginUser']);

Route::get('/loginPage', function () {
    return view('login');
});
Route::get('/registerPage', function () {
    return view('register');
});