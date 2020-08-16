<?php

namespace App\Http\Controllers;

use App\DKAppointment;
use App\DKCategory;
use App\DKEvent;
use Illuminate\Http\Request;
use Calendar;
use Illuminate\Support\Facades\Redirect;


class DKController extends Controller
{

    public function DKindex()
    {
        $appointments = DKAppointment::get();
        return view('DKindex', compact('appointments'));
    }

    public function addEvent(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'event_name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
    ]);
            if($validator->fails()) {
                \Session::flash('Warning', 'Please enter the valid details');
                return Redirect::to('/events')->withInput()->withErrors($validator);
            }

            $event = new DKEvent;
            $event->event_name = $request['event_name'];
            $event->start_date = $request['start_date'];
            $event->end_date = $request['end_date'];
            $event->save();

            \Session::flash('success', 'Event added successfully.');
            return Redirect::to('/events');


    }

    public function DKevents($cat_id) {
        $events = DKEvent::where('category_id', $cat_id)->get();
        return view('DKevents', ["events"=>$events]);
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



//    public function testEvent(Request $request)
//    {
//        $events = \App\DKEvent::select('eventName', 'description')->get();
//        return view('DK/helloDiKh', ['data' => $events]);
//    }

}
