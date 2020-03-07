<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $primaryKey = 'u_id';

    protected $dateFormat = 'U';
    const CREATE_AT = 'create_time';
    const UPDATE_AT = 'edit_time';

    public function generateToken()
    {
        $this->api_token = str_random(60);
        $this->save();

        return $this->api_token;
    }
}
