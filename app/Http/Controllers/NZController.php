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
        $events = NZEvent::all();
//        var_dump($events);
        return view('NZ/events', ["events"=>$events]);
    }

    public function eventsDesc() {
        $events = NZEvent::orderBy('name', 'desc')->get();
        return view('NZ/events', ["events"=>$events]);
    }

    public function eventsAsc() {
        $events = NZEvent::orderBy('name', 'asc')->get();
        return view('NZ/events', ["events"=>$events]);
    }

    public function appointments($id) {
        $eventNameArr = NZEvent::where('id', "=", $id)->select('name')->first();
        $eventName = $eventNameArr['name'];
//        $eventName = NZEvent::all();
        $appointments = NZEvent::find(1)->appointments();
        echo '<pre>';
        echo($eventName);
        echo($appointments);
        return view('NZ/appointments', ["eventName"=>$eventName]);
    }

}
