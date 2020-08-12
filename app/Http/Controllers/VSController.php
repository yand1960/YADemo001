<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

class VSController
{
    public function testEvent(Request $request)
    {
        $events = \App\VS_Events::select('eventName', 'description')->get();
        return view('VS/helloVS', ['data' => $events]);
    }

}
