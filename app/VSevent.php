<?php


namespace App;


use Illuminate\Database\Eloquent\Model;
use App\AHappointment;

class VSevent extends Model
{
    protected $connection = 'mysqlVS';
    public $timestamps = false;
    protected $table = 'vsevents';
    public function appointments(){
        return $this->hasMany('App\VSappointment', 'vsevent_id');
    }
}
