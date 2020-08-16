<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class DKCategory extends Model
{
    protected $table = 'events';
    protected $connection = 'DiKhSQL';
    protected $primaryKey = 'id';
    protected $categoryId = 'category_id';
    protected $name = '';
    protected $description = '';
    protected $fillable = [];
    public $timestamps = false;


}
