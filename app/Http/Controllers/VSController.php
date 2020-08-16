<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VSController
{
    public function testEvent(Request $request)
    {
        $events = \App\VSevent::select('eventName', 'description', 'id')->get();
        $appointments = \App\VSappointment::select('User', 'appointmentDate', 'id')->get();
        return view('VS/helloVS', ['events' => $events, 'appointments' => $appointments, ]);
    }
    public function examList(Request $request)
    {
        $events = \App\VSevent::find(1)->get();
//        $all = \App\VSevent::all();
//        $events = \App\VSevent::where('id','1')->get();
        return view('VS/helloVS', ['events'=> $events]);
    }
    public function physicsExam(Request $request){
        $appointments = \App\VSevent::find(1)->appointments;
        return view('VS/appointmentsVS', ['data' => $appointments]);

    }
    public function chemistryExam(Request $request){
        $appointments = \App\VSevent::find(2)->appointments;
        return view('VS/appointmentsVS', ['data' => $appointments]);

    }
    public function mechanicsExam(Request $request){
        $appointments = \App\VSevent::find(3)->appointments;
        return view('VS/appointmentsVS', ['data' => $appointments]);

    }
//    public function joinTest(Request $request){
//
//    }


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
