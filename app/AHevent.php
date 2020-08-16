<?php


namespace App;


use Illuminate\Database\Eloquent\Model;
use App\AHappointment;

class AHevent extends Model
{
    protected $connection = 'ah_mysql';
    public $timestamps = false;
    protected $table = 'ahevents';
    public function appointments(){
        return $this->hasMany('App\AHappointment', 'ahevents_id');
    }
}
