<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class maEvent extends Model
{
    protected $connection = 'maMysql';
    protected $table = 'events';
    protected $primaryKey = 'id';
    protected $eventTitle = '';
    protected $eventDescription = '';
    protected $fillable = [];
    public $timestamps = false;
}
