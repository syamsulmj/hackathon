<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccountPayments extends Model
{
    protected $fillable = ['account_id','payment_id','payment_method','payment_amount'];
}
