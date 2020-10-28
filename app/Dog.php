<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dog extends Model
{
    use SoftDeletes;
    protected $table = 'dogs';
    public $timestamps = false;

    protected $fillable = ['user_id', 'name','photo','weight','size','race','sex','birth','color','chip_date','location_chip'];
    public function vaccine()
    {
        return $this->hasMany('App\Vaccine');
    }
}
