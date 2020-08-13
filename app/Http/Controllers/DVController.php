<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DVController
{

    public function getEvent() // список всех событий (/derevoxp)
    {
        $events = \App\DVEvent::select('id', 'date', 'group_id')->get();
        return view('dv_viev', ['data' => $events]);
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
        $events = \App\DVEvent::all()->sortByDesc('id');
        return view('dv_admin', ['data' => $events, 'indicator' => $indicator]);
    }

    public function sortEventByData() // сортировка по дате
    {
        $events = \App\DVEvent::all()->sortBy('date');
        return view('dv_viev', ['data' => $events, 'sortData' => 'activeSort', 'sortName' => '']);
    }

    public function sortEventByName() // сортировка по имени
    {
        $events = \App\DVEvent::all()->sortBy('group_id');
        return view('dv_viev', ['data' => $events, 'sortName' => 'activeSort', 'sortData' => '']);
    }
}
