<?php


namespace App;
use Illuminate\Database\Eloquent\Model;

class DVappointments extends Model
{
    protected $table = 'appointments';
    protected $connection = 'DV_mysql'; // переопределяем имя коннекции
    public $timestamps = false; // отключаем таймстампы
}
