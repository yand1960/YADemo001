<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class VS_EntityClass extends Model
{
    protected $connection = 'mydbVS';
    public $timestamps = false;
}
