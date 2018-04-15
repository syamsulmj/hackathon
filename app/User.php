<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
      'profile_id', 'username', 'password', 'name', 'race', 'citizen', 'phone', 'address', 'email', 'api_token'
    ];

    public static function generateToken()
    {
        $api_token = str_random(60);

        return $api_token;
    }
}
