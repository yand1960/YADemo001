<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DVController
{

    private $userToken;

    public function __construct(\DVregister $userToken)
    {
        $this->userToken = $userToken;
    }

    public function getEvent() // список всех событий (/derevoxp)
    {
        $events = \App\DVEvent::select('id', 'date', 'group_id')->get();
//        $token = $this->userToken->getUserToken()[0]['token'] ?? '';
        $token = $this->userToken->getUserToken();
        return view('dv_viev', ['data' => $events, 'token' => $token]);

    }

    public function setEvent(Request $request) // добавление новых событий через админку (/derevoxp/admin)
    {
        $indicator = '';
        if (isset($request->newDataSet) && isset($request->newGroupIdSet)) { // убедимся, что $_REQUEST содержит информацию
            $data = $request->newDataSet;
            $groupId = $request->newGroupIdSet;
            $checkEvent = \App\DVEvent::where("date", '=', $data)->where('group_id', '=', $groupId)->select('id')->get();
            if (!count($checkEvent)) { // если такого ивента ещё нет - добавляем
                \App\DVEvent::insert(array('date' => $data, 'group_id' => $groupId));
                $indicator = 'Успешно добавлено!';
            } else {
                $indicator = 'Такое событие уже существует!';
            }
        }
//        $token = $this->userToken->getUserToken()[0]['token'] ?? '';
        $token = $this->userToken->getUserToken();
        $events = \App\DVEvent::all()->sortByDesc('id'); // сортируем по последнему id
        return view('dv_admin', ['data' => $events, 'indicator' => $indicator, 'token' => $token]);
    }

    public function sortEventByData() // сортировка по дате
    {
        $events = \App\DVEvent::all()->sortBy('date');
//        $token = $this->userToken->getUserToken()[0]['token'] ?? 'дата';
        $token = $this->userToken->getUserToken();
        return view('dv_viev', ['data' => $events, 'sortData' => 'activeSort', 'sortName' => '', 'token' => $token]);
    }

    public function sortEventByName() // сортировка по имени
    {
        $events = \App\DVEvent::all()->sortBy('group_id');
//        $token = $this->userToken->getUserToken()[0]['token'] ?? 'имя';
        $token = $this->userToken->getUserToken();
        return view('dv_viev', ['data' => $events, 'sortName' => 'activeSort', 'sortData' => '', 'token' => $token]);
    }

    public function register() // костыль, связанный с ошибкой get-post
    {
        return view('dv_register');
    }

    public function registerSend(Request $request)
    {
        $indicator = 'Заполните все поля!';
        if (isset($request->login) && isset($request->password)) { // убедимся, что $_REQUEST содержит информацию
            $login = $request->login;
            $password = $request->password;
            $checkEvent = \App\DVclient::where("login", '=', $login)->get(); // проверяем совпадения имён
            if (!count($checkEvent)) { // если такого клиента ещё нет - добавляем
                $this->userToken->setUserToken(rand(0, 9999999999));
                $token = $this->userToken->getUserToken();
                \App\DVclient::insert(array('login' => $login, 'pass' => $password, 'token' => $token));
                $indicator = 'Пользователь успешно зарегистрирован!';
                return view('dv_test', ['indicator' => $indicator]);
            } else { // зарегистрированного клиента редиректим на страницу заказов
                $events = \App\DVEvent::select('id', 'date', 'group_id')->get();
                $token = \App\DVclient::where("login", '=', $login)->where('pass', '=', $password)->select('token')->get(); // получаем токен с базы
                $token = $token[0]['token'];
                $this->userToken->setUserToken($token); // кладём токен в сессию
                return view('dv_viev', ['data' => $events, 'token' => $token]);
            }

        } else {
            return view('dv_test', ['indicator' => $indicator]);
        }

    }

    public function logout()
    {
        $events = \App\DVEvent::select('id', 'date', 'group_id')->get();
        $this->userToken->setUserToken(''); // чистим сессию
//        $token = $this->userToken->getUserToken()[0]['token'] ?? '';
        $token = $this->userToken->getUserToken();
        return view('dv_viev', ['data' => $events, 'token' => $token]);
    }

}
