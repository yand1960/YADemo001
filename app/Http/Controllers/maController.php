<?php

namespace App\Http\Controllers;

use App\maEvent;
use Illuminate\Http\Request;


class maController
{
    public function test()
    {
        $events = maEvent::select('eventTitle')->get();
        var_dump($events);
    }

    public function eventList(Request $request)
    {
        $events = maEvent::find(1)->get();
        return view('ma/maevents', ['events'=> $events]);
    }
}
