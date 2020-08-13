<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DVController
{

    public function getEvent(Request $request)
    {
        $events = \App\DVEvent::select('id', 'date', 'group_id')->get();
        return view('dv_viev', ['data' => $events]);
    }

    public function sortEventByData(Request $request)
    {
        $events = \App\DVEvent::all()->sortBy('date');
        return view('dv_viev', ['data' => $events, 'sortData' => 'activeSort', 'sortName' => '']);
    }

    public function sortEventByName(Request $request)
    {
        $events = \App\DVEvent::all()->sortBy('group_id');
        return view('dv_viev', ['data' => $events, 'sortName' => 'activeSort', 'sortData' => '']);
    }


}
