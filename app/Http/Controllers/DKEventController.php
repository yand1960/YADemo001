<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class DKEventController extends Controller
{
    public function index()
    {
        $events = Event::paginate(request('perPage', 5));
        return view('index', ['events' => $events]);
    }

    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $student_name = $request['student_name'];
        $subject = $request['subject'];
        $scheduled_for = $request['scheduled_for'];

        $event = new Event();

        $event->student_name = $student_name;
        $event->subject = $subject;
        $event->scheduled_for = $scheduled_for;

        $event->save();
        return redirect()->back();
    }

    public function edit($event_id)
    {
        $event = Event::findOrFail($event_id);
        return view('edit', [
            "event" => $event
        ]);
    }

    public function update($event_id)
    {
        $event = Event::findOrFail($event_id);
        $event->student_name = request()->input("student_name");
        $event->subject =  request()->input("subject");
        $event->scheduled_for =  request()->input("scheduled_for");
        $event->update();
        return redirect()->route("events.index");
    }

    public function destroy($event_id)
    {
        Event::destroy($event_id);
        return redirect()->route("events.index");
    }
}
