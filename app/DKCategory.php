<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class DKCategory extends Model
{
    protected $table = 'categories';
    protected $connection = 'DiKhSQL';
    protected $primaryKey = 'id';
    protected $name = '';
    protected $description = '';
    protected $code = '';
}
