<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class NZEvent extends Model
{
    protected $connection = 'nz_mysql';
    protected $primaryKey = 'ProductID';
    public $timestamps = false;
}
