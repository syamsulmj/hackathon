<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataLog extends Model
{
    protected $fillable = ['HTTP_action', 'noun', 'business_operation'];

}
