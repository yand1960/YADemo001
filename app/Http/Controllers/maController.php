<?php

namespace App\Http\Controllers;

use App\maEvent;


class maController
{
    public function getEvents()
    {
        $events = maEvent::select('eventTitle')->get();
        var_dump($events);
    }

}
