<?php


namespace App\Http\Controllers;



use App\AHAppointment;
use App\AHEvent;
use Illuminate\Http\Request;


class AHController


{
//    public function events(Request $request)
//    {
//        $events = \App\AHevent::select('Name', 'Description', 'Id')->get();
//        $appointments = \App\AHappointment::select('Name', 'date', 'Id')->get();
//        return view('AH/events', ['events' => $events, 'appointments' => $appointments, ]);
//    }

    public function events(Request $request)
    {
        $events = \App\AHevent::find(1)->get();
        return view('AH/events', ['events'=> $events]);
    }

    public function chosenExam($id){
        $appointments = \App\AHevent::find($id)->appointments;
        return view('AH/appointments', ['data' => $appointments]);
    }

    public function makeAppointment(Request $request){
        $userName =  $request->input('nameInput');
        $id = $request->input('appointmentId');
        $appointments = \App\AHappointment::query()->where('Id', $id)->update(['Name' => $userName]);
        return redirect()->back();
    }

}
