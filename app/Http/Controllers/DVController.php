<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DVController
{

    public function getEvent(Request $request)
    {
        $events = \App\DVEvent::select('date', 'group_id')->get();
        return view('dv_viev', ['data' => $events]);
    }


}
