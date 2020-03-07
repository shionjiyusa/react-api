<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    //
    protected $primaryKey = 'picture_id';

    protected $dateFormat = 'U';
    const CREATE_AT = 'create_time';
    const UPDATE_AT = 'edit_time';
}
