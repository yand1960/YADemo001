<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class AHappointment extends Model
{
    protected $connection = 'ah_mysql';
    protected $table = 'ahappointments';
    public $timestamps = false;
}
