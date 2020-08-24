<?php


namespace App\Http\Controllers;



use App\AHAppointment;
use App\AHEvent;
use Illuminate\Http\Request;


class AHController


{
   public function events(Request $request)
   {
        $events = \App\AHevent::select('Name', 'Description', 'Id')->get();
        $appointments = \App\AHappointment::select('Id', 'Name', 'date')->get();
        return view('AH/events', ['events' => $events, 'appointments' => $appointments, ]);
    }

    public function examlist(Request $request)
    {
        $events = \App\AHevent::find(1)->get();
        return view('AH/events', ['events'=> $events]);
    }

    public function chosenExam($id){
       $appointments = \App\AHevent::find($id)->appointments;
        $appointments = \App\AHappointment::where('ahevents_id', '=', $id)->select('Name', 'Id', 'date')->get();
        return view('AH/appointments', ['data' => $appointments]);
    }

    public function makeAppointment(Request $request){
          $userName =  $request->input('nameInput');
          $id = $request->input('appointmentId');

//        $appointments = \App\AHappointment::query()->where('Id', $id)->update(['Name' => $userName]);

        $appointments = \App\AHappointment::where('Id', $id)->update(['Name' => $userName]);
//        $a = array($id, $Name);
//        return $a;
        return redirect()->back();
    }

}
