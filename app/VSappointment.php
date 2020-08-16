<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class VSappointment extends Model
{
    protected $connection = 'mysqlVS';
    protected $table = 'vsappointments';
    public $timestamps = false;
}
