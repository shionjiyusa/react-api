<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    //
    protected $primaryKey = 'picture_id';

    public $timeStamp = false;
}
