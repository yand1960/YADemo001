<?php

namespace App\Http\Controllers;


use App\DKCategory;
use Illuminate\Http\Request;

class DKController extends Controller
{


    public function DKindex()
    {
        return view('DKindex');
    }

    public function DKcategories()
    {
        $categories = DKCategory::get();
        return view('DKcategories', compact('categories'));
    }

    public function DKcategory($code) {
        $category = DKCategory::where('code', $code)->first();
        return view('DKcategory', compact('category'));
    }

    public function DKappointment($event = null)    {

        return view('DKappointment', ['DKappointment' => $event]);
    }

    public function testEvent(Request $request)
    {
        $events = \App\DKEvent::select('eventName', 'description')->get();
        return view('DK_view', ['data' => $events]);
    }

}
