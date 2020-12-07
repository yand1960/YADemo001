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
Route::get('/nz/appointments/{id}', 'NZController@appointments');
Route::get('/nz/appointments/edit/{id}', 'NZController@EditAppointments');
Route::get('/nz/appointments/add/{id}/{name}', 'NZController@AddAppointments');



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


Route::get('/dk/events', [
    'uses' => 'DKEventController@index',
    'as' => 'events.index'
]);

Route::get('/dk/', [
    'uses' => 'DKDashboardController@index',
    'as' => 'dashboard.index'
]);

Route::get('/dk/events/create', [
    'uses' => 'DKEventController@create',
    'as' => 'events.create'
]);

Route::post('/dk/events', [
    'uses' => 'DKEventController@store',
    'as' => 'events.store'
]);

Route::get('/dk/events/{event}/edit', [
    'uses' => 'DKEventController@edit',
    'as' => 'events.edit'
]);


Route::post('/dk/events/{event}', [
    'uses' => 'DKEventController@update',
    'as' => 'events.update'
]);

Route::delete('/dk/events/{event}', [
    'uses' => 'DKEventController@destroy',
    'as' => 'events.delete'
]);

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
Route::get('/derevoxp/bind/{id}/{client}', "DVController@bindEvent"); // для заказа
Route::get('/derevoxp/unbind/{id}/{client}', "DVController@unbindEvent"); // для заказа

/////////////// END FOR DEREVOXP ///////////////

Route::get('/ah/events', "AHController@events");
Route::get('/ah/appointments', "AHController@appointments");
Route::get("/ah/examList/chosenExam/{id}","AHController@chosenExam");
Route::get("/ah/examList","AHController@examList");
Route::get("/ah/examList/makeAppointment","AHController@makeAppointment");

Route::get("/ya/hi","YAController@index");

Route::get("/vs/test","VSController@bladeTest");

Route::get("/vs/testEvent","VSController@testEvent");

Route::get("/vs/examList","VSController@examList");

Route::get("/vs/examList/chosenExam/{id}","VSController@chosenExam");

Route::get("/vs/examList/makeAppointment","VSController@makeAppointment");


//////////////// MAKSIM AISIN ////////////////////////

Route::get('/ma/hello', function(){
    return "Hello, this is Maksim";
});