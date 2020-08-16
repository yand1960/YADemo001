<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class DVclient extends Model // таблица зарегистрированных юзеров
{
    protected $table = 'client';
    protected $connection = 'DV_mysql';
    public $timestamps = false;
}
