<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class VS_Appointments extends Model
{
    protected $connection = 'mysqlVS';
    protected $table = 'appointments';
    public $timestamps = false;
}
