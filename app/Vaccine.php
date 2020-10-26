<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    public $timestamps = false;

    protected $fillable = ['vaccines_id', 'dog_id','veterinary','vaccination_date','expiration','name'];
    public function dog()
    {
        return $this->hasOne('App\Dog');
    }
}
