<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = ['profile_id', 'username', 'password', 'name', 'ic', 'race', 'citizen', 'phone', 'address', 'email'];
}
