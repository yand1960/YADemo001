<?php


namespace App\Http\Controllers;



use App\AHAppointment;
use App\AHEvent;
use Illuminate\Http\Request;


class AHController


{
//    public function events(Request $request)
//    {
//        $events = \App\VSevent::select('Name', 'Description', 'Id')->get();
//        $appointments = \App\VSappointment::select('Name', 'date', 'Id')->get();
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
//        UPDATE `vsappointments` SET `User` = 'VladimirOne' WHERE `vsappointments`.`id` = 6

    }
    /*    public function appointments($id) {
    //        $eventName = AHEvent::select('name')->where('id', "=", $id);
            $appointments = AHEvent::find(1)->appointments();
            //var_dump($eventName);
            var_dump($appointments);
            return view('AH/appointments', ["appointments"=>$appointments, "eventName"=>$eventName]);
        }*/

}
