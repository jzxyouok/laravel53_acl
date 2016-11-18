<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users()
    {
        //資料表關連
        return $this->belongsToMany('App\User', 'user_role', 'role_id', 'user_id');
    }
}
