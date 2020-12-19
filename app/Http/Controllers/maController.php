<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class maController
{
    public function movieList(Request $request)
    {
        $events = \App\maEvent::find(1)->get();
        return view('MA/maevents', ['events'=> $events]);
    }

    public function selectedMovie($id){
        $appointments = \App\maEvent::find($id)->appointments;
        return view('MA/maappointments', ['data' => $appointments]);
    }

    public function reserveVisit(Request $request){
        $userName =  $request->input('nameInput');
        $id = $request->input('appointmentId');
        $appointments = \App\maAppointment::query()->where('id', $id)->update(['user' => $userName]);
        return back();
    }

}
