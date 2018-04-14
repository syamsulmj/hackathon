<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAccounts extends Model
{
    protected $fillable = ['profile_id','account_id','balance'];
}
