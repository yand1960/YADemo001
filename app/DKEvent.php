<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class DKEvent extends Model
{
    protected $table = 'events';
    protected $connection = 'DiKhSQL';
    protected $primaryKey = 'id';
    protected $name = '';
    protected $description = '';
    protected $fillable = [];
    public $timestamps = false;


}
