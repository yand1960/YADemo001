<?php


namespace App\Http\Controllers;


class YAController
{
    public function index() {
        //return view ("YA/hi");
		echo("<h1>Hi, I am YA</h1>");
        echo("TEST DV DATA LAYER:<br/ >");
        var_dump(\App\DVEvent::select('id', 'date', 'group_id')->get());
        echo("<br/ >TEST DK DATA LAYER:<br/ >");
        var_dump(\App\DKEvent::all());
        return "";
    }
}
