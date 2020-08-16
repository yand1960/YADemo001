<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class DKEvent extends Model
{
    protected $table = 'events';
    protected $connection = 'DiKhSQL';
    protected $primaryKey = 'id';
    protected $categoryId = 'category_id';
    protected $name = '';
    protected $description = '';
    protected $fillable = [
        'event_name', 'start_date', 'end_date'
    ];
    public $timestamps = false;


    public function appointments(){
        return $this->hasMany('App\DKappointment', 'event_id');
    }

}
