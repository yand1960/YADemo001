<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class DVEvent extends Model
{
    protected $table = 'events';
    protected $connection = 'DV_mysql'; // переопределяем имя коннекции
    public $timestamps = false; // отключаем таймстампы
}
