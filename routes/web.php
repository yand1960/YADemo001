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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nz/hello', function () {
    return "Hello, I am NZ!";
});

Route::get("/ya/hello", function(){
    return "Hello, I am YA!";
});

Route::get("/vs/hello", function (){
    return 'Hello, Vladimir';
});
Route::get('/dk/hello', function () {
    return "HEllO, I AM DINAR!";
});

Route::get('/derevoxp', function () {
    echo("Hello, DerevoXP!");
});

Route::get("ah/hello", function (){
    return "Hello, I am AH!";
});
