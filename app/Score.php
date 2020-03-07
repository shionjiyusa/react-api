<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    //
    protected $primaryKey = 'score_id';

    protected $dateFormat = 'U';
    const CREATE_AT = 'create_time';
    const UPDATE_AT = 'edit_time';
}
