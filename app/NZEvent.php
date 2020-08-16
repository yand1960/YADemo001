<?php


namespace App;


use Illuminate\Database\Eloquent\Model;
use App\NZAppointment;

class NZEvent extends Model
{
    protected $table = 'events';
    protected $connection = 'nz_mysql';
    public $timestamps = false;
    public function appointments() {
        return $this->hasMany('App\NZAppointment', 'event_id');
    }
}

