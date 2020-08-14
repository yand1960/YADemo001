<?php


namespace App\Http\Controllers;


class YAController
{
    public function index() {
        //return view ("YA/hi");
        echo("DODODO!<br/ >");
        var_dump(\App\DVEvent::select('id', 'date', 'group_id')->get());
        echo("DODODO!<br/ >");
        var_dump(\App\DKEvent::all());
        return "";
    }
}
