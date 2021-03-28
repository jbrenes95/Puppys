<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    public $timestamps = false;
    public $table ="vaccine";

    protected $fillable = ['vaccines_id', 'dog_id','name','veterinary','vaccination_date','expiration'];
    public function dog()
    {
        return $this->hasOne('App\Dog');
    }
}
