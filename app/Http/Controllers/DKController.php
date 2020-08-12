<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class DKController
{

    public function testEvent(Request $request)
    {
        $events = \App\DKEvent::select('eventName', 'description')->get();
        return view('DK/helloDiKh', ['data' => $events]);
    }

}
