<?php


namespace App\Http\Controllers;



use App\NZAppointment;
use App\NZEvent;
use Illuminate\Http\Request;


class NZController
{
    public function test($word) {
        $events = NZEvent::select('name')->get();
        $appointments = NZAppointment::select('userName')->get();
        echo '<pre>';
        var_dump($events);
        var_dump($appointments);
        return view('NZ/test', ["word"=>$word]);
    }

    public function events() {
        $events = NZEvent::find(1)->appointments;
        var_dump($events);
        return view('NZ/events', ["events"=>$events]);
    }

    public function eventsDesc() {
        $events = NZEvent::orderBy('created_at', 'desc')->get();
        return view('NZ/events', ["events"=>$events]);
    }

    public function eventsAsc() {
        $events = NZEvent::orderBy('created_at', 'asc')->get();
        return view('NZ/events', ["events"=>$events]);
    }

}
