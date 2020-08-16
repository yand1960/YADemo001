<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class DKController extends Controller
{


    public function DKindex()
    {
        return view('DKindex');
    }

    public function DKcategories()
    {
        return view('DKcategories');
    }

    public function DKcategory($DKcategory) {
        return view('DKcategory', compact('DKcategory'));
    }

    public function DKappointment($event = null)    {

        return view('DKappointment', ['DKappointment' => $event]);
    }

    public function testEvent(Request $request)
    {
        $events = \App\DKEvent::select('eventName', 'description')->get();
        return view('DK/helloDiKh', ['data' => $events]);
    }

}
