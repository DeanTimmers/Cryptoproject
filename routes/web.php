<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CryptoController;
use App\Http\Controllers\UserAuth;

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
    return view('home');
});
// routes home, ... die we nodig hebben

Route::get('/home', function () {
    return view('home');
}); 

Route::get('/trending', function () {
    return view('trending');
}); 

Route::get('/currency', function () {
    return view('currency');
}); 

Route::get('/favorites', function () {
    return view('favorites');
}); 

Route::get('/login', function () {
    return view('login');
}); 

Route::get('/clients/{id}', 'ClientsController@show');

//Route::get('/home', 'Crypto@show');

Route::get('/trending', 'Trending@show');

Route::post('/currency',  [CryptoController::class,'store']);

//login 
Route::post("user",[UserAuth::class,'userLogin']);
Route::view("login",'login');
Route::view("home",'home');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});