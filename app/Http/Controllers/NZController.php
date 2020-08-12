<?php


namespace App\Http\Controllers;



use App\NZEvent;

class NZController
{
    public function test($word) {
        $events = NZEvent::select('name')->get();
        echo '<pre>';
        var_dump($events);
        return view('NZ/test', ["word"=>$word]);
    }
}
