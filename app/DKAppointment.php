<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class DKAppointment extends Model
{
    protected $connection = 'DiKhSQL';
    protected $table = 'appointments';
    public $timestamps = false;
}



