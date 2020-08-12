<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class VS_Events extends Model
{
    protected $connection = 'mysqlVS';
    protected $table = 'events';
    public $timestamps = false;
}
