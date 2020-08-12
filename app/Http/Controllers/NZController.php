<?php


namespace App\Http\Controllers;



use App\NZEvent;
use Illuminate\Http\Request;


class NZController
{
    public function test($word) {
        $events = NZEvent::select('name')->get();
        echo '<pre>';
        var_dump($events);
        return view('NZ/test', ["word"=>$word]);
    }

    public function events() {
        $events = NZEvent::select('name', 'description', 'created_at')->get();
        return view('NZ/events', ["events"=>$events]);
    }

}
