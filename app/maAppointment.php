<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class maAppointment extends Model
{
    protected $connection = 'maMysql';
    protected $table = 'maAppointments';
    public $timestamps = false;
}
