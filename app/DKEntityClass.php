<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class DKEntityClass extends Model
{
    protected $connection = 'DiKhSQL';
    protected $fillable = [];
    public $timestamps = false;
}
