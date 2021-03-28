<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{

    protected $table = 'calendars';
    public $timestamps = false;
    protected $fillable = ['user_id', 'title','start','end'];
}
