<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class NZAppointment extends Model
{
    protected $table = 'appointments';
    protected $connection = 'nz_mysql';
    public $timestamps = false;
}
