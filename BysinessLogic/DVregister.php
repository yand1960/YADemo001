<?php

use Illuminate\Support\Facades;

class DVregister
{

    public  function __construct()
    {
        if (!Session::has('userToken')) {
            $userToken = [];
            Session::put('userToken', $userToken);
        }
    }

    public function setUserToken($userToken) {
        Session::put('userToken', $userToken);
        return true;
    }

    public function getUserToken() {
        return Session::get('userToken');
    }

}
