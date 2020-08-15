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

Route::get('/nz/test/{word}', 'NZController@test');
Route::get('/nz/events', 'NZController@events');
Route::get('/nz/events/desc', 'NZController@eventsDesc');
Route::get('/nz/events/asc', 'NZController@eventsAsc');

Route::get("/ya/hello", function(){
    return "Hello, I am YA!";
});
Route::get("/vs/hello", function (){
    return 'Hello, Vladimir';
});
Route::get('/dk/hello', function () {
    return "HEllO, I AM DINAR!";
});

Route::get('/derevoxp', "DVController@getEvent"); // список событий, доступных для заказа
Route::get('/derevoxp/sortByDate', "DVController@sortEventByData"); // сортировка по дате
Route::get('/derevoxp/sortByName', "DVController@sortEventByName"); // сортировка по имени
Route::post('/derevoxp/admin', "DVController@setEvent"); // для добавления новых событий (админ)

Route::get("ah/hello", function (){
    return "Hello, I am AH!";
});

Route::get("/ya/hi","YAController@index");

Route::get("/dk/event","DKController@getEvent");

Route::get("/vs/test","VSController@bladeTest");

Route::get("/vs/testEvent","VSController@testEvent");

Route::get("/vs/testSummary","VSController@testSummary");

