<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

class VSController
{
    public function testEvent(Request $request)
    {
        $events = \App\VS_Events::select('eventName', 'description')->get();
        $appointments = \App\VS_Appointments::select('User', 'appointmentDate', 'id')->get();
        return view('VS/helloVS', ['events' => $events, 'appointments' => $appointments]);
    }
    public function testAppointment(Request $request)
    {
        $appointments = \App\VS_Appointments::select('User', 'appointmentDate')->get();
        return view('VS/helloVS', ['data' => $appointments]);
    }
    public function addAppointment(Request $request)
    {
        $appointments = \App\VS_Appointments::insert('User', 'appointmentDate')->get();
        return view('VS/helloVS', ['data' => $appointments]);
    }

}
