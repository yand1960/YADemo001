<?php


namespace App\Http\Controllers;



class NZController
{
    public function test($word) {

        return view('NZ/test', ["word"=>$word]);
    }
}
