<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class DVEntityClass extends Model
{
    protected $connection = 'DV_mysql'; // переопределяем имя коннекции
    protected $fillable = [];
    public $timestamps = false; // отключаем таймстампы
}
