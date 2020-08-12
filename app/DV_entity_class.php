<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $connection = 'awsales'; // переопределяем имя коннекции
    protected $fillable = ['OrderID'];
    public $timestamps = false; // отключаем таймстампы
}
