<?php


namespace App\Http\Controllers;



use App\AHAppointment;
use App\AHEvent;
use Illuminate\Http\Request;


class AHController
{
//    public function test($word) {
//        $events = AHEvent::select('name')->get();
//        $appointments = AHAppointment::select('userName')->get();
//        echo '<pre>';
//       var_dump($events);
//        var_dump($appointments);
//        return view('AH/test', ["word"=>$word]);
 //   }

    public function events() {
        $events = AHEvent::all();
//        var_dump($events);
        return view('AH/events', ["events"=>$events]);
    }

    public function eventsDesc() {
        $events = AHEvent::orderBy('name', 'desc')->get();
        return view('AH/events', ["events"=>$events]);
    }

    public function eventsAsc() {
        $events = AHEvent::orderBy('name', 'asc')->get();
        return view('AH/events', ["events"=>$events]);
    }

    public function appointments($id) {
//        $eventName = AHEvent::select('name')->where('id', "=", $id);
        $appointments = AHEvent::find(1)->appointments();
        //var_dump($eventName);
        var_dump($appointments);
        return view('AH/appointments', ["appointments"=>$appointments, "eventName"=>$eventName]);
    }

}
