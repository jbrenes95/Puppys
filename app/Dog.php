<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    public function vaccine()
    {
        return $this->hasMany('App\Vaccine');
    }
}
