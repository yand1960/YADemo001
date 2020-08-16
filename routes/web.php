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

//Dinar Khalfin/////////
Route::get('/dk/hello', function () {
    return "HEllO, I AM DINAR!";
});

Route::get('/dk/', 'DKController@DKindex');
Route::get('/dk/DKcategories', 'DKController@DKcategories');
Route::get('/dk/{DKcategory}', 'DKController@DKcategory');
Route::get('/dk/DKappointment/{event?}', 'DKController@DKappointment');
Route::get('/dk/DKappointment/phpexam', 'DKController@DKphpexam');

//Route::get('/dk/appointments/{event}', 'DKController@appointment');

Route::get("/dk/event","DKController@getEvent");

//Dinar Khalfin/////////

/////////////// DEREVOXP ///////////////

Route::get('/derevoxp', "DVController@getEvent"); // список событий, доступных для заказа
Route::get('/derevoxp/test', "DVController@showTest"); // для теста
Route::get('/derevoxp/register', "DVController@register"); // форма регистрации
Route::get('/derevoxp/logout', "DVController@logout"); // выйти из аккаунта
Route::post('/derevoxp/register/send/', "DVController@registerSend"); // регистрируем юзера, даём ему токен
Route::get('/derevoxp/sortByDate', "DVController@sortEventByData"); // сортировка по дате
Route::get('/derevoxp/sortByName', "DVController@sortEventByName"); // сортировка по имени
Route::get('derevoxp/admin', "DVController@setEvent"); // старт админки
Route::post('/derevoxp/admin/set/', "DVController@setEvent"); // для добавления новых событий методом POST (админ)
Route::get('/derevoxp/admin/delete/{id}', "DVController@deleteEvent"); // для удаления событий
Route::get('/derevoxp/bind', "DVController@bindEvent"); // для заказа

/////////////// END FOR DEREVOXP ///////////////

Route::get('/ah/hello', "AHController@testSummary");

Route::get("/ya/hi","YAController@index");

Route::get("/vs/test","VSController@bladeTest");

Route::get("/vs/testEvent","VSController@testEvent");

Route::get("/vs/examList","VSController@examList");

Route::get("/vs/examList/physicsExam","VSController@physicsExam");
Route::get("/vs/examList/chemistryExam","VSController@chemistryExam");
Route::get("/vs/examList/mechanicsExam","VSController@mechanicsExam");
