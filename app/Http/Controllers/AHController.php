<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

class AHController
{
    public function testEvent(Request $request)
    {
        $events = \App\VSevent::select('eventName', 'description', 'id')->get();
        $appointments = \App\VSappointment::select('User', 'appointmentDate', 'id')->get();
        return view('VS/helloVS', ['events' => $events, 'appointments' => $appointments, ]);
    }
    public function testSummary(Request $request)
    {
//        $summary = DB::table('appointments')->select('*')
//            ->get();
//        $appointments = \App\VSevent::find(1)->appointments;
        $events = \App\AHevent::find(1)->get();
//        $events = \App\VSevent::where('id','1')->get();
        echo($events);
        return view('AH/hello', ['events'=> $events]);
    }
//    public function testAppointment(Request $request)
//    {
//        $appointments = \App\VSappointment::select('User', 'appointmentDate')->get();
//        return view('VS/helloVS', ['data' => $appointments]);
//    }
//    public function addAppointment(Request $request)
//    {
//        $appointments = \App\VSappointment::insert('User', 'appointmentDate')->get();
//        return view('VS/helloVS', ['data' => $appointments]);
//    }

}
