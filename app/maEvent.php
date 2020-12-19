<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class maEvent extends Model
{
    protected $connection = 'maMysql';
    public $timestamps = false;
    protected $table = 'maEvents';
    public function appointments(){
        return $this->hasMany('App\maAppointment', 'maEvent_id');
    }
}
