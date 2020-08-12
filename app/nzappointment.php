<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Nzappointment extends Model
{
    protected $connection = 'nz_mysql';
    protected $primaryKey = 'ProductID';
    public $timestamps = false;
}
