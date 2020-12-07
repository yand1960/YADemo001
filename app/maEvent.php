<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class maEvent extends Model
{
    protected $table = 'events';
    protected $connection = 'maMysql';
    public $timestamps = false;
}
