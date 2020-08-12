<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class NZEvent extends Model
{
    protected $table = 'events';
    protected $connection = 'nz_mysql';
    public $timestamps = false;
}
