<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    protected $table = 'dogs';
    public $timestamps = false;

    protected $fillable = ['user_id', 'name','photo','weight','size','race','sex','birth','color','chip_date','location_chip'];
    public function vaccine()
    {
        return $this->hasMany('App\Vaccine');
    }
}
